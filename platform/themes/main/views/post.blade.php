{!! Theme::breadcrumb()->render() !!}
<div class="container">
    
    <article class="post post-wrap">
        <div class="post-top">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-content">
                        <h3 class="post-title font-helve font35">{{ $post->name }}</h3>
                   
                        <div class="post-meta">
                            @if (!$post->categories->isEmpty())
                                <span class="post-category"><i class="ion-cube"></i>
                                    <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                                </span>
                            @endif
                            <span class="time"> {{ $post->created_at->format('d/m/Y H:i') }}</span>      
                        </div>
                        <div class="description font-helve font18">
                            {!! $post->description !!}
                        </div>
                        <div class="post__content font-helve-light font18">
                            @if (defined('GALLERY_MODULE_SCREEN_NAME') && !empty($galleries = gallery_meta_data($post)))
                                {!! render_object_gallery($galleries, ($post->first_category ? $post->first_category->name : __('Uncategorized'))) !!}
                            @endif
                            
                            {!! clean($post->content, 'youtube') !!}
                        </div>
    
                        <div class="post-share">
                            <ul class="left">
                                <li class="font18">{{ trans('Share') }}</li>
                                <li><a href="//www.pinterest.com/pin/create/button/?url={{ Request::url() }}" target="_blank"><img src="{{ Theme::asset()->url('images/new/iconp.png') }}" alt="pinterest"></a></li>
                                <li><a href="//www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank"><img src="{{ Theme::asset()->url('images/new/iconf.png') }}" alt="facebook"></a></li>
                                <li><a href="mailto:boyover055@gmail.com&subject={{ Request::url() }}"><img src="{{ Theme::asset()->url('images/new/iconm.png') }}" alt="mail"></a></li>
                            </ul>
                            <div class="right font-helve font20">
                                {{ $post->author->name }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 post-new-wrap">
                    
                    @php $postNew =  get_post_new(3);  @endphp
                    @if($postNew->count())
                        <h2 class="font-helve-bold font30">{{ trans('Latest news') }}</h2>
                            <div class="post-new-list">
                        @foreach($postNew as $itemPost)
                            <div class="post-new-item" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">
                                <div class="post-thumbnail">
                                    <a href="{{ $itemPost->url }}" class="post__overlay">
                                        <img src="{{ RvMedia::getImageUrl($itemPost->image) }}" alt="{{ $itemPost->name }}">
                                    </a>
                                </div>
                                <h5 class="font-helve font20"><a href="{{ $itemPost->url }}" class="post__title"> {{ $itemPost->name }}</a></h5>
                                <div class="post-meta">
                                    @if (!$itemPost->categories->isEmpty())
                                        <span class="post-category">
                                            <a href="{{ $itemPost->categories->first()->url }}">{{ $itemPost->categories->first()->name }}</a>
                                        </span>
                                    @endif
                                    <span class="time"> {{ $itemPost->created_at->format('d/m/Y H:i') }}</span>      
                                </div>
                            </div>
    
                        @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
     
            @php $relatedPosts = get_related_posts($post->id, 12); @endphp
    
            @if ($relatedPosts->count())
            <div class="post-relate">
                    <h2 class="font-helve-bold font30">{{ trans('Related news') }}</h2>
                    <div class="post-relate-carousel owl-carousel">
                        @foreach ($relatedPosts as $relatedItem)
                            <div class="post-relate-item" data-aos="zoom-in-up" data-aos-duration="700" data-aos-easing="ease-in-out">
                                <div class="post-thumbnail">
                                    <a href="{{ $relatedItem->url }}" class="post__overlay">
                                        <img src="{{ RvMedia::getImageUrl($relatedItem->image) }}" alt="{{ $relatedItem->name }}">
                                    </a>
                                </div>
                                <header class="post__header">
                                    <h5 class="font-helve font20"><a href="{{ $relatedItem->url }}" class="post__title"> {{ $relatedItem->name }}</a></h5>
                                    <div class="post-meta">
                                        @if (!$relatedItem->categories->isEmpty())
                                            <span class="post-category">
                                                <a href="{{ $relatedItem->categories->first()->url }}">{{ $relatedItem->categories->first()->name }}</a>
                                            </span>
                                        @endif
                                        <span class="time"> {{ $relatedItem->created_at->format('d/m/Y H:i') }}</span>      
                                    </div>
                                    <div class="post__desc font18">{{ $relatedItem->description }}</div>
                                </header>
                            </div>
                        @endforeach
                    </div>
            </div>
            @endif
    </article>
</div>
