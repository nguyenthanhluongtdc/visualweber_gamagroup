{!! Theme::breadcrumb()->render() !!}

<div class="all-news-content">
    <div class="container">
        <div class="about-section1">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="font-helve-bold font30">
                        {!! $page->description !!}
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
{{--------------------------- nội dung trang tuyển dụng ----------------}}
<div class="Recruitment-s1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-start flex-column justify-content-between">
                <div class="Recruitment Recruitment--item1 font-helve-light font18 ">
                   <div class="Recruitment--adree">
                       @if (has_field($page, 'title_admin_16252012931'))
                               {!! get_field($page, 'title_admin_16252012931') !!}
                           @endif
                   </div>
                    <div class=" Recruitment--buttom font-helve font18">
                        <a href="" class="btn btn-primary Recruitment--profession">Cơ hội nghề nghiệp</a>
                    </div>
                </div>
                <div class="Recruitment Recruitment--item2Recruitment--item2 font-helve-light font18 ">
                    <div class="Recruitment--adree">
                        @if (has_field($page, 'title_admin_16252012931'))
                                {!! get_field($page, 'title_admin_16252012931') !!}
                            @endif
                    </div>
                    <div class=" Recruitment--buttom font-helve font18">
                        <a href="" class="btn btn-primary Recruitment--profession">Cơ hội nghề nghiệp</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 talent--desc">
                <h3 class="opportunity--item font-helve-bold font20">
                    @if (has_field($page, 'title_admin_16252171762'))
                                {!! get_field($page, 'title_admin_16252171762') !!}
                            @endif
                </h3>
                <div class="desc--overview font-helve-light font18">
                    @if (has_field($page, 'desc_admin_16252162962'))
                    {!! get_field($page, 'desc_admin_16252162962') !!}
                @endif
                </div>
                <hr>
                <h3 class="opportunity--title font-helve-bold font20">
                    @if (has_field($page, 'title_mo_ta'))
                                {!! get_field($page, 'title_mo_ta') !!}
                            @endif
                </h3>
                <div class="desc--overview font-helve-light font18">
                    @if (has_field($page, 'desc_mo_ta'))
                    {!! get_field($page, 'desc_mo_ta') !!}
                @endif
                </div>
                <hr>
                <h3 class="opportunity--title font-helve-bold font20">
                    @if (has_field($page, 'title_trach_nhiem'))
                                {!! get_field($page, 'title_trach_nhiem') !!}
                     @endif
                </h3>
                <div class="desc--overview item font-helve-light font18">
                    @if (has_field($page, 'desc_trach_nhiem'))
                    {!! get_field($page, 'desc_trach_nhiem') !!}
                @endif
                </div>
            </div>
        </div>
        <hr>

    </div>
</div>

 {{-- ----------------------------table ------------------------------}}
 <div class="opportunity-table">
    <div class="container">
        <h3 class="opportunity--title item font-helve-bold font20">
            @if (has_field($page, 'title_cac_vi_tri_khac'))
                        {!! get_field($page, 'title_cac_vi_tri_khac') !!}
             @endif
        </h3>

        <table class="table table-hover font-helve font18">
            <thead class="thead-light font-helve font18">
              <tr>
                <th scope="col">Vị trí ứng tuyển</th>
                <th scope="col">Công ty</th>
                <th scope="col">Địa điểm làm việc</th>
                <th scope="col">Hạn nộp hồ sơ</th>
              </tr>
            </thead>
            <tbody class="font-helve font18">
              <tr class="font-helve font18">
                <td>Kế toán thanh toán</td>
                <td>Depalift</td>
                <td>Tp. Hồ Chí Minh</td>
                <td>30.04.2021</td>
              </tr>
              <tr>
                <td>chuyên viên kĩ thuật cấp cao</td>
                <td>Depalift</td>
                <td>Tp. Hà nội</td>
                <td>30.04.2021</td>
              </tr>
              <tr>
                <td>Kế toán thanh toán</td>
                <td>Depalift</td>
                <td>Tp. Hồ Chí Minh</td>
                <td>30.04.2021</td>
              </tr>
              <tr>
                <td>chuyên viên kĩ thuật cấp cao</td>
                <td>Depalift</td>
                <td>Tp. Hà nội</td>
                <td>30.04.2021</td>
              </tr>
              <tr>
                <td>Kế toán thanh toán</td>
                <td>Depalift</td>
                <td>Tp. Hồ Chí Minh</td>
                <td>30.04.2021</td>
              </tr>
              <tr>
                <td>chuyên viên kĩ thuật cấp cao</td>
                <td>Depalift</td>
                <td>Tp. Hà nội</td>
                <td>30.04.2021</td>
              </tr>
            </tbody>
          </table>
          <div class="Recruitment--buttom font-helve font18">
            <a href="" class="btn btn-primary Recruitment--profession">Xem thêm</a>
        </div>
    </div>
</div>