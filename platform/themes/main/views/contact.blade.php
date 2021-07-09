{!! Theme::breadcrumb()->render() !!}

<div class="container">
    <div class="contact-section1 ">
        <div class="row_wrap section1-title">
            @if (has_field($page, 'title_contact_1'))
            <div class="content-md4 title font30 font-helve-bold title-primary pri-color">
               {!! get_field($page, 'title_contact_1') !!}
            </div>
            @endif
            @if (has_field($page, 'desc_contact_1'))
            <div class="content-md8 font-helve-light font18 desc">
                {!! get_field($page, 'desc_contact_1') !!}
            </div>
            @endif
        </div>

        @if (has_field($page, 'list_contact_top'))
        <div class="section1-map">
            <div class="left">
                <ul class="nav nav-pills" role="tablist">
                    @foreach (get_field($page, 'list_contact_top') as $key => $item)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="pill" href="#vp{{ $key }}">
                                <p class="title font20 font-helve">{{ get_sub_field($item, 'title_contact_item_top') }}</p>
                                <p class="address font18 font-helve-light">
                                <span class="icon1 icon-loca"><img src="{{ Theme::asset()->url('images/contact/map1.png') }}" alt="location"></span>
                                <span class="icon2 icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                                <span>{{ get_sub_field($item, 'address_contact_item_top') }}</span>
                                </p>
                                <p class="address font18 font-helve-light">
                                <span class="icon1 icon"><img src="{{ Theme::asset()->url('images/contact/phone1.png') }}" alt="phone"></span>
                                <span class="icon2 icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                                <span>{{ get_sub_field($item, 'phone_contact_item_top') }}</span>
                                </p>
                                <p class="address font18 font-helve-light">
                                <span class="icon1 icon"><img src="{{ Theme::asset()->url('images/contact/phone2.png') }}" alt="phone"></span>
                                <span class="icon2 icon"><img src="{{ Theme::asset()->url('images/contact/phonec.png') }}" alt="phone"></span>
                                <span>{{ get_sub_field($item, 'hotline_contact_item_top') }}</span>
                                </p>
                            </a>
                        </li>
                    @endforeach
                   
                    
                </ul>
            </div>
            <div class="right">
                <div class="tab-content">
                    @foreach (get_field($page, 'list_contact_top') as $key => $item)
                        <div id="vp{{ $key }}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                            {!! get_sub_field($item, 'map_contact_item_top') !!}
                        </div>
                    @endforeach
                    {{-- <div id="home" class="tab-pane active">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.121702249694!2d105.80886451533256!3d21.067800891819168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aae60b5ffb21%3A0x37f314a18d2279ab!2zU-G7kSAxOCwgNjQ3IMSQLiBM4bqhYyBMb25nIFF1w6JuLCBYdcOibiBMYSwgVMOieSBI4buTLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1625721116835!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.67041165242!2d106.65573341526064!3d10.836514961043761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0c812ccfb%3A0x6b04258f2288642!2zMTE4MCwgMjMgUXVhbmcgVHJ1bmcsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1625721690989!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> --}}
                   
                  </div>
            </div>
        </div>
        @endif
    </div>
    

    <div class="contact-section2">
        <div class="row_wrap">
            <div class="content-md4 font30 font-helve-bold title-primary pri-color">
                Gửi thư cho <br>
                chúng tôi
            </div>
            <div class="content-md8">
                {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}

               
                    <div class="contact-top">
                        <div class="form-contact-left">
                            <div class="contact-form-item">
                                <input type="text" class="contact-form-input required" name="name" value="{{ old('name') }}" id="contact_name"
                                       placeholder="{{ __('Name') }}">
                            </div>
                            <div class="contact-form-item">
                                <input type="email" class="contact-form-input" name="email" value="{{ old('email') }}" id="contact_email"
                                 placeholder="{{ __('Email') }}">
                            </div>
                            <div class="contact-form-item">
                                <input type="text" class="contact-form-input" name="phone" value="{{ old('phone') }}" id="contact_phone"
                                placeholder="{{ __('Phone') }}">
                            </div>
                        </div>
                        <div class="form-contact-right">
                            <div class="contact-form-group">
                                <textarea name="content" id="contact_content" class="contact-form-input" rows="5" placeholder="{{ __('Message') }}">{{ old('content') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="contact-bottom">
                        <div class="left customcheck">
                            <input type="checkbox" id="agree" name="agree" value="Bike" class="agree"  checked="checked">
                            <label for="agree" class="font-helve pri-color"> Tôi muốn nhận bản tin từ GAMA Group</label>
                            <span class="checkmark"></span>
                        </div>
                        <div class="right">
                            <button type="submit" class="contact-button font18 font-helve">{{ __('Send') }}</button>
                        </div>
                    </div>
                    @if(session()->has('success_msg') || session()->has('error_msg') || isset($errors))
                    @if (session()->has('success_msg'))
                        <div class="alert alert-success font-helve-light font18">
                            <p>{{__('Send successfully')}}</p>
                        </div>
                    @endif
                    @if (session()->has('error_msg'))
                        <div class="alert alert-danger font-helve-light font18">
                            <p>{{ session('error_msg') }}</p>
                        </div>
                    @endif
                    @if (isset($errors) && count($errors))
                        <div class="alert alert-danger font-helve-light font18">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span> <br>
                            @endforeach
                        </div>
                    @endif
                @endif
                    <div class="contact-form-group">
                        <div class="contact-message contact-success-message" style="display: none"></div>
                        <div class="contact-message contact-error-message" style="display: none"></div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    @if (has_field($page, 'list_contact_bottom'))
    <div class="contact-section3">
        <div class="row_wrap">
            <div class="content-md4">
                @if (has_field($page, 'title_contact_bottom'))
                <div class="font30 font-helve-bold title-primary pri-color">
                   {!! get_field($page, 'title_contact_bottom') !!}
                </div>
                @endif
                <select class="selectpicker font18 font-helve-light" style="background-image: url('{{ Theme::asset()->url('images/contact/down.png') }}')" id="select-contact">
                    @foreach (get_field($page, 'list_contact_bottom') as $key => $item)
                        <option class="contact{{$key+1}}" name="hello">{{ get_sub_field($item, 'title_contact_bottom_item') }}</option>
                    @endforeach
                   
                </select>
                <div class="address-left">
                    @foreach (get_field($page, 'list_contact_bottom') as $key => $item)
                        <div class="contact-show{{$key+1}} contact">
                            <p class="item">
                                <span class="icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                                <span class="font-helve-light font16">{{ get_sub_field($item, 'address_contact_bottom_item') }}</span>
                            </p>
                            <p class="item">
                                <span class="icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                                <span class="font-helve-light font16"><a href="tel:{{ get_sub_field($item, 'phone_contact_bottom_item') }}">{{ get_sub_field($item, 'phone_contact_bottom_item') }}</a></span>
                            </p>
                        </div>
                    @endforeach
                    {{-- <div class="contact-show1 contact">
                        <p class="item">
                            <span class="icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                            <span class="font-helve-light font16">1180/23B, Đường Quang Trung, Phường 8, Quận Gò Vấp, TP.HCM</span>
                        </p>
                        <p class="item">
                            <span class="icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                            <span class="font-helve-light font16"><a href="tel:0283 8311608">0283 8311608</a></span>
                        </p>
                    </div>
                    <div class="contact-show2 contact">
                        <p class="item">
                            <span class="icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                            <span class="font-helve-light font16">Số 18/647 Đường Lạc Long Quân, Phường Xuân La, Tây Hồ, Hà Nội</span>
                        </p>
                        <p class="item">
                            <span class="icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                            <span class="font-helve-light font16">0283 8311608</span>
                        </p>
                    </div>
                    <div class="contact-show3 contact">
                        <p class="item">
                            <span class="icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                            <span class="font-helve-light font16">1180/23B, Đường Quang Trung, Phường 8, Quận Gò Vấp, TP.HCM</span>
                        </p>
                        <p class="item">
                            <span class="icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                            <span class="font-helve-light font16">0283 8311608</span>
                        </p>
                    </div>
                    <div class="contact-show4 contact">
                        <p class="item">
                            <span class="icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                            <span class="font-helve-light font16">Số 18/647 Đường Lạc Long Quân, Phường Xuân La, Tây Hồ, Hà Nội</span>
                        </p>
                        <p class="item">
                            <span class="icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                            <span class="font-helve-light font16">0283 8311608</span>
                        </p>
                    </div> --}}
                </div>
            </div>
            <div class="content-md8">
                @foreach (get_field($page, 'list_contact_bottom') as $key => $item)
                        <div class="contact-show{{$key+1}} contact">
                            {!! get_sub_field($item, 'map_contact_bottom_item') !!}
                        </div>
                @endforeach
               {{-- <div class="contact-show1 contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.67041165242!2d106.65573341526064!3d10.836514961043761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0c812ccfb%3A0x6b04258f2288642!2zMTE4MCwgMjMgUXVhbmcgVHJ1bmcsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1625721690989!5m2!1sen!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
               <div class="contact-show2 contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.121702249694!2d105.80886451533256!3d21.067800891819168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aae60b5ffb21%3A0x37f314a18d2279ab!2zU-G7kSAxOCwgNjQ3IMSQLiBM4bqhYyBMb25nIFF1w6JuLCBYdcOibiBMYSwgVMOieSBI4buTLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1625721116835!5m2!1sen!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
               <div class="contact-show3 contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.67041165242!2d106.65573341526064!3d10.836514961043761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0c812ccfb%3A0x6b04258f2288642!2zMTE4MCwgMjMgUXVhbmcgVHJ1bmcsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1625721690989!5m2!1sen!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
               <div class="contact-show4 contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.121702249694!2d105.80886451533256!3d21.067800891819168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aae60b5ffb21%3A0x37f314a18d2279ab!2zU-G7kSAxOCwgNjQ3IMSQLiBM4bqhYyBMb25nIFF1w6JuLCBYdcOibiBMYSwgVMOieSBI4buTLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1625721116835!5m2!1sen!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div> --}}
            </div>
        </div>
    </div>
    @endif
</div>
