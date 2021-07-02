{!! Theme::breadcrumb()->render() !!}

<div class="all-news-content">
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
    </div>

{{------------------------talent  banner  -------------}}
<div class="talent-s2">
    <img src="{{ Theme::asset()->url('images/talent/banner.png') }}" alt="" class="img-slider">

    {{-- @if (has_field($page, 'image_banner'))
        <img src="{{ RvMedia::getImageUrl(get_field($page, 'image_banner')) }}" alt="banner">
    @endif --}}
</div>

{{------------------------ talent dẫn lỗi tiên phong ----------------------}}
<div class="talent-s3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="talent--title font-helve-bold font20">Dẫn lối tiên phong</h3>
                <div class="talent-des font-helve font20">Tôn trọng bản sắc</div>
                <div class="talent-des font-helve font20">Môi trường chuyên nghiệp</div>
            </div>
            <div class="col-md-4 font-helve-light font18">
                <p>
                Trong nền kinh tế phát triển với tốc độ nhanh chóng, cách duy nhất để thành công là không ngừng tiến lên phía trước. Tại GAMA Group, chúng tôi trân trọng những cá nhân đầy hoài bão, luôn nắm bắt các xu hướng với những tư duy không giới hạn. Chúng tôi cố gắng mang lại môi trường làm việc lý tưởng để tất cả có thể phát triển toàn diện tiềm năng, cùng nhau đón đầu xu hướng và dẫn dắt thị trường. 
            </p>
            </div>
            <div class="col-md-4">
                <img src="{{ Theme::asset()->url('images/talent/126.png') }}" alt="" class="img-slider">
            </div>
        </div>
    </div>
</div>
{{----------------------- talent sự phát triển sự nghiệp -----------------------}}
<div class="talent-s4">
    <div class="container">
        <div class="row career--info">
            <div class="col-md-4">
                <h3 class="career-title font-helve-bold font20">Phát triển <br> sự nghiệp</h3>
            </div>
            <div class="col-md-8">
                <div class="carrer-desc font-helve-light font18">
                    Chúng tôi luôn có niềm tin mãnh liệt vào nội lực của mỗi cá nhân, đó là nhân tố đã khẳng định vị thế của GAMA Group ngày hôm nay. GAMA Group nhận ra rằng chính sự đa dạng, sức sáng tạo và nguồn năng lượng, cùng những nỗ lực của nhân viên đã mang sức mạnh đến cho tập đoàn. Vì thế, chúng tôi không ngừng đầu tư và phát triển nhân tài, tạo động lực để họ thăng tiến và phát triển sự nghiệp.
                </div>
            </div>
        </div>
        <div class="row develop-block">
            <div class="section4-home">
                <div class="section4-content container" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">
                    <div class="section4-item" >
                        <img src="{{ Theme::asset()->url('images/talent/44.jpg') }}" alt="">
                        <div class="content-title" >
                            <h5 class="title font-helve-bold font25">Phát triển bản thân</h5>
                            <div class="content-none ">
                                <p class="desc font-helve-light font18">GAMA Group là môi trường làm việc đa văn hóa với những con người xuất phát các quốc gia khác nhau trên thế giới như Pháp, Phillipines… Tại đây, chúng tôi cố gắng cống hiến tinh hoa của mỗi dân tộc tạo nên môi trường làm việc năng động, cùng nhiều cơ hội thử thách giới hạn bản thân.</p>
                            </div>
            
                        </div>
                    </div>
                    <div class="section4-item">
                        <img src="{{ Theme::asset()->url('images/talent/45.jpg') }}" alt="">
                        <div class="content-title" >
                            <h5 class="title font-helve-bold font25">Bồi dưỡng nhân tài</h5>
                            <div class="content-none ">
                                <p class="desc font-helve-light font18">Khi trở thành thành viên của đại gia đình GAMA Group, cơ hội sẽ không chỉ mở ra ở khía cạnh công việc. Với tầm nhìn chiến lược cùng tâm huyết của một tập thể, chúng tôi luôn có chính sách hỗ trợ mỗi thành viên phát triển và hoàn thiện bản thân.</p>
                            </div>
            
                        </div>
                    </div>
                    <div class="section4-item">
                        <img src="{{ Theme::asset()->url('images/talent/46.jpg') }}" alt="">
                        <div class="content-title" >
                            <h5 class="title font-helve-bold font25">Nắm bắt cơ hội</h5>
                            <div class="content-none ">
                                <p class="desc font-helve-light font18">Khi trở thành thành viên của đại gia đình GAMA Group, cơ hội sẽ không chỉ mở ra ở khía cạnh công việc. Với tầm nhìn chiến lược cùng tâm huyết của một tập thể, chúng tôi luôn có chính sách hỗ trợ mỗi thành viên phát triển và hoàn thiện bản thân.</p>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>


{{--------------------------- cơ hội làm việc -------------- --}}
<div class="job">
    <div class="container talent-s5">
        <div class="job--img">
            <img src="{{ Theme::asset()->url('images/talent/map.jpg') }}" alt="">
        </div>
        <div class="job--block">
            <div class="job--title">
                <h3 class=" font-helve-bold font30">Cơ hội việc làm tại GAMA Group
                    luôn dành cho mọi người?</h3>
            </div>
            <div class="job--desc font-helve-light font18">
                <p>
                    Sự phát triển của GAMA Group trên thị trường luôn đi cùng với những cơ hội việc đa dạng mở ra cho tất cả mọi người. Bạn đam mê công nghệ? Truyền thông? Kết cấu hạ tầng? Hay bạn có tư duy kinh doanh và tin vào giá trị những con số? Hãy đến với chúng tôi! 
                </p>
            </div>
            <div class="job--buttom font-helve font18">
                <a href="" class="btn btn-primary job--profession">Cơ hội nghề nghiệp</a>
            </div>
        </div>

    </div>
</div>