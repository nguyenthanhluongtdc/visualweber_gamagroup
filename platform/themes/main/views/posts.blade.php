{!! Theme::breadcrumb()->render() !!}
{{-- @includeIf("theme.armcobarriers::views.modules.breadcrumb") --}}

{{-- -------------------------------------- new title--------------------- --}}
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
                            <div class="new--time font-helve font12">
                                <span class="new--info">Kinh Doanh</span>
                                <span class="new--item">15/03/2021</span>
                                <span class="new--item"> 15:00</span>
                            </div>
                            <span class="new--des font18 font-helve">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn là sứ mệnh quốc gia, quan trọng không kém...</span>
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
                            <span class="new--des font18 font-helve">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn là sứ mệnh quốc gia, quan trọng không kém...</span>
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
                            <span class="new--des font18 font-helve">Nhật Bản cho biết việc hồi sinh ngành chất bán dẫn là sứ mệnh quốc gia, quan trọng không kém...</span>
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
                    <h4 class="font-helve-bold font20 filter--title">
                        Xem tin theo
                    </h4>
                </div>
                <div class="row mt-3">

                    <div class="col-md-3 filter--option  mt-2">

                        <div class="menu-container">
                            <nav>
                                <ul class="menu font18 font-helve">
                                    <li class="dropdown dropdown-1">
                                        Mới nhất
                                        <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt=""
                                            class="img-slider">
                                            @php $postNew =  get_post_new(5);  @endphp
                                            @if($postNew->count())
                                            @foreach($postNew as $itemPost)
                                        {{-- @if ($post->count()) --}}
                                        {{-- @foreach ($post as $itemPost) --}}
                                        <ul
                                            class="dropdown_menu dropdown_menu--animated dropdown_menu-3 font18 font-helve">
                                            {{-- <li class="dropdown_item-1">{{!$itemPost->name}}</li> --}}
                                            <a href="{{ $itemPost->url }}">   <li class="dropdown_item-2">{{ $itemPost->name }}</li></a>
                                            {{-- <li class="dropdown_item-3">Item 3</li>
                                            <li class="dropdown_item-4">Item 4</li>
                                            <li class="dropdown_item-5">Item 5</li> --}}
                                        </ul>
                                    </li>
                                    @endforeach
                            @endif
                                </ul>
                                {{-- @endforeach --}}
                                {{-- @endif --}}
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 filter--option mt-2">
                        <div class="menu-container">
                            <nav>
                                <ul class="menu font18 font-helve">
                                    <li class="dropdown dropdown-2">
                                        Tin tổng hợp 
                                        <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt=""
                                            class="img-slider">
                                            
                                        <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-2 font18 font-helve">
                                            <li class="dropdown_item-1">Tin kinh doanh</li>
                                            <li class="dropdown_item-2">Tin cộng đồng</li>
                                            <li class="dropdown_item-3">Tin nội bộ</li>
                                        </ul>
                                    </li>
                                    {{-- <li class="dropdown dropdown-1">
                                        Tin tổng hợp
                                        <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt=""
                                            class="img-slider">
                                        @php $categories =  get_all_categories();  @endphp
                                        @if ($categories->count())
                                            @foreach ($categories as $itemPost)
                                                <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-6 font18 font-helve">
                                                    <li class="dropdown_item-3">{{ !$itemPost->name }}</li>
                                                </ul>
                                            @endforeach
                                        @endif
                                    </li> --}}
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
                    <div class="col-md-3 filter--option mt-2">
                        <div class="menu-container">
                            <nav>
                                <ul class="menu font18 font-helve">
                                    <li class="dropdown dropdown-2">
                                        Thương hiệu
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
                                <a href="{{ $itemPost->url }}" class="post__overlay">
                                    <h4 class="new--title font-helve font20">{{ $itemPost->name }}</h4>
                                </a>
                                <div class="new--time font-helve font12">
                                    @if (!$itemPost->categories->isEmpty())
                                        <span class="new--info">
                                            <a
                                                href="{{ $itemPost->categories->first()->url }}">{{ $itemPost->categories->first()->name }}</a>
                                        </span>
                                    @endif
                                    <span class="new--item">{{ $itemPost->created_at->format('d/m/Y H:i') }}</span>
                                </div>
                                <a href="{{ $itemPost->url }}" class="post__overlay">
                                    <span class="new--des font-helve font18">
                                        {{ $itemPost->description }}

                                    </span>
                                </a>
                            </div>

                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>
    {{-- ---------------------------------- phân trang  ------------------------- --}}
    <div class="container mb-5 ">
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
{{-- <script src="">
    $("li").mouseover(function() {
        $(this).find('.drop-down').slideDown(300);
        $(this).find(".accent").addClass("animate");
        $(this).find(".item").css("color", "#FFF");
    }).mouseleave(function() {
        $(this).find(".drop-down").slideUp(300);
        $(this).find(".accent").removeClass("animate");
        $(this).find(".item").css("color", "#000");
    });
</script> --}}
