{!! Theme::breadcrumb()->render() !!}
<div class="history-section1 padding80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @if (has_field($page, 'title_history'))
                    <h3 class="font-helve-bold font30">
                        {!! get_field($page, 'title_history') !!}
                    </h3>
                @endif
            </div>
            <div class="col-lg-8">
                @if (has_field($page, 'desc_history'))
                    <div class="desc font18 font-helve-light">
                        {!! get_field($page, 'desc_history') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="history-banner">
    @if (has_field($page, 'banner_history'))
        <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_history')) }}" alt="Lịch sử phát triển">
    @endif
</div>
<div class="history-section2">
    <div class="container">
        <div class="row">
            @if (has_field($page, 'list_history'))
                @foreach (get_field($page, 'list_history') as $item)      
                    <div class="col-md-4">
                        <div class="history-item">
                            <div class="top">
                                <div class="top-content">
                                    @if (get_sub_field($item, 'history_year'))
                                    <p class="year font-helve-bold font30">
                                       {{ get_sub_field($item, 'history_year') }}
                                    </p>
                                    @endif
                                    @if (get_sub_field($item, 'image_history_item'))
                                    <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'image_history_item')) }}" alt="Development history">
                                    @endif
                                </div>
                            </div>
                            @if (get_sub_field($item, 'desc_history_item'))
                            <div class="bottom font18 font-helve-light">
                                    {!! get_sub_field($item, 'desc_history_item') !!}
                            </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
           
        </div>
    </div>
</div>

<div class="section4-about">
    <div class="container">
        <div class="row">
            @if (has_field($page, 'company_number'))
                @foreach (get_field($page, 'company_number') as $item)
                    <div class="col-md-4 item-coun" data-aos="fade-up" data-aos-duration="900"
                        data-aos-easing="ease-in-out">
                        <p class="title font-helve-bold font50">{{ get_sub_field($item, 'number_top') }}</p>
                        <p class="desc font-helve font18">{{ get_sub_field($item, 'title_number') }}</p>
                    </div>
                @endforeach

            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="section5-about">
        <div class="row">
            <div class="col-lg-4 admin-left" data-aos="fade-right" data-aos-duration="700"
                data-aos-easing="ease-in-out">
                @if (has_field($page, 'title_admin_history'))
                    <h3 class="font-helve-bold font30">
                        {!! get_field($page, 'title_admin_history') !!}
                    </h3>
                @endif
                <div class="view font-helve font18 content-desktop">
                    <a href="" class="primary-a">{{ trans('See more') }}</a>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
                @if (has_field($page, 'desc_admin_history'))
                    <div class="desc-right font-helve font18">
                        {!! get_field($page, 'desc_admin_history') !!}
                    </div>
                @endif

                @if (has_field($page, 'list_admin_slider_history'))
                    <div class="list-admin-slider owl-carousel">
                        @foreach (get_field($page, 'list_admin_slider_history') as $item)
                            <div class="admin-item">
                                <a href="{{ Theme::asset()->url('images/about/qt1.jpg') }}" data-fancybox="hdqt"
                                    data-caption="Johna than Hạnh Nguyễn">
                                    <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'image_admin_slider_history'))  }}" alt="">
                                </a>
                                <h5 class="name font-helve font18">
                                   {!! get_sub_field($item, 'name_admin_slider_history') !!}
                                </h5>
                                <div class="desc">
                                    {!! get_sub_field($item, 'desc_admin_slider_history') !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                    
            </div>
        </div>
        <div class="view font-helve font18 content-mobie">
            <a href="">{{ trans('See more') }}</a>
        </div>
    </div>

</div>
