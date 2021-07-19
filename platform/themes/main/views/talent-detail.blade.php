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
                @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
                @if (session()->has('success_msg'))
                    <div class="alert alert-success">
                        <span class="m-b-0">Gửi thành công</span>
                    </div>
                @endif
                @if (session()->has('error_msg'))
                    <div class="alert alert-danger">
                        <p>{{ session('error_msg') }}</p>
                    </div>
                @endif
                @if (isset($errors) && count($errors))
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span> <br>
                        @endforeach
                    </div>
                @endif
            @endif
                <div class="sticky-top">
                <div class="Recruitment Recruitment--item1 font-helve-light font18 ">
                    <div class="Recruitment--adree">
                        <ul>
                            <li>Công ty: {!! $talent->company !!}</li>
                            <li>Địa chỉ: {!! $talent->location !!}</li>
                            <li>Phong ban: {!! $talent->department !!}</li>
                            <li>Loại hợp đồng: 
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
                            <li>Thiết bị, công cụ: {!! $talent->timework !!}</li>
                            <li>Hạn nộp hồ sơ: {!! $talent->expire !!}</li>
                        </ul>
                        {{-- @if (has_field($page, 'title_admin_16252012931'))
                            {!! get_field($page, 'title_admin_16252012931') !!}
                        @endif --}}
                    </div>
                    <div class=" Recruitment--buttom font-helve font18">
                        <a data-fancybox="poup" data-src="#poup" href="javascript:;"
                            class="btn btn-primary Recruitment--profession">Nộp CV ứng tuyển</a>
                    </div>
                </div>
                <div id="poup" class="poup">
                    <div class="poup--block">
                        <div class="poup--block__img">
                            <img src="{{ Theme::asset()->url('images/talent/two-woman.jpg') }}" alt="two-woman">
                        </div>
                        <div class="poup--block__form">
                            <form action="{{route('recruitment.send')}}" enctype="multipart/form-data" method="post"  id="register-form" >
                                @csrf
                                <div class="poup--title font-helve-light font18">
                                    <p>Bạn đang ứng tuyển vào vị trí: </p>
                                    <h2 class=" font-helve font20">
                                        Chuyên Viên Kỹ Thuật Cấp Cao ERP
                                    </h2>
                                </div>
                            
                                <div class="poup--form font-helve  ">
                                    <p class=" font-helve-light font16">
                                        Vui lòng bổ sung các thông tin cá nhân của bạn để ứng tuyển
                                    </p>
                                    <input type="text" name="name"  class="form-control" placeholder="Họ Tên" />
                                    <input type="text" name="email" required class="form-control" placeholder="Email" />
                                    <input type="text" name="phone" required class="form-control" placeholder="Số Điện Thoại " />
                                    <input type="text" name="address" required class="form-control" placeholder="Địa chỉ " />
                                    <input type="text" name="job"  class="form-control d-none"  />
                            
                                    <label class=" cv-upload" for="cv_upload">
                                        <span class="btn btn-primary Recruitment--cv">Đính kèm CV ứng
                                            tuyển</span>
                                    </label>
                                    <span id="file_path"></span>
                                    <input type="file" name="cv" required id="cv_upload"
                                        class="form-control-file d-none">
                                </div>
                            
                                <div class=" Recruitment--buttom font-helve font18" for="cv_upload">
                                    {{-- <div class="form-group"> --}}
                                    
                                    {{-- </div> --}}
                                    <div class="font-helve font18">
                                        <button type="submit" value="Submit" class="btn btn-submint Recruitment--profession">ĐĂNG KÝ</button>
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
                        Tổng quan công việc
                    </h3>
                    <div class="desc--overview font-helve-light font18">
                        {!! $talent->experience !!}
                    </div>
                </div>
                
                <hr>

                <div class="opportunity">
                    <h3 class="opportunity--title font-helve-bold font20">
                        Mô tả
                       
                    </h3>
    
                    <div class="desc--overview font-helve-light font18">
                        {!! $talent->describe !!}
                    </div>
                </div>
                
                <hr>
                <div class="opportunity">
                    <h3 class="opportunity--title font-helve-bold font20">
                        Trách nhiệm
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
            Các vị trí khác
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
                    <td>{{$item->company}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->expire}}</td>
                   
                </tr>
                @endforeach
                @endif
               
            </tbody>
        </table>
       
        
        <div class="Recruitment--buttom xem-them font-helve font18">
            <a href="/{{ get_slug_talent_detail() }}" class="primary-a">{{ trans('See more') }}</a>

        </div>
    </div>
</div>
<script>
    $('#cv_upload').change(function(){
        if($(this)[0].files[0].size > 2097152){
            alert("Chỉ cho phép upload file dưới 2MB!");
            this.value = "";
        } else {
            $('#file_path').append($('#cv_upload').val().replace(/C:\\fakepath\\/i, ''))
        }
    })
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script >
     $(document).ready(function($) {
        
        $("#register-form").validate({
        rules: {
            name: "required",                    
            email:"required",
            phone:"required",
            address:"required"
        //    city: "required",
         
        },
        messages: {
            name: "Please enter your Name",                   
            name: "Please enter your Email",                   
            name: "Please enter your Phone",                   
            name: "Please enter your address",                   
           
        },
         errorPlacement: function(error, element) 
        submitHandler: function(form) {
            form.submit();
        }
        
    });
});
</script>