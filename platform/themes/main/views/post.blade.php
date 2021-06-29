{!! Theme::breadcrumb()->render() !!}
<article class="post post--single container">
    <div class="post-top">
        <div class="post-content">
            <h3 class="post-title font-helve font35">{{ $post->name }}</h3>
       
        <div class="post__meta">
            @if (!$post->categories->isEmpty())
                <span class="post-category"><i class="ion-cube"></i>
                    <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                </span>
            @endif
            <span class="time"> {{ $post->created_at->format('d/m/Y H:i') }}</span>      
        </div>
        <div class="post__content">
            @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
                {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
            @endif
            {!! clean($post->content, 'youtube') !!}
            <div class="fb-like" data-href="{{ Request::url() }}" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
        </div>
    </div>
    </div>





    <header class="post__header">
        <h3 class="post__title">{{ $post->name }}</h3>
        <div class="post__meta">
            @if (!$post->categories->isEmpty())
                <span class="post-category"><i class="ion-cube"></i>
                    <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                </span>
            @endif
            <span class="post__created-at"><i class="ion-clock"></i>{{ $post->created_at->format('M d, Y') }}</span>
            @if ($post->author->username)
                <span class="post__author"><i class="ion-android-person"></i><span>{{ $post->author->name }}</span></span>
            @endif

            @if (!$post->tags->isEmpty())
                <span class="post__tags"><i class="ion-pricetags"></i>
                    @foreach ($post->tags as $tag)
                        <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                    @endforeach
                </span>
            @endif
        </div>
    </header>
    <div class="post__content">
        @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
            {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
        @endif
        {!! clean($post->content, 'youtube') !!}
        <div class="fb-like" data-href="{{ Request::url() }}" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
    </div>
    @php $relatedPosts = get_related_posts($post->id, 2); @endphp

    @if ($relatedPosts->count())
        <footer class="post__footer">
            <div class="row">
                @foreach ($relatedPosts as $relatedItem)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="post__relate-group @if ($loop->last) post__relate-group--right @endif">
                            <h4 class="relate__title">@if ($loop->first) {{ __('Previous Post') }} @else {{ __('Next Post') }} @endif</h4>
                            <article class="post post--related">
                                <div class="post__thumbnail"><a href="{{ $relatedItem->url }}" class="post__overlay"></a>
                                    <img src="{{ RvMedia::getImageUrl($relatedItem->image, 'thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $relatedItem->name }}">
                                </div>
                                <header class="post__header">
                                    <p><a href="{{ $relatedItem->url }}" class="post__title"> {{ $relatedItem->name }}</a></p>
                                    <div class="post__meta"><span class="post__created-at">{{ $post->created_at->format('M d, Y') }}</span></div>
                                </header>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </footer>
    @endif
    @if (theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes')
        <br />
        {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, Theme::partial('comments')) !!}
    @endif
</article>