{!! Theme::breadcrumb()->render() !!}

@php
    $recruitments = get_all_recruitments(request('limit', 5))
@endphp

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

                    <select class="selectposition font-helve js-example-disabled-results" name="candidate-position" id="selectposition">
                        <option value="" selected disabled>{{__("plugins/candidate-position::candidate-position.name")}}</option>
                        @foreach (get_candidate_position() as $item)
                            <option {{request()->get('candidate-position') == $item->id ? "selected" : ""}} value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <select class="selectcompany font-helve js-example-disabled-results" name="selectcompany" id="selectcompany">
                        <option selected disabled>{{ trans('Company') }}</option>
                        <option value="0">{{ trans('all') }}</option>
                        @if(!empty(get_companies_for_form()))
                        @foreach (get_companies_for_form() as $item)
                        <option {{request()->selectcompany == $item->id ? "selected" : ""}} value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        @endif
                    </select>

                    <select class="selectaddress font-helve js-example-disabled-results" name="selectaddress" id="selectaddress">
                        <option selected disabled>{{ trans('work address') }}</option>
                        <option value="0">{{ trans('all') }}</option>
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
                    <th scope="col">{{ trans('Nominee') }}</th>
                    <th scope="col">{{ trans('Company') }}</th>
                    <th scope="col">{{ trans('work address') }}</th>
                    <th scope="col">{{ trans('the deadline for submission') }}</th>
                  </tr>
                </thead>

                <tbody class="font-helve font18">
                  <tr class="font-helve font18">
                    <tbody class="font-helve font18">
                        @if(!empty($recruitments))
                        @foreach ($recruitments as $item)
                        <tr class="font-helve font18">
                            <td><a href="{{ $item->url }}">{{$item->name}}</a></td>
                            <td>{{!empty($item->companies) ? $item->companies->name : "None"}}</td>
                            <td>{{!empty($item->city) ? $item->city->name : "None"}}</td>
                            {{-- <td>{{$item->location}}</td> --}}
                            <td>{{$item->expire}}</td>

                        </tr>
                        @endforeach
                        @endif

                    </tbody>

              </table>
             
        </div>
    </div>
{{------------------------------- page ------------------------------------}}


<div class="gama--naviga">

    <div class="container ">
        @if(!empty($recruitments))
        @if(count($recruitments) == 0)

            <div class="d-flex justify-content-center">
                <h5 class="font-helve font18">{{ trans('no data') }}</h5>
            </div>
            @endif
            @if(!empty($recruitments))
            <div class="d-flex justify-content-center">
                {!! $recruitments->links() !!}
            </div>
            @endif
            @endif
    </div>
</div>
</div>
