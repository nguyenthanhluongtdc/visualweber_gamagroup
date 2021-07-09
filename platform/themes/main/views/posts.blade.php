{!! Theme::breadcrumb()->render() !!}

{{-- -------------------------------------- new title--------------------- --}}
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
                    <div class="desc font-helve-light font18">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ---------------------------------- new banner ------------------------------ --}}
<div class="new-banner">
    <div class="container">
        <div class="new--banner">
            <div class="main-slider owl-carousel">
                <div class="new--slider__item">
                    <img src="{{ Theme::asset()->url('images/new/slide.jpg') }}" alt="" class="img-slider">
                    <div class="content">
                        <div class="content--infor">
                            <h4 class="font-helve-bold font20">
                                Nhật coi hồi sinh ngành chất bán dẫn là nhiệm vụ quốc gia
                            </h4>
                            <div class="new--time font-helve ">
                                <span class="new--info">Kinh Doanh</span>
                                <span class="new--item">15/03/2021</span>
                                <span class="new--item"> 15:00</span>
                            </div>
                            <p class="new--des font18 font-helve-light">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn là
                                sứ mệnh quốc gia, quan trọng không kém...</p>
                        </div>
                    </div>
                </div>
                <div class="new--slider__item">
                    <img src="{{ Theme::asset()->url('images/new/slide.jpg') }}" alt="" class="img-slider">
                    <div class="content">
                        <div class="content--infor">
                            <h4 class="font-helve-bold font20">
                                Nhật coi hồi sinh ngành chất bán dẫn là nhiệm vụ quốc gia
                            </h4>
                            <div class="new--time font-helve font12">
                                <span class="new--info">Kinh Doanh</span>
                                <span class="new--item">15/03/2021</span>
                                <span class="new--item"> 15:00</span>
                            </div>
                            <span class="new--des font18 font-helve-light">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn
                                là sứ mệnh quốc gia, quan trọng không kém...</span>
                        </div>
                    </div>
                </div>
                <div class="new--slider__item">
                    <img src="{{ Theme::asset()->url('images/new/slide.jpg') }}" alt="" class="img-slider">
                    <div class="content">
                        <div class="content--infor">
                            <h4 class="font-helve-bold font20">
                                Nhật coi hồi sinh ngành chất bán dẫn là nhiệm vụ quốc gia
                            </h4>
                            <div class="new--time font-helve font12">
                                <span class="new--info">Kinh Doanh</span>
                                <span class="new--item">15/03/2021</span>
                                <span class="new--item"> 15:00</span>
                            </div>
                            <span class="new--des font18 font-helve-light">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn
                                là sứ mệnh quốc gia, quan trọng không kém...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ----------------------------------- filter ---------------------------------- --}}
<div class="new-filter">
    <div class="container">
        <div class="filter">

            <div class="row filter-title">
                <div class="container">

                    <h2 class="font-helve-bold font20 filter--title">
                        Xem tin theo
                    </h2>
                </div>
            </div>
            <div class="row mt-3">

                <div class="col-md-3 filter--option  mt-2">

                    <div class="menu-container">
                        <div class="dropdown">
                            <button class="btn btn-secondary  font-helve font18 " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Mới nhất
                                <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">

                            </button>
                            <div class="dropdown-menu font-helve font18" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Item 1</a>
                                <a class="dropdown-item" href="#">Item 1</a>
                                <a class="dropdown-item" href="#">Item 1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 filter--option mt-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary font-helve font18 " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Tin tổng hợp
                            <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">

                        </button>
                        <div class="dropdown-menu font-helve font18" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Tin kinh doanh</a>
                            <a class="dropdown-item" href="#">Tin cộng đồng</a>
                            <a class="dropdown-item" href="#">Tin nội bộ</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 filter--option  mt-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary font-helve font18 " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Thương hiệu
                            <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">

                        </button>
                        <div class="dropdown-menu font-helve font18" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 1</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- ---------------------------------- new ---------------------------------------- --}}
    <div class="blod-new">
        <div class="container">
            <div class="new">
                <div class="row ">
                    @php $posts  =  get_post_new(9);  @endphp
                    @if ($posts->count())
                        @foreach ($posts as $itemPost)
                            <div class="col-md-4 mt-2 mb-3 ">
                                <div class="post-thumbnail">
                                    <a href="{{ $itemPost->url }}" class="post__overlay ">
                                        <img src="{{ RvMedia::getImageUrl($itemPost->image) }}"
                                            alt="{{ $itemPost->name }}">
                                    </a>
                                </div>
                                <div class="new--content">
                                    <a href="{{ $itemPost->url }}" class="post__overlay">
                                        <h3 class="new--title font-helve font20">{{ $itemPost->name }}</h3>
                                    </a>
                                    <div class="new--time font-helve font12">
                                        @if (!$itemPost->categories->isEmpty())
                                            <span class="new--info ">
                                                <a
                                                    href="{{ $itemPost->categories->first()->url }}">{{ $itemPost->categories->first()->name }}</a>
                                            </span>
                                        @endif
                                        <span
                                            class="new--item">{{ $itemPost->created_at->format('d/m/Y H:i') }}</span>
                                    </div>
                                    <a href="{{ $itemPost->url }}" class="post__overlay">
                                        <p class="new--des font-helve-light font18">
                                            {{ $itemPost->description }}

                                        </p>
                                    </a>
                                </div>
                            </div>

                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>
    {{-- ---------------------------------- phân trang  ------------------------- --}}
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
