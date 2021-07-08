{!! Theme::breadcrumb()->render() !!}

<div class="all-news-content">
    <div class="container">
        <div class="new-section1">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="new-title font-helve-bold font30">
                        {!! $page -> description !!}
                        
                    </h1>
                </div>
            </div>
        </div>
        </div>
    </div>
{{-- ------------------------- nội dung trang tuyển dụng -------------- --}}
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
                        <a data-fancybox="poup" data-src="#poup" href="javascript:;"
                            class="btn btn-primary Recruitment--profession">Nộp CV ứng tuyển</a>
                    </div>
                </div>
                <div class="Recruitment Recruitment--item2Recruitment--item2 font-helve-light font18 ">
                    <div class="Recruitment--adree">
                        @if (has_field($page, 'title_admin_16252012931'))
                            {!! get_field($page, 'title_admin_16252012931') !!}
                        @endif
                    </div>
                    <div class=" Recruitment--buttom font-helve font18">
                        <a data-fancybox="poup1" data-src="#poup1" class="btn btn-primary Recruitment--profession">Nộp CV ứng tuyển</a>
                    </div>
                </div>
                <div id="poup" class="poup">
                    <div class="poup--block">
                        <div class="poup--block__img">
                            <img src="{{ Theme::asset()->url('images/talent/two-woman.jpg') }}" alt="two-woman">
                        </div>
                        <div class="poup--block__form">
                            <form action="" method="post">
                                <div class="poup--title font-helve-light font18">
                                    <p>Bạn đang ứng tuyển vào vị trí: </p>
                                    <h2 class=" font-helve font20">
                                        Chuyên Viên Kỹ Thuật Cấp Cao ERP
                                    </h2>
                                </div>
                                
                                <div class="poup--form font-helve font18 ">
                                    <p class=" font-helve-light font18">
                                        Vui lòng bổ sung các thông tin cá nhân của bạn để ứng tuyển
                                    </p>
    
                                    <input type="text" value="" name="hi1" class="form-control" placeholder="Họ Tên" />
    
                                    <input type="text" value="" name="hi2" class="form-control" placeholder="Email" />
                                    <input type="text" value="" name="hi2" class="form-control"
                                        placeholder="Số Điện Thoại " />
                                    <input type="text" value="" name="hi2" class="form-control" placeholder="Địa chỉ " />
    
                                </div>
                               
                                <div class=" Recruitment--buttom font-helve font18">
                                    <a href="" class="btn btn-primary Recruitment--profession">Đính kèm CV ứng tuyển</a>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <div id="poup1" class="poup">
                    <div class="poup--block">
                        <div class="poup--block__img">
                            <img src="{{ Theme::asset()->url('images/talent/two-woman.jpg') }}" alt="two-woman">
                        </div>
                        <div class="poup--block__form">
                            <form action="" method="post">
                                <div class="poup--title font-helve-light font18">
                                    <p>Bạn đang ứng tuyển vào vị trí: </p>
                                    <h2 class=" font-helve font20">
                                        Chuyên Viên Kỹ Thuật Cấp Cao ERP
                                    </h2>
                                </div>
                                
                                <div class="poup--form font-helve font18 ">
                                    <p class=" font-helve-light font18">
                                        Vui lòng bổ sung các thông tin cá nhân của bạn để ứng tuyển
                                    </p>
    
                                    <input type="text" value="" name="hi1" class="form-control" placeholder="Họ Tên" />
    
                                    <input type="text" value="" name="hi2" class="form-control" placeholder="Email" />
                                    <input type="text" value="" name="hi2" class="form-control"
                                        placeholder="Số Điện Thoại " />
                                    <input type="text" value="" name="hi2" class="form-control" placeholder="Địa chỉ " />
    
                                </div>
                               
                                <div class=" Recruitment--buttom font-helve font18">
                                    <a href="" class="btn btn-primary Recruitment--profession">Đính kèm CV ứng tuyển</a>
                                </div>
                            </form>
                        </div>

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

{{-- ----------------------------table ---------------------------- --}}
<div class="opportunity-table">
    <div class="container">
        <h3 class="opportunity--title item font-helve-bold font30">
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
