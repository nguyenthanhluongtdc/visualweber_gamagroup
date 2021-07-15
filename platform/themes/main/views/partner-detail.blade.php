<div class="breadcrumb-wrap">
    <ul class="breadcrumb-list container font-helve-light" itemscope itemtype="http://schema.org/BreadcrumbList">

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
            <a href="{{ route('public.index') }}">{{ __('Home') }}</a>
            <span class="icon">
                <i class="fas fa-angle-right"></i>
            </span>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
            <a href="{{ route('public.index') }}/{{ get_slug_partner() }}">{{ __('Partner') }}</a>
            <span class="icon">
                <i class="fas fa-angle-right"></i>
            </span>
        </li>

        <li class="active link-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            {{ $partner->name }}
        </li>

    </ul>
</div>


{{-- --------------------------------------đối tác--------------------- --}}
<div class="all-news-content">
    <div class="container">
        <div class="new-section1 section1-partner">
            <div class="row_wrap">
                <div class="content-md4">
                    <div class="new-title font-helve-bold font30 title-primary pri-color">
                        {!! get_field($partner, 'name_partner_detail') !!}
                    </div>
                </div>
                <div class="content-md8">
                    <div class="desc font18 font-helve-light">
                        {!! get_field($partner, 'desc_partner_detail') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="partner-banner">
    <div class="container">
        <div class="new--banner">
            <div class="main-slider owl-carousel">
                @if (has_field($partner, 'slider_banner_partner_detail'))
                    @foreach (get_field($partner, 'slider_banner_partner_detail') as $item)
                        <div class="new--slider__item">
                            <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'hinh_banner_item')) }}"
                                alt="banner">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>



<div class="partner-orona">
    <div class="container">
        <div class="row">
            <h2 class="col-md-4 partner-title  font-helve-bold font30">
                @if (has_field($partner, 'title_section2_partner_detail'))
                    {!! get_field($partner, 'title_section2_partner_detail') !!}
                @endif
            </h2>
            <div class="col-md-8">
                <div class="row partner-orona__item">
                    @if (has_field($partner, 'list_section2_partner_detail'))
                        @foreach (get_field($partner, 'list_section2_partner_detail') as $item)
                            <div class="col-md-6 partner-orona__item ">
                                <h3 class="partner-title font-helve-bold font20">
                                    {{ get_sub_field($item, 'title_item_section2_partner_detail') }}</h3>
                                <div class="font-helve font18"> {!! get_sub_field($item, 'desc_item_section2_partner_detail') !!}</div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@if (has_field($partner, 'section3_partner_detail'))

    <div class="partner-s1">
        <div class="container">
            <div class="row">
                @foreach (get_field($partner, 'section3_partner_detail') as $item)
                    <div class="col-md-6 partner--s1__item">
                        <div class="wrap-item">
                            <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'img_section3_partner_detail')) }}"
                                alt="{!! get_sub_field($item, 'title_section3_partner_detail') !!}" class="img-slider">
                            <div class="content-title">
                                <h3 class="title font-helve-bold font30 title-link-partner"><a
                                        href="{{ get_sub_field($item, 'add_link_partner') }}">{!! get_sub_field($item, 'title_section3_partner_detail') !!}</a>
                                </h3>
                                <div class="content-none ">
                                    <p class="desc font-helve-light font18">{!! get_sub_field($item, 'desc_section3_partner_detail') !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endif
