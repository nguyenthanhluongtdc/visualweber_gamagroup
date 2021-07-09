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
                    <div class="desc font-helve-light font18 ">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="opportunity-s2">
     @if (has_field($page, 'banner_doi_tac'))
  <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_doi_tac')) }}" alt="banner">
  @endif
</div>


{{-- ---------------------- talent dẫn lỗi tiên phong -------------------- --}}
<div class="partner-s3">
    <div class="container">
        <div class="row_wrap">
            <div class="col-md4 partner-title font-helve-light font20">
                @if (has_field($page, 'title_thang_may_gia_dinh_orona'))
                {!! get_field($page, 'title_thang_may_gia_dinh_orona') !!}
            @endif
            </div>
            <div class="content-md8">
                <div class="tab-content list-business-content">
                  <div id="home" class="container tab-pane active">
                    <div class="row">
                      <div class="col-md-6 content-wrap">
                        <div class="content font-helve-light font18">
                            @if (has_field($page, 'desc_thang_may_orona'))
                            {!! get_field($page, 'desc_thang_may_orona') !!}
                        @endif
                        </div>
                        <div class="views content-none-mobie">
                          <a href="#" class="primary-a font-helve">
                              {{ trans('See more') }}
                          </a>
                      </div>
                      </div>
                      <div class="col-md-6">
                         <img src="{{ Theme::asset()->url('images/partner/group36.jpg') }}" alt="" class="img-slider">
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
            {{-- <div class="col-md-4 d-flex align-items-start flex-column justify-content-between talent--info font-helve-light font18">
                
                    @if (has_field($page, 'desc_thang_may_orona'))
                        {!! get_field($page, 'desc_thang_may_orona') !!}
                    @endif
               
                 <div class="partner-views font-helve font18">
            <a href="" class="primary-b">Xem thêm</a>
        </div> --}}
            </div>
            {{-- <div class="col-md-4">
                <img src="{{ Theme::asset()->url('images/partner/group36.jpg') }}" alt="" class="img-slider">
            </div> --}}
        </div>
    </div>
</div>

{{-- -------------------------------- danh sách số  ----------------- --}}

<div class="partner--info">
    <div class="container">
        <div class="row">
            @if (has_field($page, 'partner'))
            @foreach (get_field($page, 'partner') as $item)
                <div class="col-md-4 item-coun title-primary pri-color" data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-in-out">
                    <p class="title font-helve-bold font50">{{ get_sub_field($item, 'number_partner') }}</p>
                    <p class="desc font-helve font18">{{ get_sub_field($item, 'text_partner') }}</p>
                </div>
            @endforeach
           
            @endif
          
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
                <div class="vision--partner__desc font-helve-light font18">
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