{!! Theme::breadcrumb()->render() !!}
<div class="business-section1 padding80">
    <div class="container">
        <div class="row_wrap">
            <div class="content-md4 font-helve-bold font30 tile-ri pri-color">
                @if (has_field($page, 'title_business'))
                  {!! get_field($page, 'title_business') !!}
                @endif
            </div>
            <div class="content-md8 font-helve-light font18">
                  @if (has_field($page, 'desc_business'))
                  {!! get_field($page, 'desc_business') !!}
                @endif
            </div>
        </div>
    </div>
</div>
<div class="business-banner">
  @if (has_field($page, 'banner_business'))
  <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_business')) }}" alt="banner">
  @endif
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
        @if (has_field($page, 'company_business'))
        @foreach (get_field($page, 'company_business') as $item)
            <div class="col-md-4 item-coun pri-color" data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-in-out">
                <p class="title font-helve-bold font50">{{ get_sub_field($item, 'number_company_business') }}</p>
                <p class="desc font-helve font18">{{ get_sub_field($item, 'text_company_business') }}</p>
            </div>
        @endforeach
       
        @endif
    </div>
</div>
</div>
<div class="business-section4">
    <div class="container">
      <div class="row_wrap">
        @if (has_field($page, 'work_business_title'))
        <div class="content-md4 font-helve-bold font30 tile-ri pri-color">
          <div class="padding50">
            {!! get_field($page, 'work_business_title') !!}
          </div>
        </div>
        @endif
        @if (has_field($page, 'work_business_desc'))
        <div class="content-md8 content-left" style="background-image: url('{{ Theme::asset()->url('images/business/map.png') }}')">
            <div class="top-content font-helve-light font18 padding50">
              {!! get_field($page, 'work_business_desc') !!}
            </div>
            <div class="link">
              <a href="" class="font-helve font18">
                Cơ hội nghề nghiệp
              </a>
            </div>
        </div>
        @endif
      </div>
    </div>
</div>