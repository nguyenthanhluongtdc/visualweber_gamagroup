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
@php 
 $category_news_list = get_post_news(10);
@endphp

@if (!empty($category_news_list))
<div class="new-banner">
    <div class="container">
        <div class="new--banner">
            <div class="main-slider owl-carousel">
                @foreach ($category_news_list as $item)
                    <div class="new--slider__item">
                        <img src="{{ RvMedia::getImageUrl($item->image) }}" alt="{{ $item->name }}">
                        <div class="content">
                            <div class="content--infor">
                                <h4 class="font-helve-bold font20">
                                   <a href="{{ $item->url }}">{{ $item->name }}</a>
                                </h4>
                                <div class="post-meta">
                                    @if (!$item->categories->isEmpty())
                                        <span class="post-category">
                                            <a href="{{ $item->categories->first()->url }}">{{ $item->categories->first()->name }}</a>
                                        </span>
                                    @endif
                                    <span class="time"> {{ $item->created_at->format('d/m/Y H:i') }}</span>      
                                </div>
                                <div class="new--des font18 font-helve-light">{{ $item->description}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endif
{{-- ----------------------------------- filter ---------------------------------- --}}
<div class="new-filter">
    <div class="container">
        <div class="filter">

            <div class="row filter-title">
                <div class="container">

                    <h2 class="font-helve-bold font20 filter--title view-posts-deskop">
                        Xem tin theo
                    </h2>
                    <div class="view-posts-mobie">
                        <div class="wrap-view font18 font-helve-bold pri-color">
                            <span>Xem tin theo</span> <span class="icon"><i class="fas fa-angle-down"></i></span>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="select posts-form-fiter">
                <form id="posts-form" action="#" method="get">
                    <select name="selectorder" id="selectorder" name="selectorder" class="font18 font-helve js-example-disabled-results" style="background-image: url('{{ Theme::asset()->url('images/contact/down.png') }}')">
                        <option {{request()->selectorder == 1 ? "selected" : ""}} value="1" class="option">{{__('Latest')}}</option>
                        <option {{request()->selectorder == 2 ? "selected" : ""}} value="2">{{__('Oldest')}}</option>
                    </select>
                   
                    @if(!empty(get_featured_categories(10)))
                    <select name="selectcategory" id="selectcategory" name="selectcategory" class="font18 font-helve js-example-disabled-results" style="background-image: url('{{ Theme::asset()->url('images/contact/down.png') }}')">
                        <option value="0" selected {{request()->selectcategory == 0 }} >{{__('General News')}}</option>
                        @foreach (get_featured_categories(10) as $key => $item)
                            
                            <option {{request()->selectcategory == $key+1 ? "selected" : ""}} value="{{$key+1}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @endif

                    <select name="selectbrand" id="selectbrand" name="selectbrand" class="font18 font-helve js-example-disabled-results" style="background-image: url('{{ Theme::asset()->url('images/contact/down.png') }}')"> 
                        <option selected {{request()->selectcategory == 0 }}>{{__('Brands')}}</option>
                        @foreach (get_all_tags() as $key => $item)
                            <option {{request()->selectbrand == $key+1 ? "selected" : ""}} value="{{$key+1}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </form>
            </div>


            {{-- <div class="row mt-3">

                <div class="col-md-3 filter--option  mt-2">

                    <div class="menu-container">
                        <div class="dropdown">
                            <button class="btn btn-secondary  font-helve font18 " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               M???i nh???t
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
                            Tin t???ng h???p
                            <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">

                        </button>
                        <div class="dropdown-menu font-helve font18" aria-labelledby="dropdownMenuButton">
                            @if(!empty(get_all_categories()))
                            @foreach (get_all_categories() as $item)
                            <a class="dropdown-item" href="">{{$item->name}}</a>
                            @endforeach
                            @endif
                            <a class="dropdown-item" href="#">Tin kinh doanh</a>
                            <a class="dropdown-item" href="#">Tin c???ng ?????ng</a>
                            <a class="dropdown-item" href="#">Tin n???i b???</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 filter--option  mt-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary font-helve font18 " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Th????ng hi???u
                            <img src="{{ Theme::asset()->url('images/new/dropdown.png') }}" alt="">

                        </button>
                        <div class="dropdown-menu font-helve font18" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 1</a>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
    {{-- ---------------------------------- new ---------------------------------------- --}}
    <div class="blod-new">
        <div class="container">
            <div class="new">
                <div class="row ">
                    @php $posts  =  get_all_post_fiter(12);  @endphp
                    @if ($posts->count())
                        @foreach ($posts as $itemPost)
                            <div class="col-md-4 mt-2 mb-3 ">
                                <div class="post-thumbnail">
                                    <a href="{{ $itemPost->url }}" class="post__overlay ">
                                        <img src="{{ RvMedia::getImageUrl($itemPost->image,'news_thumbnail', false, RvMedia::getDefaultImage()) }}"
                                            alt="{{ $itemPost->name }}">
                                    </a>
                                </div>
                                <div class="new--content">
                                    <a href="{{ $itemPost->url }}" class="post__overlay">
                                        <h3 class="new--title font-helve font20">{{ $itemPost->name }}</h3>
                                    </a>
                                    <div class="post-meta">
                                        @if (!$itemPost->categories->isEmpty())
                                            <span class="post-category">
                                                <a href="{{ $itemPost->categories->first()->url }}">{{ $itemPost->categories->first()->name }}</a>
                                            </span>
                                        @endif
                                        <span class="time"> {{ $itemPost->created_at->format('d/m/Y H:i') }}</span>      
                                    </div>
                                    {{-- <div class="new--time font-helve font12">
                                        @if (!$itemPost->categories->isEmpty())
                                            <span class="new--info ">
                                                <a
                                                    href="{{ $itemPost->categories->first()->url }}">{{ $itemPost->categories->first()->name }}</a>
                                            </span>
                                        @endif
                                        <span
                                            class="new--item">{{ $itemPost->created_at->format('d/m/Y H:i') }}</span>
                                    </div> --}}
                                    <a href="{{ $itemPost->url }}" class="post__overlay">
                                        <p class="new--des font-helve-light font18">
                                            {{ $itemPost->description }}

                                        </p>
                                    </a>
                                </div>
                            </div>

                        @endforeach
                    @endif
                    @if ($posts->count() == 0)
                            <div class="container font18 font-helve">
                                {{__('No data')}}
                            </div>
                    @endif
                    
                </div>
                <div class="page-pagination text-right">
                    {!! $posts->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
    {{-- ---------------------------------- ph??n trang  ------------------------- --}}
    {{-- <div class="gama--naviga">

        <div class="container ">
            <nav aria-label="Page navigation example">
                <ul class="pagination font-helve font20">

                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Trang ti???p <img
                                src="{{ Theme::asset()->url('images/new/next.png') }}" alt=""></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> --}}
</div>
