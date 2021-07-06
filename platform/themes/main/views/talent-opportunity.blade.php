{!! Theme::breadcrumb()->render() !!}

<div class="all-news-content">
    <div class="container">
        <div class="new-section1">
            <div class="row">
                <div class="col-lg-4">
                    <h1 class="new-title font-helve-bold font30">
                        {!! $page -> description !!}
                        
                    </h1>
                </div>
                <div class="col-lg-8">
                    <div class="desc font18 font-helve">
                       {!! $page -> content!!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>s
{{-- ------------------------banner talent-opportunity ----------------}}
    <div class="opportunity-s2">
        <img src="{{ Theme::asset()->url('images/talent/banner2.jpg') }}" alt="" class="img-slider">
    </div>

    {{----------------------------- filter-talent-opportunity ----------------}}
    <div class="talent-filter">
        <div class="container">
            <div class="filteres">
                <div class="row mt-3">

                    <div class="col-md-3 filteres--option  mt-2">

                        <div class="menu-container">
                            <nav>
                                <ul class="menu font18 font-helve">
                                    <li class="dropdown dropdown-2">
                                    Mới nhất
                                        <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt=""
                                            class="img-slider">
                                            
                                        <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-2 font18 font-helve">
                                            <li class="dropdown_item-1">Tin kinh doanh</li>
                                            <li class="dropdown_item-2">Tin cộng đồng</li>
                                            <li class="dropdown_item-3">Tin nội bộ</li>
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 filter--elemet mt-2">
                        <div class="menu-container">
                            <nav>
                                <ul class="menu font18 font-helve">
                                    <li class="dropdown dropdown-2">
                                        vị trí ứng tuyển
                                        <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt=""
                                            class="img-slider">
                                            
                                        <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-2 font18 font-helve">
                                            <li class="dropdown_item-1">Maketing</li>
                                            <li class="dropdown_item-2">HR</li>
                                            <li class="dropdown_item-3">Trợ lý</li>
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>

                        {{-- <select class="dropdown new--dropdown">
                            <option hidden>Tin tổng hợp</option>
                            <option value="1">Tin kinh doanh</option>
                            <option value="2">Tin cộng đồng</option>
                            <option value="3">Tin nội bộ</option>

                        </select> --}}
                    </div>
                    <div class="col-md-3 filter--elemet mt-2">
                        <div class="menu-container">
                            <nav>
                                <ul class="menu font18 font-helve">
                                    <li class="dropdown dropdown-2">
                                        Công ty
                                        <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt=""
                                            class="img-slider">

                                        <ul
                                            class="dropdown_menu dropdown_menu--animated dropdown_menu-2 font18 font-helve">
                                            <li class="dropdown_item-1">Item 1</li>
                                            <li class="dropdown_item-2">Item 2</li>
                                            <li class="dropdown_item-3">Item 3</li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 filter--elemet mt-2">
                        <div class="menu-container">
                            <nav>
                                <ul class="menu font18 font-helve">
                                    <li class="dropdown dropdown-2">
                                         Địa điểm làm viêc
                                        <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt=""
                                            class="img-slider">

                                        <ul
                                            class="dropdown_menu dropdown_menu--animated dropdown_menu-2 font18 font-helve">
                                            <li class="dropdown_item-1">Item 1</li>
                                            <li class="dropdown_item-2">Item 2</li>
                                            <li class="dropdown_item-3">Item 3</li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- ----------------------------table ------------------------------}}
    <div class="opportunity-table">
        <div class="container">
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
        </div>
    </div>
{{------------------------------- page ------------------------------------}}
<div class="gama--naviga">

    <div class="container ">
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
</div>