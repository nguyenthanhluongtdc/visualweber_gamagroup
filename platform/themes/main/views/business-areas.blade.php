{!! Theme::breadcrumb()->render() !!}
<div class="business-section1 padding80">
    <div class="container">
        <div class="row_wrap">
            <div class="content-md4 font-helve-bold font30 title-primary pri-color">
                @if (has_field($page, 'title_business'))
                    {!! get_field($page, 'title_business') !!}
                @endif
            </div>
            <div class="content-md8 font-helve-light font18">
                @if (has_field($page, 'desc_business'))
                    {!! get_field($page, 'desc_business') !!}
                @endif
            </div>
        </div>
    </div>
</div>
<div class="business-banner">
    @if (has_field($page, 'banner_business'))
        <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_business')) }}" alt="banner">
    @endif
</div>
<div class="business-section2 padding80">
    <div class="container">
        <div class="row_wrap">
            <div class="content-md4">
                @if (!empty(get_featured_service(10)))
                    <ul class="nav nav-pills list-business-tab font-helve font20" role="tablist">
                        @foreach (get_featured_service(10) as $key => $item)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="pill"
                                    href="#tabservice{{ $key }}">{{ $item->name }}</a>
                            </li>
                        @endforeach

                    </ul>
                @endif
            </div>

            @if (!empty(get_featured_service(10)))
                <div class="content-md8">
                    <div class="tab-content list-business-content">
                        @foreach (get_featured_service(10) as $key => $item)
                            <div id="tabservice{{ $key }}" class="container tab-pane {{ $loop->first ? 'active' : '' }}">
                                <div class="row">

                                    <div class="col-md-6 content-wrap">
                                        <div class="content font-helve-light font18">
                                           {!! $item->content !!}
                                        </div>
                                        <div class="views content-none-mobie">
                                            <a href="{{ $item->url }}" class="primary-a font-helve">
                                                {{ trans('See more') }}
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <img src="{{ RvMedia::getImageUrl($item->image) }}" alt="{{ $item->name }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="business-section3">
    <div class="container">
        <div class="row">
            @if (has_field($page, 'company_business'))
                @foreach (get_field($page, 'company_business') as $item)
                    <div class="col-md-4 item-coun title-primary pri-color" data-aos="fade-up" data-aos-duration="900"
                        data-aos-easing="ease-in-out">
                        <p class="title font-helve-bold font50">{{ get_sub_field($item, 'number_company_business') }}
                        </p>
                        <p class="desc font-helve font18">{{ get_sub_field($item, 'text_company_business') }}</p>
                    </div>
                @endforeach

            @endif
        </div>
    </div>
</div>
<div class="business-section4">
    <div class="container">
        <div class="row_wrap">
            @if (has_field($page, 'work_business_title'))
                <div class="content-md4 font-helve-bold font30 tile-ri pri-color">
                    <div class="padding50">
                        {!! get_field($page, 'work_business_title') !!}
                    </div>
                </div>
            @endif
            @if (has_field($page, 'work_business_desc'))
                <div class="content-md8 content-left"
                    style="background-image: url('{{ Theme::asset()->url('images/business/map.png') }}')">
                    <div class="top-content font-helve-light font18 padding50">
                        {!! get_field($page, 'work_business_desc') !!}
                    </div>
                    <div class="link">
                        <a href="" class="font-helve font18">
                            Cơ hội nghề nghiệp
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
