<div class="breadcrumb-wrap">
    <ul class="breadcrumb-list container font-helve-light" itemscope itemtype="http://schema.org/BreadcrumbList">
       
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
                   <a href="{{ route('public.index') }}">{{__('Home')}}</a>
                    <span class="icon">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
                    <a href="{{ route('public.index') }}/{{  get_slug_job()  }}">{{__('Cơ hội nghề nghiệp')}}</a>
                     <span class="icon">
                         <i class="fas fa-angle-right"></i>
                     </span>
                 </li>
        
                <li class="active link-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    {{ $talent->name }}
                </li>
       
    </ul>
</div>
<div class="all-news-content">
    <div class="container">
        <div class="new-section1">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="new-title font-helve-bold font30">
                        {!! $talent->name !!}
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
            <div class="col-md-4 ">
                <div class="sticky-top">
                <div class="Recruitment Recruitment--item1 font-helve-light font18 ">
                    <div class="Recruitment--adree">
                        <ul>

                            <li>{{ trans('Company') }}: {{!empty($talent->companies) ? $talent->companies->name : "None"}}</li>
                            <li>{{ trans('address') }}: {{!empty($talent->city) ? $talent->city->name : "None"}}</li>
                            <li>{{ trans('Department') }}: {!! $talent->department !!}</li>
                            @if(!blank($talent->candidatePosition))
                                <li>{{ trans('type of contract') }}: {{ $talent->candidatePosition->name ?? '' }}</li>
                            @endif
                            <li>{{ trans('Equipment and tools') }}: {!! $talent->timework !!}</li>
                            <li>{{ trans('the deadline for submission') }}: {!! $talent->expire !!}</li>
                        </ul>
                     
                    </div>
                    <div class=" Recruitment--buttom font-helve font18">
                        <a data-fancybox="poup" data-src="#poup" href="javascript:;"
                            class="btn btn-primary Recruitment--profession Recruitment--profession__open">{{ trans('submit cv for recruitment application') }}</a>
                    </div>
                </div>
                <div id="poup" class="poup">
                    <div class="poup--block">
                        <div class="poup--block__img">
                            <img src="{{ Theme::asset()->url('images/talent/two-woman.jpg') }}" alt="two-woman">
                        </div>
                        <div class="poup--block__form">
                            <form action="{{route('public.recruitment.send-contact')}}" enctype="multipart/form-data" method="post"  id="recruitment_form" >
                                @csrf
                                <div class="poup--title font-helve-light font18">
                                    <p>{{ trans('applying for positions') }}:</p>
                                    <h2 class=" font-helve font20">
                                        {!! $talent->name !!}
                                    </h2>
                                </div>

                                <div class="poup--form font-helve  ">
                                    <p class=" font-helve-light font16">
                                        {{ trans('personal information') }}:
                                    </p>
                                    <div class="form-group __group">
                                        <input type="text" name="name"  class="form-control" placeholder="{{ trans('Name') }}" />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="email" required class="form-control" placeholder="{{ trans('Email') }}" />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="phone" required class="form-control" placeholder="{{ trans('Phone') }} " />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="address" required class="form-control" placeholder="{{ trans('address') }}" />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="job"  class="form-control d-none" value="{{ $talent->id }}"  />
                                    </div>

                                    <label class=" cv-upload" for="cv_upload">
                                        <span id="file_path" class="btn btn-primary Recruitment--cv mt-1">{{ trans('Attach your CV') }}</span>
                                    </label>
                                    <div class="form-group __group">
                                    <input type="file" name="cv" id="cv_upload"
                                        class="form-control-file d-none">
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                </div>

                                <div class=" Recruitment--buttom font-helve font18">
                                    <div class="font-helve font18">
                                        <button type="submit" value="Submit" class="btn btn-submint btn_session Recruitment--profession">{{ trans('REGISTRATION') }}</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
            </div>
            <div class="col-md-8 talent--desc">
                <div class="opportunity1">
                    <h3 class="opportunity--item font-helve-bold font20">
                        {{ trans('job overview') }}
                    </h3>
                    <div class="desc--overview font-helve-light font18">
                        {!! $talent->experience !!}
                    </div>
                </div>

                <hr>

                <div class="opportunity">
                    <h3 class="opportunity--title font-helve-bold font20">
                        {{ trans('Describe') }}
                    </h3>

                    <div class="desc--overview font-helve-light font18">
                        {!! $talent->describe !!}
                    </div>
                </div>

                <hr>
                <div class="opportunity">
                    <h3 class="opportunity--title font-helve-bold font20">
                        {{ trans('responsibility') }}
                    </h3>
                    <div class="desc--overview item font-helve-light font18">
                        {!! $talent->Responsibility !!}

                    </div>
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
            {{ trans('other locations') }}
        </h3>

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
                @if(!empty(get_all_recruitments(5)))
                @foreach (get_all_recruitments(5) as $item)
                <tr class="font-helve font18">
                    <td><a href="{{ $item->url }}">{{$item->name}}</a></td>
                    <td>{{!empty($item->companies) ? $item->companies->name : "None"}}</td>
                            <td>{{!empty($item->city) ? $item->city->name : "None"}}</td>
                    <td>{{$item->expire}}</td>

                </tr>
                @endforeach
                @endif

            </tbody>
        </table>


        <div class="Recruitment--buttom xem-them font-helve font18">
            
            <a href="/{{ get_slug_job() }}" class="primary-a link-vi-detail">{{ trans('See more') }}</a>
            <a href="/en/{{ get_slug_job() }}" class="primary-a link-en-detail">{{ trans('See more') }}</a>

        </div>
    </div>
</div>

<ul>
     @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
     @endforeach

     {{ count($errors->all()) }}
</ul>

<script src="//code.jquery.com/jquery-3.5.1.min.js"></script>

@if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
   
        @if (session()->has('success_msg'))
            <script>
                $(document).ready(function() {
                    alertify.success("{{ session('success_msg') }}");
                })
            </script>

        @endif
        @if (session()->has('error_msg'))
            <script>
                $(document).ready(function() {
                    alertify.error("{{ session('error_msg') }}");
                })
            </script>
            
        @endif
       
@endif