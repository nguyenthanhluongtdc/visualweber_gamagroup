{!! Theme::breadcrumb()->render() !!}
<div class="container">
    <div class="about-section1">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="font-helve-bold font30">
                    {!! $page -> description !!}
                    
                </h3>
            </div>
            <div class="col-lg-8">
                <div class="desc font18 font-helve">
                   {!! $page -> content!!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-section2">
    @if (has_field($page, 'banner_about'))
    <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_about')) }}" alt="banner">
    @endif

</div>
<div class="container">
    <div class="about-section3" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">
        <div class="row">
            @if(!empty(get_featured_abouts(4)))
            <div class="col-lg-4 menu-tab">
                <ul class="nav nav-pills font-helve font20 list-menu-tababout" role="tablist">
                    {{-- @foreach (get_featured_abouts(4) as $key => $item) --}}
                   
                    @foreach (get_featured_pages(100) as $key => $item)
                    @if ($item->template == "about-detail")

                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="pill" href="#tababout{{$key}}">{{ $item->name }}</a>
                        </li>
                        @endif
                    @endforeach
                    {{-- <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#tababout1">Định hướng phát triển</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#tababout2">Tầm nhìn và sứ mệnh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#tababout3">Quá trình phát triển</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#tababout4">Thành tựu</a>
                    </li> --}}
                </ul>
            </div>

            <div class="col-lg-8 content-tab">
                <div class="tab-content">
                    {{-- @foreach (get_featured_abouts(4) as $key => $item) --}}
                    @foreach (get_featured_pages(100) as $key => $item)
                         @if ($item->template == "about-detail")
                        <div id="tababout{{$key}}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                            <div class="row">
                                <div class="col-md-6 left font-helve font18">
                                    <div class="content desc-right">
                                        {{ $item->description}}
                                    </div>
                                    <div class="views content-none-mobie">
                                        <a href="{{ $item->url }}" class="primary-a">
                                            {{ trans('See more') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 right-img">
                                    <img src="{{ RvMedia::getImageUrl($item->image) }}" alt="{{ $item->name }}">
                                    {{-- <img src="{{ Theme::asset()->url('images/about/section3.jpg') }}" alt="item"> --}}
                                </div>
                            </div>
                            <div class="views content-show-mobie">
                                <a href="{{ $item->url }}">
                                    {{ trans('See more') }}
                                </a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    {{-- <div id="tababout1" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-6 left font-helve font18">
                                <div class="content desc-right">
                                    Sau 15 năm hoạt động, không chỉ nỗ lực trong kinh doanh, hỗ trợ phát triển kinh tế Việt
                                    Nam,
                                    GAMA Group Việt Nam cũng luôn hướng đến các hoạt động an sinh xã hội, bảo trợ trẻ em và
                                    tôn vinh văn hóa Việt.
                                    Đó là những thành tựu mà chúng tôi đã không ngừng dày công để xây dựng cho đất nước và
                                    cộng đồng.
                                </div>
                                <div class="views content-none-mobie">
                                    <a href="" class="primary-a">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 right-img">
                                <img src="{{ Theme::asset()->url('images/about/section3.jpg') }}" alt="item">
                            </div>
                        </div>
                        <div class="views content-show-mobie">
                            <a href="">
                                Xem thêm
                            </a>
                        </div>
                    </div>
                    <div id="tababout2" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                    </div>
                    <div id="tababout3" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem
                            aperiam.</p>
                    </div>
                    <div id="tababout4" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem
                            aperiam.</p>
                    </div> --}}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="section4-about">
    <div class="container">
        <div class="row">
            @if (has_field($page, 'data_company'))
            @foreach (get_field($page, 'data_company') as $item)
                <div class="col-md-4 item-coun" data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-in-out">
                    <p class="title font-helve-bold font50">{{ get_sub_field($item, 'number_data') }}</p>
                    <p class="desc font-helve font18">{{ get_sub_field($item, 'text_data') }}</p>
                </div>
            @endforeach
           
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="section5-about">
        <div class="row">
            <div class="col-lg-4 admin-left" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                <h3 class="font-helve-bold font30">Hội đồng quản trị <br>GAMA Group</h3>
                <div class="view font-helve font18 content-desktop">
                    <a href="" class="primary-a">{{ trans('See more') }}</a>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
                <div class="desc-right font-helve font18">
                    Do tính lây nhiễm cao trong đợt dịch này, người bệnh phải được điều
                    trị tại các bệnh viện chỉ chuyên tiếp nhận Covid-19, không bố trí lẫn
                    lộn trong một bệnh viện đa khoa, ngoại trừ mô hình "bệnh viện tách đôi".
                </div>
                <div class="list-admin-slider owl-carousel">
                    <div class="admin-item">
                        <a href="{{ Theme::asset()->url('images/about/qt1.jpg') }}" data-fancybox="hdqt"
                            data-caption="Johna than Hạnh Nguyễn">
                            <img src="{{ Theme::asset()->url('images/about/qt1.jpg') }}" alt="">
                        </a>
                        <h5 class="name font-helve font18">
                            Johnathan <br>
                            Hạnh Nguyễn
                        </h5>
                        <p class="desc">
                            PHÓ TỔNG GIÁM ĐỐC PHÁT TRIỂN KINH DOANH TẬP ĐOÀN
                        </p>
                    </div>
                    <div class="admin-item">
                        <a href="{{ Theme::asset()->url('images/about/qt2.jpg') }}" data-fancybox="hdqt"
                            data-caption="Phillip Nguyễn">
                            <img src="{{ Theme::asset()->url('images/about/qt2.jpg') }}" alt="">
                        </a>
                        <h5 class="name font-helve font18">
                            Phillip <br>
                            Nguyễn
                        </h5>
                        <p class="desc">
                            PHÓ TỔNG GIÁM ĐỐC PHÁT TRIỂN KINH DOANH TẬP ĐOÀN
                        </p>
                    </div>
                    <div class="admin-item">
                        <a href="{{ Theme::asset()->url('images/about/qt3.jpg') }}" data-fancybox="hdqt"
                            data-caption="Stephanic Thủy Tiên">
                            <img src="{{ Theme::asset()->url('images/about/qt3.jpg') }}" alt="">
                        </a>
                        <h5 class="name font-helve font18">
                            Stephanic <br>
                            Thủy Tiên
                        </h5>
                        <p class="desc">
                            TỔNG GIÁM ĐỐC TẬP ĐOÀN
                        </p>
                    </div>
    
    
                    <div class="admin-item">
                        <img src="{{ Theme::asset()->url('images/about/qt1.jpg') }}" alt="">
                        <h5 class="name font-helve font18">
                            Johnathan <br>
                            Hạnh Nguyễn
                        </h5>
                        <p class="desc">
                            PHÓ TỔNG GIÁM ĐỐC PHÁT TRIỂN KINH DOANH TẬP ĐOÀN
                        </p>
                    </div>
                    <div class="admin-item">
                        <img src="{{ Theme::asset()->url('images/about/qt2.jpg') }}" alt="">
                        <h5 class="name font-helve font18">
                            Phillip <br>
                            Nguyễn
                        </h5>
                        <p class="desc">
                            PHÓ TỔNG GIÁM ĐỐC PHÁT TRIỂN KINH DOANH TẬP ĐOÀN
                        </p>
                    </div>
                    <div class="admin-item">
                        <img src="{{ Theme::asset()->url('images/about/qt3.jpg') }}" alt="">
                        <h5 class="name font-helve font18">
                            Stephanic <br>
                            Thủy Tiên
                        </h5>
                        <p class="desc">
                            TỔNG GIÁM ĐỐC TẬP ĐOÀN
                        </p>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="view font-helve font18 content-mobie">
            <a href="">{{ trans('See more') }}</a>
        </div>
    </div>
    
</div>