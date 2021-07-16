<div class="breadcrumb-wrap">
    <ul class="breadcrumb-list container font-helve-light" itemscope itemtype="http://schema.org/BreadcrumbList">

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
            <a href="{{ route('public.index') }}">{{ __('Home') }}</a>
            <span class="icon">
                <i class="fas fa-angle-right"></i>
            </span>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
            <a href="{{ route('public.index') }}/{{ get_slug_posts() }}">{{ __('Blog') }}</a>
            <span class="icon">
                <i class="fas fa-angle-right"></i>
            </span>
        </li>

        <li class="active link-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            {{ __('Search result for: ') . ' "' . Request::input('q') . '"' }}
        </li>

    </ul>
</div>


@if ($posts->count() > 0)
    <div class="container">
        <div class="post-category-wrap">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="post-category-item col-md-4">
                        <div class="post-thumbnail">
                            <a href="{{ $post->url }}" class="post__overlay">
                                <img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                    alt="{{ $post->name }}">
                            </a>
                        </div>
                        <h5 class="font-helve font20"><a href="{{ $post->url }}" class="post__title">
                                {{ $post->name }}</a></h5>
                        <div class="post-meta">
                            @if (!$post->categories->isEmpty())
                                <span class="post-category">
                                    <a
                                        href="{{ $post->categories->first()->url }}">{{ $post->categories->first()->name }}</a>
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
            <div class="page-pagination text-right">
                {!! $posts->withQueryString()->links() !!}
            </div>
        </div>
    </div>

@else

    <div class="alert alert-warning font18 font-helve serach-no-item">
        <div class="container">
            <p>{{ __('There is no data to display!') }}</p>
        </div>
    </div>
@endif
