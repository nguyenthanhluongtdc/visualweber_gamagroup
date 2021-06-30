{!! Theme::breadcrumb()->render() !!}
<div class="about-detail-s1 padding80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="font-helve-bold font30">
                    @if (has_field($page, 'title_section1_about_detail'))
                        {!! get_field($page, 'title_section1_about_detail') !!}
                    @endif
                </h3>
            </div>
            <div class="col-lg-8 font-helve font18">
                @if (has_field($page, 'description_section1'))
                    {!! get_field($page, 'description_section1') !!}
                @endif
            </div>
        </div>

    </div>
</div>
<div class="about-detail-s2">
    @if (has_field($page, 'image_banner'))
        <img src="{{ RvMedia::getImageUrl(get_field($page, 'image_banner')) }}" alt="banner">
    @endif
</div>
<div class="about-detail-s3 padding80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 left" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                <h3 class="font-helve-bold font30">
                    @if (has_field($page, 'title_section2_about_detail'))
                        {!! get_field($page, 'title_section2_about_detail') !!}
                    @endif
                </h3>
                <div class="desc font-helve font18">
                    @if (has_field($page, 'content_section2_about_detail'))
                        {!! get_field($page, 'content_section2_about_detail') !!}
                    @endif
                </div>
            </div>
            <div class="col-lg-8 right" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
                @if (has_field($page, 'image_section2'))
                    <img src="{{ RvMedia::getImageUrl(get_field($page, 'image_section2')) }}"
                        alt="{!! get_field($page, 'title_section2_about_detail') !!}">
                @endif
            </div>
        </div>
    </div>
</div>
<div class="about-detail-s4">

</div>
<div class="about-detail-s5 padding80">
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                    <h3 class="font-helve-bold font30">
                        @if (has_field($page, 'title_section4_about_detail'))
                            {!! get_field($page, 'title_section4_about_detail') !!}
                        @endif
                    </h3>
                </div>
                <div class="col-md-8 font-helve font18" data-aos="fade-left" data-aos-duration="700"
                    data-aos-easing="ease-in-out">
                    @if (has_field($page, 'description_section4'))
                            {!! get_field($page, 'description_section4') !!}
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
