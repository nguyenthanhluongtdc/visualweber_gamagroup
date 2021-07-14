{!! Theme::breadcrumb()->render() !!}
<div class="about-detail-s1 padding80">
    <div class="container">
        <div class="row_wrap">
            <div class="content-md4 font-helve-bold font30 title-primary pri-color">
                    @if (has_field($page, 'title_section1_about_detail'))
                        {!! get_field($page, 'title_section1_about_detail') !!}
                    @endif
            </div>
            <div class="content-md8 font-helve-light font18">
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
        <div class="row_wrap">
            <div class="content-md4 left" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                <h3 class="font-helve-bold font30">
                    @if (has_field($page, 'title_section2_about_detail'))
                        {!! get_field($page, 'title_section2_about_detail') !!}
                    @endif
                </h3>
                <div class="desc font-helve-light font18">
                    @if (has_field($page, 'content_section2_about_detail'))
                        {!! get_field($page, 'content_section2_about_detail') !!}
                    @endif
                </div>
            </div>
            <div class="content-md8 right" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
                @if (has_field($page, 'image_section2'))
                    <img src="{{ RvMedia::getImageUrl(get_field($page, 'image_section2')) }}"
                        alt="{!! get_field($page, 'title_section2_about_detail') !!}">
                @endif
            </div>
        </div>
    </div>
</div>
<div class="about-detail-s4">
    <div class="container">
        <div class="row_wrap">
            <div class="col4 font-helve-bold font30 title-primary pri-color">
                    @if (has_field($page, 'title_value'))
                        {!! get_field($page, 'title_value') !!}
                    @endif
            </div>
            @if (has_field($page, 'list_value'))
                @foreach (get_field($page, 'list_value') as $item)
                    <div class="col4 about-detail-s4-item">
                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'img_value_item')) }}"
                        alt="{!! get_sub_field($item, 'title_value_item') !!}">
                        <p class="title font-helve-bold font20 pri-color">{!! get_sub_field($item, 'title_value_item') !!}</p>
                        <p class="desc font-helve-light font18">{!! get_sub_field($item, 'desc_value_item') !!}</p>
                    </div>
                @endforeach
            @endif

           
        </div>
    </div>
</div>
<div class="about-detail-s5 padding80">
    <div class="container">
        <div class="top">
            <div class="row_wrap">
                <div class="content-md4" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                    <div class="font-helve-bold font30 title-primary pri-color">
                        @if (has_field($page, 'title_section4_about_detail'))
                            {!! get_field($page, 'title_section4_about_detail') !!}
                        @endif
                    </div>
                </div>
                <div class="content-md8 font-helve-light font18" data-aos="fade-left" data-aos-duration="700"
                    data-aos-easing="ease-in-out">
                    @if (has_field($page, 'description_section4'))
                            {!! get_field($page, 'description_section4') !!}
                        @endif
                </div>
            </div>
        </div>
        <div class="about-detail-s5-slider owl-carousel" data-aos="fade-up" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            @php $category = get_category_default(); 
            
            $listPost = get_posts_by_category_order($category[0]->id , 12 , 12, ['posts.created_at' => 'desc']);
            @endphp
            
            @if (!empty( $listPost))
                    @foreach ($listPost as $item)
                    <div class="item">
                        <a href="{{ $item->url }}">
                            <div class="img"> <img src="{{ RvMedia::getImageUrl($item->image,'medium', false, RvMedia::getDefaultImage())}}" alt="{{ $item->name }}"></div>
                        </a>
                        <h5 class="font-helve font20"><a href="{{ $item->url }}">{{ $item->name }}</a></h5>
                    </div>
                    @endforeach
            @endif
            
        </div>
        <div class="views font-helve font18">
            <a href="{{ get_slug_posts() }}" class="primary-a"> {{ trans('See more') }}</a>
        </div>
    </div>
</div>
