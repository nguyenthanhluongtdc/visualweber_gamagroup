{!! Theme::breadcrumb()->render() !!}
<div class="business-section1 padding80">
    <div class="container">
        <div class="row_wrap">
            <div class="content-md4 font-helve-bold font30 title-pri pri-color">
                Lĩnh vực <br>
                Kinh doanh
            </div>
            <div class="content-md8 font-helve-light font18">
                Tại GAMA Group, chúng tôi quan niệm thành công chỉ đến với những những ai biết tận dụng tối đa tiềm năng, bứt phá mọi giới hạn. Với các lĩnh vực chủ 
                đạo và không ngừng mở rộng trong tương lai, chúng tôi vẫn sẽ tiếp tục hành trình mang những trải nghiệm phong phú đến Việt Nam.
            </div>
        </div>
    </div>
</div>
<div class="business-banner">
    <img src="{{ Theme::asset()->url('images/business/845.jpg') }}" alt="">
</div>
<div class="business-section2 padding80">
    <div class="container">
        <div class="row_wrap">
            <div class="content-md4">
              <ul class="nav nav-pills list-business-tab font-helve font20" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
                </li>
              </ul>
            </div>
            <div class="content-md8">
              <div class="tab-content list-business-content">
                <div id="home" class="container tab-pane active">
                  <div class="row">
                    <div class="col-md-6 content-wrap">
                      <div class="content font-helve-light font18">
                        <p>Bên cạnh <strong>Chất lượng - Tiêu chuẩn - Chuyên nghiệp</strong>, Gama Service luôn tâm niệm: đằng sau mỗi công việc thực hiện là an toàn của Bạn 
                        và Gia đình. Và chúng tôi có trách nhiệm với điều đó.</p>
                        <p>Chính vì thế, Gama Service không chỉ cung cấp một dịch vụ kỹ thuật thang máy. Chính xác hơn, đó là điều mà chúng tôi bảo vệ Quý 
                        Khách hàng - những người đã đặt niềm tin vào Gama Service.</p>
                      </div>
                      <div class="views content-none-mobie">
                        <a href="#" class="primary-a font-helve">
                            {{ trans('See more') }}
                        </a>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <img src="{{ Theme::asset()->url('images/business/126.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div id="menu1" class="container tab-pane fade">
                  <h3>Menu 1</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="business-section3">
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
<div class="business-section4">
    <div class="container">
      <div class="row_wrap">
        <div class="content-md4 font-helve-bold font30 tile-ri pri-color">
          <div class="padding50">
            Cơ hội việc làm tại <br>
            Gama Group
          </div>
        </div>
        <div class="content-md8 content-left" style="background-image: url('{{ Theme::asset()->url('images/business/map.png') }}')">
            <div class="top-content font-helve-light font18 padding50">
              Sự phát triển của GAMA Group trên thị trường luôn đi cùng với những cơ hội việc đa dạng mở ra cho tất cả mọi người. Bạn đam mê công nghệ? Truyền thông? Kết 
              cấu hạ tầng? Hay bạn có tư duy kinh doanh và tin vào giá trị những con số? Hãy đến với chúng tôi! 
            </div>
            <div class="link">
              <a href="" class="font-helve font18">
                Cơ hội nghề nghiệp
              </a>
            </div>
        </div>
      </div>
    </div>
</div>