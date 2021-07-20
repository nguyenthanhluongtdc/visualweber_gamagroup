{!! Theme::breadcrumb()->render() !!}

<div class="all-news-content">
    <div class="container">
        <div class="new-section1">
            <div class="row">
                <div class="col-lg-4">
                    <h1 class="new-title font-helve-bold font30">
                        {!! $page -> description !!}
                        
                    </h1>
                </div>
                <div class="col-lg-8">
                    <div class="desc font18 font-helve-light">
                       {!! $page -> content!!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

{{------------------------talent  banner  -------------}}
<div class="talent-s2">

    @if (has_field($page, 'banner_nhan_tai'))
        <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_nhan_tai')) }}" alt="banner">
    @endif
</div>

{{------------------------ talent dẫn lỗi tiên phong ----------------------}}
<div class="business-section3 padding80">
    <div class="container">
        <div class="row">
            <div class="col-md-4 danloi">
                <ul class="nav nav-pills list-business-tab font-helve font20" role="tablist" role="tablist">
                    @if (has_field($page, 'menu_nhan_tai'))
                        @foreach (get_field($page, 'menu_nhan_tai') as $key => $item)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab"
                                    href="#tab{{ $key }}">{{ get_sub_field($item, 'title_menu_nhan_tai') }}</a>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </div>
            <div class="col-md-8 talent--info font-helve-light font18">
                <div class="tab-content">
                    @if (has_field($page, 'menu_nhan_tai'))
                        @foreach (get_field($page, 'menu_nhan_tai') as $key => $item)
                            <div id="tab{{ $key }}"
                                class="tab-pane content-tab {{ $loop->first ? 'active' : '' }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        @if (has_sub_field($item, 'desc_menu_nhan_tai'))
                                        <div class="desc font-helve-light font18">
                                            {!! get_sub_field($item, 'desc_menu_nhan_tai') !!}
                                        </div>
                                    @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if (has_sub_field($item, 'img_menu_nhan_tai'))
                                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'img_menu_nhan_tai')) }}"
                                        >
                                        @endif
                                    </div>
                                </div>
                               

                             
                            
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{----------------------- talent sự phát triển sự nghiệp -----------------------}}
<div class="talent-s4">
    <div class="container">
        <div class="row career--info">
            <div class="col-md-4">
                <h2 class="career-title font-helve-bold font30">
                    @if (has_field($page, 'title_nhan_tai_su_phat_trien'))
                    {!! get_field($page, 'title_nhan_tai_su_phat_trien') !!}
                @endif
                </h2>
            </div>
            <div class="col-md-8">
                <div class="carrer-desc font-helve-light font18">
                    @if (has_field($page, 'desc_nhan_tai_su_phat_trien'))
                    {!! get_field($page, 'desc_nhan_tai_su_phat_trien') !!}
                @endif
                </div>
            </div>
        </div>
        <div class="row develop-block">
            <div class="section4-home">
                <div class="section4-content container" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">

                    @foreach (get_field($page, 'list_phat_trien_su_nghiep') as $item)
                    <div class="section4-item" >
                        <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'item_talent_img')) }}" alt="{!! get_sub_field($item, 'item_talent_title') !!}">
                        <div class="content-title" >
                            <h5 class="title font-helve-bold font30">{!! get_sub_field($item, 'item_talent_title') !!}</h5>
                            <div class="content-none ">
                                <p class="desc font-helve-light font18">{!! get_sub_field($item, 'item_talent_title_16267506313') !!}</p>
                            </div>
        
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            
        </div>
    </div>
    
</div>


{{--------------------------- cơ hội làm việc -------------- --}}

<div class="business-section4">
    <div class="container">
        <div class="row_wrap">
            @if (has_field($page, 'title_nhan_tai_co_hoi_lam_viec'))
                <div class="content-md4 font-helve-bold font30 tile-ri pri-color">
                    <div class="padding50">
                        {!! get_field($page, 'title_nhan_tai_co_hoi_lam_viec') !!}
                    </div>
                </div>
            @endif
            @if (has_field($page, 'desc_nhan_tai_co_hoi_lam_viec'))
                <div class="content-md8 content-left"
                    style="background-image: url('{{ Theme::asset()->url('images/business/map.png') }}')">
                    <div class="top-content font-helve-light font18 padding50">
                        {!! get_field($page, 'desc_nhan_tai_co_hoi_lam_viec') !!}
                    </div>
                    <div class="link">
                        <a href="{{ get_slug_job() }}" class="font-helve font18">
                            {{__('career opportunities')}}
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
