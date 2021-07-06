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
    </div>
{{-- ------------------------banner talent-opportunity ----------------}}
    <div class="opportunity-s2">
        <img src="{{ Theme::asset()->url('images/talent/banner2.jpg') }}" alt="" class="img-slider">
    </div>

    {{----------------------------- filter-talent-opportunity ----------------}}
    <div class="talent-filter">
        <div class="container">
            <div class="filteres">
                <div class="row mt-3">

                    <div class="col-md-3 filteres--option font-helve font18  mt-2">

                        <div class="menu-container">
                            <div class="dropdown">
                                <button class="btn btn-secondary " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mới nhất
                                    <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">
    
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Item 1</a>
                                    <a class="dropdown-item" href="#">Item 1</a>
                                    <a class="dropdown-item" href="#">Item 1</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter--elemet font-helve font18 mt-2">
                        <div class="menu-container">
                            <div class="dropdown">
                                <button class="btn btn-secondary " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Vị trí ứng tuyển
                                    <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">
    
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Maketing</a>
                                    <a class="dropdown-item" href="#">HR</a>
                                    <a class="dropdown-item" href="#">Trợ Lý</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter--elemet font-helve font18 mt-2">
                        <div class="menu-container">
                            <div class="dropdown">
                                <button class="btn btn-secondary " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Công ty
                                    <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">
    
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Item 1</a>
                                    <a class="dropdown-item" href="#">Item 1</a>
                                    <a class="dropdown-item" href="#">Item 1</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 filter--elemet font-helve font18 mt-2">
                        <div class="menu-container">
                            <div class="dropdown">
                                <button class="btn btn-secondary " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Địa chỉ làm việc
                                    <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">
    
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Item 1</a>
                                    <a class="dropdown-item" href="#">Item 1</a>
                                    <a class="dropdown-item" href="#">Item 1</a>
                                </div>
                            </div>
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