{!! Theme::breadcrumb()->render() !!}
<div class="admin-section1">
    <div class="container">
        <div class="admin-desc">
            <div class="row">
                <div class="col-lg-4">
                    @if (has_field($page, 'title_admin'))
                        <h3 class="font-helve-bold font30">
                            {!! get_field($page, 'title_admin') !!}
                        </h3>
                    @endif
                </div>
                <div class="col-lg-8">
                    @if (has_field($page, 'desc_admin'))
                        <div class="desc font-helve-light font18">
                            {!! get_field($page, 'desc_admin') !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="admin-content">
            <div class="row">
                @if (has_field($page, 'admin_list'))
                    @foreach (get_field($page, 'admin_list') as $item)
                        <div class="col-md-3 admin-item">
                           
                                <a href="{{ RvMedia::getImageUrl(get_sub_field($item, 'admin_image_item')) }}" data-fancybox="hdqt">
                                    <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'admin_image_item')) }}" >
                                </a>
                                <h5 class="name font-helve font18">
                                    {!! get_sub_field($item, 'name_admin_item') !!}
                                </h5>
                                <div class="desc font-helve-light">
                                    {!! get_sub_field($item, 'desc_admin_item') !!}
                                </div>
                          
                        </div>
                    @endforeach

                @endif

            </div>
        </div>
    </div>
</div>

<div class="admin-section2 about-detail-s5 padding80">
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                    <h3 class="font-helve-bold font30">
                        @if (has_field($page, 'title_community'))
                            {!! get_field($page, 'title_community') !!}
                        @endif
                    </h3>
                </div>
                <div class="col-md-8 font-helve font18" data-aos="fade-left" data-aos-duration="700"
                    data-aos-easing="ease-in-out">
                    @if (has_field($page, 'desc_community'))
                        {!! get_field($page, 'desc_community') !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="about-detail-s5-slider owl-carousel" data-aos="fade-up" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <div class="item">
                <a href="">
                    <div class="img"><img src="{{ Theme::asset()->url('images/about/s5a.jpg') }}" alt=""></div>
                </a>
                <h5 class="font-helve font20"><a href="">Trao tặng vật tư, thiết bị y tế hỗ trợ Chính phủ và nhân dân
                        Cam-pu-chia</a></h5>
            </div>
            <div class="item">
                <a href="">
                    <div class="img"><img src="{{ Theme::asset()->url('images/about/s5b.jpg') }}" alt=""></div>
                </a>
                <h5 class="font-helve font20"><a href="">Trao tặng vật tư, thiết bị y tế hỗ trợ Chính phủ và nhân dân
                        Cam-pu-chia</a></h5>
            </div>
            <div class="item">
                <a href="">
                    <div class="img"><img src="{{ Theme::asset()->url('images/about/s5c.jpg') }}" alt=""></div>
                </a>
                <h5 class="font-helve font20"><a href="">Trao tặng vật tư, thiết bị y tế hỗ trợ Chính phủ và nhân dân
                        Cam-pu-chia</a></h5>
            </div>
        </div>
        <div class="views font-helve font18">
            <a href="" class="primary-a">Xem thêm</a>
        </div>
    </div>
</div>
