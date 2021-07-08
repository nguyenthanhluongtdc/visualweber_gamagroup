{!! Theme::breadcrumb()->render() !!}

{{-- --------------------------------------đối tác--------------------- --}}
<div class="all-news-content">
    <div class="container">
        <div class="new-section1">
            <div class="row">
                <div class="col-lg-4">
                    <h1 class="new-title font-helve-bold font30">
                        {!! $page->description !!}

                    </h1>
                </div>
                <div class="col-lg-8">
                    <div class="desc font18 font-helve">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="new-banner">
    <div class="container">
        <div class="new--banner">
            <div class="main-slider owl-carousel">
                @if (has_field($page, 'banner_doi_tac_orona'))
                @foreach (get_field($page, 'banner_doi_tac_orona') as $item)
                 <div class="new--slider__item">
                 <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'img_partner_orona')) }}" alt="banner">
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
                @if (has_field($page, 'title_dat_diem_thang_may'))
                    {!! get_field($page, 'title_dat_diem_thang_may') !!}
                @endif
            </h2>
            <div class="col-md-8">
                <div class="row partner-orona__item">
                    @if (has_field($page, 'title_danh_sach_uu_diem_thang_may'))
                    @foreach (get_field($page, 'title_danh_sach_uu_diem_thang_may') as $item)
                    <div class="col-md-6 partner-orona__item ">
                        <h3 class="partner-title font-helve-bold font20">{{ get_sub_field($item, 'title_uu_diem_thang_may') }}</h3>
                        <div class="font-helve font18"> {!! get_sub_field($item, 'desc_uu_diem_thang_may') !!}</div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>



<div class="partner-s1">
    <div class="container">
        <div class="row">
            {{-- @if (has_field($page, 'banner_footer'))
            @foreach (get_field($page, 'banner_footer') as $item)
            <div class="col-md-6 partner--s1__item">
                <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'img_banner_footer')) }}" alt="banner">
                <div class="content-title">
                    <h3 class="title font-helve-bold font30">{{ get_sub_field($item, 'title_banner_footer') }}</h3>
                    <div class="content-none desc font-helve-light font18 ">
                       {!! get_sub_field($item, 'desc_banner_footer') !!}
                    </div>

                </div>
            </div>
            @endforeach
            @endif --}}
            <div class="col-md-6 partner--s1__item">
                <img src="{{ Theme::asset()->url('images/partner/group37.jpg') }}" alt="" class="img-slider">
                <div class="content-title">
                    <h3 class="title font-helve-bold font30">Tin tức
                        <br>
                        đầu tư</h3>
                    <div class="content-none ">
                        <p class="desc font-helve-light font18">Cùng điểm qua các tin tức mới nhất về những dự án đầu tư của GAMA Group.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 partner--s1__item">
                <img src="{{ Theme::asset()->url('images/partner/group38.jpg') }}" alt="" class="img-slider">
                <div class="content-title">
                    <h3 class="title font-helve-bold font30">Trở thành đối tác <br>
                        GAMA Group</h3>
                    <div class="content-none ">
                        <p class="desc font-helve-light font18">GAMA Group luôn đảm bảo nguồn tài nguyên dồi dào dành
                            cho từng doanh nghiệp mới tham gia danh mục đầu tư.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
