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


{{------------------------ talent dẫn lỗi tiên phong ----------------------}}
<div class="talent-s3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="talent--title font-helve-bold font20">Dẫn lối tiên phong</h3>
                <div class="talent-des font-helve font20">Tôn trọng bản sắc</div>
                <div class="talent-des font-helve font20">Môi trường chuyên nghiệp</div>
            </div>
            <div class="col-md-4 talent--info font-helve-light font18">
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

