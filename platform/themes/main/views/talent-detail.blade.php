{!! Theme::breadcrumb()->render() !!}



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
                            <li>{{ trans('type of contract') }}:
                                @if($talent->type == 0)
                                {{__('Nhân viên chính thức')}}
                            @elseif($talent->type == 1)
                                {{__('Nhân viên thời vụ')}}
                            @elseif($talent->type == 2)
                                {{__('Bán thời gian')}}
                            @elseif($talent->type == 3)
                                {{__('Thực tập')}}
                            @elseif($talent->type == 4)
                                {{__('Khác')}}
                            @endif
                            </li>
                            <li>{{ trans('Equipment and tools') }}: {!! $talent->timework !!}</li>
                            <li>{{ trans('the deadline for submission') }}: {!! $talent->expire !!}</li>
                        </ul>
                        {{-- @if (has_field($page, 'title_admin_16252012931'))
                            {!! get_field($page, 'title_admin_16252012931') !!}
                        @endif --}}
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
                                    <p>Bạn đang ứng tuyển vào vị trí: </p>
                                    <h2 class=" font-helve font20">
                                        {!! $talent->name !!}
                                    </h2>
                                </div>

                                <div class="poup--form font-helve  ">
                                    <p class=" font-helve-light font16">
                                        Vui lòng bổ sung các thông tin cá nhân của bạn để ứng tuyển
                                    </p>
                                    <div class="form-group __group">
                                        <input type="text" name="name"  class="form-control" placeholder="Họ Tên" />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="email" required class="form-control" placeholder="Email" />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="phone" required class="form-control" placeholder="Số Điện Thoại " />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="address" required class="form-control" placeholder="Địa chỉ " />
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                    <div class="form-group __group">
                                        <input type="text" name="job"  class="form-control d-none" value="{{ $talent->id }}"  />
                                    </div>

                                    <label class=" cv-upload" for="cv_upload">
                                        <span id="file_path" class="btn btn-primary Recruitment--cv mt-1">Đính kèm CV ứng tuyển</span>
                                    </label>
                                    <div class="form-group __group">
                                    <input type="file" name="cv" id="cv_upload"
                                        class="form-control-file d-none">
                                        <div class="errorTxt text-danger pt-1"></div>
                                    </div>
                                </div>

                                <div class=" Recruitment--buttom font-helve font18">
                                    <div class="font-helve font18">
                                        <button type="submit" value="Submit" class="btn btn-submint btn_session Recruitment--profession">ĐĂNG KÝ</button>
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
                    <th scope="col">Vị trí ứng tuyển</th>
                    <th scope="col">Công ty</th>
                    <th scope="col">Địa điểm làm việc</th>
                    <th scope="col">Hạn nộp hồ sơ</th>
                </tr>
            </thead>
            <tbody class="font-helve font18">
                @if(!empty(get_all_recruitments(5)))
                @foreach (get_all_recruitments(5) as $item)
                <tr class="font-helve font18">
                    {{-- {{route('moi-truong-lam-viec',$item->slugable)}} --}}
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
            <a href="/{{ get_slug_job() }}" class="primary-a">{{ trans('See more') }}</a>

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
    {{-- <div class="mb-3"> --}}
        @if (session()->has('success_msg'))
            <script>
                $(document).ready(function() {
                    alertify.success("{{ session('success_msg') }}");
                })
            </script>
            {{-- <div class="alert alert-success">
                <span class="font-helve m-b-0">{{ session('success_msg') }}</span>
            </div> --}}
        @endif
        @if (session()->has('error_msg'))
            <script>
                $(document).ready(function() {
                    alertify.error("{{ session('error_msg') }}");
                })
            </script>
            {{-- <div class="alert alert-danger">
                <span class="font-helve">{{ session('error_msg') }}</span>
            </div> --}}
        @endif
        {{-- @if (isset($errors) && count($errors))
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <span class="font-helve">{{ $error }}</span> <br>
                @endforeach
            </div>
        @endif --}}
    {{-- </div> --}}
@endif