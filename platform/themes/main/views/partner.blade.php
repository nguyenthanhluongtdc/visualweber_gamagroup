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

<div class="opportunity-s2">
    <img src="{{ Theme::asset()->url('images/talent/banner2.jpg') }}" alt="" class="img-slider">
</div>


{{-- ---------------------- talent dẫn lỗi tiên phong -------------------- --}}
<div class="talent-s3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="talent--title font-helve-bold font20">Dẫn lối tiên phong</h3>
                <div class="talent-des font-helve font20">Tôn trọng bản sắc</div>
                <div class="talent-des font-helve font20">Môi trường chuyên nghiệp</div>
            </div>
            <div class="col-md-4 d-flex align-items-start flex-column justify-content-between talent--info font-helve-light font18">
                <p>
                    @if (has_field($page, 'desc_thang_may_orona'))
                        {!! get_field($page, 'desc_thang_may_orona') !!}
                    @endif
                </p>
                <div class="views font-helve font18">
                    <a href="" class="primary-a">Xem thêm</a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ Theme::asset()->url('images/partner/group36.jpg') }}" alt="" class="img-slider">
            </div>
        </div>
    </div>
</div>

{{-- -------------------------------- danh sách số  ----------------- --}}

<div class="partner--info">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="partner--info__number font-helve-bold font50">
                    15 năm
                </div>
                <div class="partner--infor__title font-helve font18">
                    Hoạt Động
                </div>
            </div>
            <div class="col-md-4">
                <div class="partner--info__number font-helve-bold font50">
                    99
                </div>
                <div class="partner--infor__title font-helve font18">
                    Công ty thành viên
                </div>
            </div>
            <div class="col-md-4">
                <div class="partner--info__number font-helve-bold font50">
                    1,488,142
                </div>
                <div class="partner--infor__title font-helve font18">
                    Thang máy được lắp đặt
                </div>
            </div>
        </div>
    </div>
</div>

{{-- -------------------- vươn tầm nhìn --------------- --}}
<div class="vision--partner">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-start flex-column justify-content-between">
                <div class="vision--partner__title font-helve-bold font30">
                    @if (has_field($page, 'title_tam_nhin_vuon_xa'))
                    {!! get_field($page, 'title_tam_nhin_vuon_xa') !!}
                @endif
            </div>
                <div class="vision--partner__desc font-helve font18">
                    @if (has_field($page, 'desc_tam_nhin_vuon_xa'))
                    {!! get_field($page, 'desc_tam_nhin_vuon_xa') !!}
                @endif
                </div>
                
            </div>
            <div class="col-md-8">
                <img src="{{ Theme::asset()->url('images/partner/adult.jpg') }}" alt="" class="img-slider">
            </div>
        </div>
    </div>
</div>

{{-- banner footer --}}
<div class="partner-s1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 partner--s1__item">
                <img src="{{ Theme::asset()->url('images/partner/group37.jpg') }}" alt="" class="img-slider">
                <div class="content-title" >
                    <h3 class="title font-helve-bold font30">Tin tức <br>
                        đầu tư</h3>
                    <div class="content-none ">
                        <p class="desc font-helve-light font18">Cùng điểm qua các tin tức mới nhất về những dự án đầu tư của GAMA Group</p>
                    </div>
    
                </div>
            </div>
            <div class="col-md-6 partner--s1__item">
                <img src="{{ Theme::asset()->url('images/partner/group38.jpg') }}" alt="" class="img-slider">
                <div class="content-title" >
                    <h3 class="title font-helve-bold font30">Trở thành đối tác <br>
                        GAMA Group</h3>
                    <div class="content-none ">
                        <p class="desc font-helve-light font18">GAMA Group luôn đảm bảo nguồn tài nguyên dồi dào dành cho từng doanh nghiệp mới tham gia danh mục đầu tư.
                        </p>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>