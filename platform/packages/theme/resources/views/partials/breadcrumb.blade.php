<div class="breadcrumb-wrap">
    <ul class="breadcrumb-list container font-helve-light" itemscope itemtype="http://schema.org/BreadcrumbList">
        @foreach ($crumbs = Theme::breadcrumb()->getCrumbs() as $i => $crumb)
            @if ($i != (count($crumbs) - 1))
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
                    <a href="{{ $crumb['url'] }}" itemprop="item" title="{{ $crumb['label'] }}">
                        {{ $crumb['label'] }}
                        <meta itemprop="name" content="{{ $crumb['label'] }}" />
                    </a>
                    <meta itemprop="position" content="{{ $i + 1}}" />
                    <span class="icon">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </li>
            @else
                <li class="active link-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    {!! $crumb['label'] !!}
                    <meta itemprop="name" content="{{ $crumb['label'] }}" />
                    <meta itemprop="position" content="{{ $i + 1}}" />
                </li>
            @endif
        @endforeach
    </ul>
</div>
