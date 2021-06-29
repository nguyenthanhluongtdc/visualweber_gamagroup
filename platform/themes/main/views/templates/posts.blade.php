{!! Theme::breadcrumb()->render() !!}
{{-- @includeIf("theme.armcobarriers::views.modules.breadcrumb") --}}
{{-- @dd('') --}}

{{-- -------------------------------------- new title--------------------- --}}
<div class="all-news-content">
    <div class="container">
        <div class="new-section1">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="font-helve-bold font30 new-title">
                        {{-- {!! $page -> description !!} --}}
                    </h3>
                </div>
                <div class="col-lg-8">
                    <div class="desc font18 font-helve">
                        {{-- {!! $page -> content!!} --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ---------------------------------- new banner ------------------------------ --}}
    <div class="new-banner">
        <div class="container">
            <div class="new--banner">
                <div class="main-slider owl-carousel">
                    <div class="new--slider__item">
                        <img src="{{ Theme::asset()->url('images/new/slide.jpg') }}" alt="" class="img-slider">
                        <div class="fade">dfghjk</div>
                        <div class="content">
                            <h4 class="font-helve-bold font20">
                                Nhật coi hồi sinh ngành chất bán dẫn là nhiệm vụ quốc gia
                            </h4>
                            <div class="new--time font-helve font12">
                                <span class="new--info">Kinh Doanh</span>
                                <span class="new--item">15/03/2021</span>
                                <span class="new--item"> 15:00</span>
                            </div>
                            <span class="new--des font18 font-helve">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn
                                là
                                sứ mệnh quốc gia, quan trọng không kém...</span>
                        </div>
                    </div>
                    <div class="new--slider__item">
                        <img src="{{ Theme::asset()->url('images/new/slider1.jpg') }}" alt="" class="img-slider">
                        <div class="fade"></div>
                        <div class="content">
                            <h4 class="font-helve-bold font20">
                                Nhật coi hồi sinh ngành chất bán dẫn là nhiệm vụ quốc gia
                            </h4>
                            <div class="new--time font-helve font12">
                                <span class="new--info">Kinh Doanh</span>
                                <span class="new--item">15/03/2021</span>
                                <span class="new--item"> 15:00</span>
                            </div>
                            <span class="new--des font18 font-helve">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn
                                là
                                sứ mệnh quốc gia, quan trọng không kém...</span>
                        </div>
                    </div>
                    <div class="new--slider__item">
                        <img src="{{ Theme::asset()->url('images/new/slide.jpg') }}" alt="" class="img-slider">
                        <div class="fade"></div>
                        <div class="content">
                            <h4 class="font-helve-bold font20">
                                Nhật coi hồi sinh ngành chất bán dẫn là nhiệm vụ quốc gia
                            </h4>
                            <div class="new--time font-helve font12">
                                <span class="new--info">Kinh Doanh</span>
                                <span class="new--item">15/03/2021</span>
                                <span class="new--item"> 15:00</span>
                            </div>
                            <span class="new--des font18 font-helve">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn
                                là
                                sứ mệnh quốc gia, quan trọng không kém...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ----------------------------------- filter ---------------------------------- --}}
    <div class="new-filter">
        <div class="container">
            <div class="filter">

                <div class="row">
                    <h4 class="font-helve-bold font20 filter--title">
                        Xem tin theo
                    </h4>
                </div>
                <div class="row mt-3"  data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-in-out">

                    <div class="col-md-3  mt-2">
                        <select class="dropdown">
                            <div class="option">
                            <option hidden>Mới nhất</option>

                            <option class="option" value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </div>
                        </select>

                    </div>

                    <div class="col-md-3 mt-2">
                        <select class="dropdown">
                            <option hidden>Tin tổng hợp</option>
                            <option value="1">Tin kinh doanh</option>
                            <option value="2">Tin cộng đồng</option>
                            <option value="3">Tin nội bộ</option>

                        </select>
                    </div>
                    <div class="col-md-3  mt-2">
                        <select class="dropdown">
                            <option hidden>Thương hiệu</option>

                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>


                        </select>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>

        </div>
    </div>

    {{-- ---------------------------------- new ---------------------------------------- --}}
    <div class="blod-new">
        <div class="container">
            <div class="new">
                <div class="row " data-aos="fade-right" data-aos-duration="1500" data-aos-easing="ease-in-out">
                    <div class="col-md-4 mt-2 mb-3 " >
                        <a href="">
                            <img src="{{ Theme::asset()->url('images/new/new1.jpg') }}" alt="" class="img-slider"
                                alt="">
                        </a>
                        <a href="">
                            <span class="new--title font-helve font20">Gama Service và “Hội nghị gắn kết
                                giáo dục nghề nghiệp thủ đô với thị tr Lorem ipsum dolor sit amet consectetur
                                adipisicing</span>
                        </a>
                        <div class="new--time font-helve font12">
                            <span class="new--info">Kinh Doanh</span>
                            <span class="new--item">15/03/2021</span>
                            <span class="new--item"> 15:00</span>
                        </div>
                        <span class="new--des font-helve font18">Sáng 24/4, tại Hội nghị gắn kết giáo dục nghề nghiệp
                            thủ đô 2021, Gama Service đã cùng Hiệp hội Thang máy Việt Nam (VNEA) i Hội nghị gắn kết giáo
                            dục nghề nghiệp thủ đô 2021, </span>
                    </div>
                    <div class="col-md-4 mt-2 mb-3">
                        <a href="">
                            <img src="{{ Theme::asset()->url('images/new/new1.jpg') }}" alt="" class="img-slider"
                                alt="">
                        </a>
                        <a href="">
                            <span class="new--title font-helve font20">Gama Service và “Hội nghị gắn kết
                                giáo dục nghề nghiệp thủ đô với thị tr</span>
                        </a>
                        <div class="new--time font-helve font12">
                            <span class="new--info">Kinh Doanh</span>
                            <span class="new--item">15/03/2021</span>
                            <span class="new--item"> 15:00</span>
                        </div>
                        <span class="new--des font-helve font18">Sáng 24/4, tại Hội nghị gắn kết giáo dục nghề nghiệp
                            thủ đô 2021, Gama Service đã cùng Hiệp hội Thang máy Việt Nam (VNEA) </span>
                    </div>
                    <div class="col-md-4 mt-2 mb-3">
                        <a href="">
                            <img src="{{ Theme::asset()->url('images/new/new1.jpg') }}" alt="" class="img-slider"
                                alt="">
                        </a>
                        <a href="">
                            <span class="new--title font-helve font20">Gama Service và “Hội nghị gắn kết
                                giáo dục nghề nghiệp thủ đô với thị tr</span>
                        </a>
                        <div class="new--time font-helve font12">
                            <span class="new--info">Kinh Doanh</span>
                            <span class="new--item">15/03/2021</span>
                            <span class="new--item"> 15:00</span>
                        </div>
                        <span class="new--des font-helve font18">Sáng 24/4, tại Hội nghị gắn kết giáo dục nghề nghiệp
                            thủ đô 2021, Gama Service đã cùng Hiệp hội Thang máy Việt Nam (VNEA) </span>
                    </div>
                </div>
                <div class="row mb-5" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-out">
                    <div class="col-md-4 mt-2 mb-3 ">
                        <a href="">
                            <img src="{{ Theme::asset()->url('images/new/new1.jpg') }}" alt="" class="img-slider"
                                alt="">
                        </a>
                        <a href="">
                            <span class="new--title font-helve font20">Gama Service và “Hội nghị gắn kết
                                giáo dục nghề nghiệp thủ đô với thị tr</span>
                        </a>
                        <div class="new--time font-helve font12">
                            <span class="new--info">Kinh Doanh</span>
                            <span class="new--item">15/03/2021</span>
                            <span class="new--item"> 15:00</span>
                        </div>
                        <span class="new--des font-helve font18">Sáng 24/4, tại Hội nghị gắn kết giáo dục nghề nghiệp
                            thủ đô 2021, Gama Service đã cùng Hiệp hội Thang máy Việt Nam (VNEA) </span>
                    </div>
                    <div class="col-md-4 mt-2 mb-3">
                        <a href="">
                            <img src="{{ Theme::asset()->url('images/new/new1.jpg') }}" alt="" class="img-slider"
                                alt="">
                        </a>
                        <a href="">
                            <span class="new--title font-helve font20">Gama Service và “Hội nghị gắn kết
                                giáo dục nghề nghiệp thủ đô với thị tr</span>
                        </a>
                        <div class="new--time font-helve font12">
                            <span class="new--info">Kinh Doanh</span>
                            <span class="new--item">15/03/2021</span>
                            <span class="new--item"> 15:00</span>
                        </div>
                        <span class="new--des font-helve font18">Sáng 24/4, tại Hội nghị gắn kết giáo dục nghề nghiệp
                            thủ đô 2021, Gama Service đã cùng Hiệp hội Thang máy Việt Nam (VNEA) </span>
                    </div>
                    <div class="col-md-4 mt-2 mb-3">
                        <a href="">
                            <img src="{{ Theme::asset()->url('images/new/new1.jpg') }}" alt="" class="img-slider"
                                alt="">
                        </a>
                        <a href="">
                            <span class="new--title font-helve font20">Gama Service và “Hội nghị gắn kết
                                giáo dục nghề nghiệp thủ đô với thị tr</span>
                        </a>
                        <div class="new--time font-helve font12">
                            <span class="new--info">Kinh Doanh</span>
                            <span class="new--item">15/03/2021</span>
                            <span class="new--item"> 15:00</span>
                        </div>
                        <span class="new--des font-helve font18">Sáng 24/4, tại Hội nghị gắn kết giáo dục nghề nghiệp
                            thủ đô 2021, Gama Service đã cùng Hiệp hội Thang máy Việt Nam (VNEA) </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ---------------------------------- phân trang  ------------------------- --}}
    <div class="container mb-5 ">
        <nav aria-label="Page navigation example">
            <ul class="pagination font-helve font20">

                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Trang tiếp <img
                            src="{{ Theme::asset()->url('images/new/next.png') }}" alt=""></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
