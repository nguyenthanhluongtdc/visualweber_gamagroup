@php Theme::layout('no-sidebar') @endphp
@include('theme.main::views/pages/home/section/main-slide')
<div class="about-us">
    <div class="abouut-us-content container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                @if (has_field($page, 'title_section1'))
                    <h3 class="font-helve-bold font30">{!! get_field($page, 'title_section1') !!}</h3>
                @endif
            </div>
            <div class="col-md-8 font-helve content-right font18" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
                @if (has_field($page, 'content_section1'))
                    {!! get_field($page, 'content_section1') !!}
                @endif
            </div>
        </div>
    </div>
</div>

{{-- lĩnh vực kinh doanh --}}
<div class="business-areas">
    <div class="business-areas-content container">
        <div class="row">
            <div class="col-lg-4 content-left" data-aos="zoom-out-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                @if (has_field($page, 'title_section1'))
                    <h3 class="font-helve-bold font30">
                        {!! get_field($page, 'title_section2') !!}
                    </h3>
                @endif
                {{-- <div class="views-all-logo content-desktop">
                    <a href="" class="font18 font-helve">
                        {{ get_field($page, 'view_all_brand') }}
                    </a>
                </div> --}}
            </div>
            <div class="col-lg-8 content-right">
                <div class="row">
                    <div class="col-md-7" data-aos="zoom-out-up" data-aos-duration="700" data-aos-easing="ease-in-out">
                        <div class="tab-content">
                            @if (has_field($page, 'content_section2'))
                                @foreach (get_field($page, 'content_section2') as $key => $item)
                                    <div id="tab{{ $key }}"
                                        class="tab-pane content-tab {{ $loop->first ? 'active' : '' }}">

                                        <h5 class="font-helve-bold">{{ get_sub_field($item, 'tab_menu') }}</h5>
                                        @if (has_sub_field($item, 'tab_content'))
                                            <div class="desc font-helve font18">
                                                {!! get_sub_field($item, 'tab_content') !!}
                                            </div>
                                        @endif

                                        @if (has_sub_field($item, 'list_img_brand'))
                                            <div class="list-logo">
                                                @foreach (get_sub_field($item, 'list_img_brand') as $item_img)
                                                    <a href="{{ get_sub_field($item_img, 'link_brand') }}"
                                                        class="logo-link" title="logo">
                                                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item_img, 'img_brand')) }}"
                                                            alt="logo">
                                                    </a>
                                                @endforeach

                                                {{-- <a href="" class="logo-link">
                                            <img src="{{ Theme::asset()->url('images/homepage/logo2.png') }}" alt="">
                                        </a>
                                        <a href="" class="logo-link">
                                            <img src="{{ Theme::asset()->url('images/homepage/logo3.png') }}" alt="">
                                        </a>
                                        <a href="" class="logo-link">
                                            <img src="{{ Theme::asset()->url('images/homepage/logo4.png') }}" alt="">
                                        </a>
                                        <a href="" class="logo-link">
                                            <img src="{{ Theme::asset()->url('images/homepage/logo5.png') }}" alt="">
                                        </a> --}}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                {{-- <div id="tab1" class="tab-pane active content-tab">
                                <h5 class="font-helve-bold">Tích hợp hệ thống</h5>
                                <p class="desc font-helve font18">
                                    Công nghệ đang được xem là công cụ chiến lược giúp các tổ chức, doanh nghiệp nâng
                                    cao năng lực cạnh tranh, thúc đẩy sự đổi mới sáng tạo trong hoạt động.
                                </p>
                                <div class="list-logo">
                                    <a href="" class="logo-link">
                                        <img src="{{ Theme::asset()->url('images/homepage/logo1.png') }}" alt="">
                                    </a>
                                    <a href="" class="logo-link">
                                        <img src="{{ Theme::asset()->url('images/homepage/logo2.png') }}" alt="">
                                    </a>
                                    <a href="" class="logo-link">
                                        <img src="{{ Theme::asset()->url('images/homepage/logo3.png') }}" alt="">
                                    </a>
                                    <a href="" class="logo-link">
                                        <img src="{{ Theme::asset()->url('images/homepage/logo4.png') }}" alt="">
                                    </a>
                                    <a href="" class="logo-link">
                                        <img src="{{ Theme::asset()->url('images/homepage/logo5.png') }}" alt="">
                                    </a>
                                </div>
                            </div> --}}
                            @endif

                        </div>
                    </div>
                    <div class="col-md-5 menu-tab" data-aos="zoom-out-left" data-aos-duration="700" data-aos-easing="ease-in-out">

                        <ul class="nav nav-tabs font20 font-helve" role="tablist">
                            @if (has_field($page, 'content_section2'))
                                @foreach (get_field($page, 'content_section2') as $key => $item)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab"
                                            href="#tab{{ $key }}">{{ get_sub_field($item, 'tab_menu') }}</a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="views-all-logo content-mobie">
            <a href="" class="font18 font-helve views-logo-mobie" title="brand">
                {{ get_field($page, 'view_all_brand') }}
            </a>
        </div> --}}
    </div>
</div>

{{-- tin tức --}}
<div class="news-home">
    <div class="news-home-content container">
        <div class="row">
            <div class="col-lg-4 content-left" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                <h3 class="font-helve-bold font30">Tin tức<br>
                    mới nhất</h3>
                <div class="views-all content-desktop">
                    <a href="" class="font-helve font20">
                        Xem tất cả
                    </a>
                </div>

            </div>
            <div class="content-right col-lg-8">
                <div class="row">
                    @if (!empty(get_posts_by_category_order(get_category_order()[0]['id'], 2, 2, ['posts.created_at' => 'desc'])))
                    @foreach (get_posts_by_category_order(get_category_order()[0]['id'], 2, 2, ['posts.created_at' => 'desc']) as $post)
                   
                    <div class="item-right col-md-6" data-aos="zoom-in-up" data-aos-duration="700" data-aos-easing="ease-in-out" data-aos-delay="30">
                        <a href="{{ $post->slug }}" class="item-link" title="{{ $post->name }}">
                            <img src="{{ RvMedia::getImageUrl($post->image) }}" alt="{{ $post->name }}" class="img-slider">
                            <h4 class="font-helve font20">
                                {{ $post->name }}
                            </h4>

                        </a>
                        <div class="tag-time font-helve">
                            <span class="tag">Kinh doanh</span>
                            <span class="time"> {{ $post->created_at->format('d/m/Y H:i') }}</span>
                        </div>
                        <p class="desc font-helve font18">
                            {{ $post->description }}
                        </p>
                    </div>
                    @endforeach
                    @endif
                    {{-- <div class="item-right col-md-6">
                        <a href="" class="item-link">
                            <img src="{{ Theme::asset()->url('images/homepage/item2.jpg') }}" alt=""
                                class="img-slider">
                            <h4 class="font-helve font20">Bộ Công Thương: Không có chuyện
                                'doanh nghiệp thép bắt tay làm giá'
                            </h4>
                        </a>
                        <div class="tag-time font-helve">
                            <span class="tag">Cộng đồng</span>
                            <span class="time">15/03/2021 15:00</span>
                        </div>
                        <p class="desc font-helve font18">
                            Ngoài yêu cầu doanh nghiệp thép tăng công suất sản xuất, Bộ Công Thương tính hạn chế xuất
                            khẩu loại thép mà trong nước có nhu cầu.
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="views-all content-mobie">
            <a href="" class="font-helve font20 views-news-mobie">
                Xem tất cả
            </a>
        </div>
    </div>
</div>

<div class="section4-home">
    <div class="section4-content container" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">
        <div class="section4-item" >
            <img src="{{ Theme::asset()->url('images/homepage/end1.jpg') }}" alt="">
            <div class="content-title" >
                <h5 class="title font-helve-bold font30">Lịch sử <br> phát triển</h5>
                <div class="content-none ">
                    <p class="desc font-helve font18">Ngoài yêu cầu doanh nghiệp thép tăng công suất sản xuất, Bộ Công
                        Thương tính hạn chế xuất khẩu loại thép mà trong nước có nhu cầu.</p>
                    <a href=""><img src="{{ Theme::asset()->url('images/homepage/iconright.png') }}" alt=""></a>
                </div>

            </div>
        </div>
        <div class="section4-item">
            <img src="{{ Theme::asset()->url('images/homepage/end2.jpg') }}" alt="">
            <div class="content-title" >
                <h5 class="title font-helve-bold font30">Nhân tài</h5>
                <div class="content-none ">
                    <p class="desc font-helve font18">Ngoài yêu cầu doanh nghiệp thép tăng công suất sản xuất, Bộ Công
                        Thương tính hạn chế xuất khẩu loại thép mà trong nước có nhu cầu.</p>
                    <a href=""><img src="{{ Theme::asset()->url('images/homepage/iconright.png') }}" alt=""></a>
                </div>

            </div>
        </div>
        <div class="section4-item">
            <img src="{{ Theme::asset()->url('images/homepage/end3.jpg') }}" alt="">
            <div class="content-title" >
                <h5 class="title font-helve-bold font30">Định hướng <br> phát triển</h5>
                <div class="content-none ">
                    <p class="desc font-helve font18">Ngoài yêu cầu doanh nghiệp thép tăng công suất sản xuất, Bộ Công
                        Thương tính hạn chế xuất khẩu loại thép mà trong nước có nhu cầu.</p>
                    <a href=""><img src="{{ Theme::asset()->url('images/homepage/iconright.png') }}" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</div>
