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
                <div class="new--slider__item">
                    <img src="{{ Theme::asset()->url('images/partner/shutterst.jpg') }}" alt="" class="img-slider">
                  
                </div>
                <div class="new--slider__item">
                    <img src="{{ Theme::asset()->url('images/partner/shutterst.jpg') }}" alt="" class="img-slider">

                </div>
                <div class="new--slider__item">
                    <img src="{{ Theme::asset()->url('images/partner/shutterst.jpg') }}" alt="" class="img-slider">
                  
                </div>
            </div>
        </div>
    </div>
</div>

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