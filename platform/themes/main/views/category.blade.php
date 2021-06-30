{!! Theme::breadcrumb()->render() !!}
@if ($posts->count() > 0)
<div class="container">
    <div class="post-category-wrap">
        <div class="row">
            @foreach ($posts as $post)
            <div class="post-category-item col-md-4">
                <div class="post-thumbnail">
                    <a href="{{ $post->url }}" class="post__overlay">
                        <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="{{ $post->name }}">
                    </a>
                </div>
                <h5 class="font-helve font20"><a href="{{ $post->url }}" class="post__title"> {{ $post->name }}</a></h5>
                <div class="post-meta">
                    @if (!$post->categories->isEmpty())
                        <span class="post-category">
                            <a href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
                        </span>
                    @endif
                    <span class="time"> {{ $post->created_at->format('d/m/Y H:i') }}</span>      
                </div>
                <div class="desc font-helve-light font18">
                    {{ $post->description }}
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
    {{-- @foreach ($posts as $post)
        <article class="post post__horizontal mb-40 clearfix">
            <div class="post__thumbnail">
                <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}"><a href="{{ $post->url }}" class="post__overlay"></a>
            </div>
            <div class="post__content-wrap">
                <header class="post__header">
                    <h3 class="post__title"><a href="{{ $post->url }}">{{ $post->name }}</a></h3>
                    <div class="post__meta"><span class="post__created-at"><i class="ion-clock"></i>{{ $post->created_at->format('M d, Y') }}</span>
                        @if ($post->author->username)
                            <span class="post__author"><i class="ion-android-person"></i><span>{{ $post->author->name }}</span></span>
                        @endif
                        <span class="post-category"><i class="ion-cube"></i><a href="{{ $category->url }}">{{ $category->name }}</a></span></div>
                </header>
                <div class="post__content">
                    <p data-number-line="4">{{ $post->description }}</p>
                </div>
            </div>
        </article>
    @endforeach --}}
    <div class="page-pagination text-right">
        {!! $posts->links() !!}
    </div>
@else
    <div class="alert alert-warning">
        <p>{{ __('There is no data to display!') }}</p>
    </div>
@endif
