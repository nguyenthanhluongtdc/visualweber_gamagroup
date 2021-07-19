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
                    <div class="desc font18 font-helve-light">
                       {!! $page -> content!!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
{{-- ------------------------banner talent-opportunity ----------------}}
    <div class="opportunity-s2">
        @if (has_field($page, 'banner_co_hoi_lam_viec'))
        <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_co_hoi_lam_viec')) }}" alt="banner">
    @endif

    </div>

    {{----------------------------- filter-talent-opportunity ----------------}}
    <div class="talent-filter">
        <div class="container">
            
            <div class="filteres">
                <div class="select talent-form-fiter">
                <form id="recruitment-form" action="#" method="get">
                    <select class="selectorder font18 font-helve js-example-disabled-results" name="selectorder" id="selectorder">
                        <option {{request()->selectorder == 1 ? "selected" : ""}} value="1" class="option">{{__('Latest')}}</option>
                        <option {{request()->selectorder == 2 ? "selected" : ""}} value="2">{{__('Oldest')}}</option>
                    </select>

                    <select class="selectposition font-helve js-example-disabled-results" name="selectposition" id="selectposition">
                        <option selected disabled>{{__('Vị trí ứng tuyển')}}</option>
                        <option value="0">{{__('Tất cả')}}</option>
                        @if(!empty(get_all_recruitments_for_filter()))
                        @foreach (get_all_recruitments_for_filter() as $item)
                        <option {{request()->selectposition == $item->id ? "selected" : ""}} value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        @endif
    
                    </select>
                    <select class="selectcompany font-helve js-example-disabled-results" name="selectcompany" id="selectcompany">
                        <option selected disabled>{{__('Công ty')}}</option>
                        <option value="0">{{__('Tất cả')}}</option>
                        @if(!empty(get_companies_for_form()))
                        @foreach (get_companies_for_form() as $item)
                        <option {{request()->selectcompany == $item->id ? "selected" : ""}} value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        @endif
                    </select>

                    <select class="selectaddress font-helve js-example-disabled-results" name="selectaddress" id="selectaddress">
                        <option selected disabled>{{__('Địa chỉ làm việc')}}</option>
                        <option value="0">{{__('Tất cả')}}</option>
                        @if(!empty(get_address_for_form()))
                        @foreach (get_address_for_form() as $item)
                        <option {{request()->selectaddress == $item->id ? "selected" : ""}} value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        @endif
                    </select>
                </form>
            
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
                    <tbody class="font-helve font18">
                        @if(!empty(get_all_recruitments(5)))
                        @foreach (get_all_recruitments(5) as $item)
                        <tr class="font-helve font18">
                            <td><a href="{{ $item->url }}">{{$item->name}}</a></td>
                            <td>{{$item->company}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{$item->expire}}</td>
                           
                        </tr>
                        @endforeach
                        @endif
                       
                    </tbody>
                 
              </table>
              {{-- <div class="page-pagination text-right">
                {!! $posts->withQueryString()->links() !!}
            </div> --}}
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
