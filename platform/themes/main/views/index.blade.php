@php Theme::layout('no-sidebar') @endphp
@include('theme.main::views/pages/home/section/main-slide')
<div class="about-us">
    <div class="abouut-us-content container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="font-helve-bold font30">Sứ mệnh của <br>
                    Tập đoàn</h3>
            </div>
            <div class="col-md-8 font-helve content-right font18">
                Là NGƯỜI TIÊN PHONG, chúng tôi hiểu rằng thế giới là một kho báu tràn đầy
                sự kỳ diệu và ẩn chứa những trải nghiệm tuyệt mỹ. Với CHUYÊN MÔN SÂU RỘNG cùng NIỀM ĐAM MÊ và SỰ SÁNG
                SUỐT,
                chúng tôi chọn lọc những TINH HOA CỦA THẾ GIỚI và mang đến Việt Nam qua các sản phẩm & dịch vụ đẳng cấp.
                Đồng thời,
                GamaGroup hướng đến tạo ra giá trị gia tăng cho đối tác và nhân viên, thực hiện trách nhiệm đồng hành và
                hỗ trợ cộng đồng
                xã hội và không ngừng mở đường, vượt mọi thách thức để phát triển bền vững.
            </div>
        </div>
    </div>
</div>

{{-- lĩnh vực kinh doanh --}}
<div class="business-areas">
    <div class="business-areas-content container">
        <div class="row">
            <div class="col-md-4 content-left">
                <h3 class="font-helve-bold font30">
                    Lĩnh vực <br> kinh doanh
                </h3>
                <div class="views-all-logo content-desktop">
                    <a href="" class="font18 font-helve">
                        Xem tất cả thương hiệu
                    </a>
                </div>
            </div>
            <div class="col-md-8 content-right">
                <div class="row">
                    <div class="col-md-7">
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active content-tab">
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
                            </div>

                            <div id="tab2" class="container tab-pane fade content-tab">
                                <h5 class="font-helve-bold">Giải pháp thang máy</h5>
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
                            </div>
                            <div id="tab3" class="container tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="tab4" class="container tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="tab5" class="container tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 menu-tab">
                        <ul class="nav nav-tabs font20 font-helve" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab1">Tích hợp hệ thống</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab2">Giải pháp thang máy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab3">Dịch vụ & Công Nghệ CNTT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab4">Trung tâm dữ liệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab5">Dịch vụ trực tuyến</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="views-all-logo content-mobie">
            <a href="" class="font18 font-helve views-logo-mobie">
                Xem tất cả thương hiệu
            </a>
        </div>
    </div>
</div>

{{-- tin tức --}}
<div class="news-home">
    <div class="news-home-content container">
        <div class="row">
            <div class="col-md-4 content-left">
                <h3 class="font-helve-bold font30">Tin tức<br>
                    mới nhất</h3>
                <div class="views-all content-desktop">
                    <a href="" class="font-helve font20">
                        Xem tất cả
                    </a>
                </div>

            </div>
            <div class="content-right col-md-8">
                <div class="row">
                    <div class="item-right col-md-6">
                        <a href="" class="item-link">
                            <img src="{{ Theme::asset()->url('images/homepage/item1.jpg') }}" alt=""
                                class="img-slider">
                            <h4 class="font-helve font20">Gama Service và “Hội nghị gắn kết
                                giáo dục nghề nghiệp thủ đô với thị trường
                            </h4>

                        </a>
                        <div class="tag-time font-helve">
                            <span class="tag">Kinh doanh</span>
                            <span class="time">15/03/2021 15:00</span>
                        </div>
                        <p class="desc font-helve font18">
                            Sáng 24/4, tại Hội nghị gắn kết giáo dục nghề nghiệp thủ đô 2021, Gama Service đã cùng Hiệp
                            hội Thang máy Việt Nam (VNEA) và Trường Cao đẳng Nghề.
                        </p>
                    </div>
                    <div class="item-right col-md-6">
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
                    </div>
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
    <div class="section4-content container">
        <div class="section4-item">
            <img src="{{ Theme::asset()->url('images/homepage/end1.jpg') }}" alt="">
            <div class="content-title">
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
            <div class="content-title">
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
            <div class="content-title">
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
