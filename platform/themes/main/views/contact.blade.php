{!! Theme::breadcrumb()->render() !!}

<div class="container">
    <div class="contact-section1 ">
        <div class="row_wrap padding80">
            <div class="content-md4 title font30 font-helve-bold title-primary pri-color">
                Liên hệ <br>
                chúng tôi
            </div>
            <div class="content-md8 font-helve-light font18 desc">
                Hãy sát cánh cùng chúng tôi <br>
                mang tinh hoa đến Việt Nam
            </div>
        </div>
        <div class="section1-map">
            <div class="left">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="pill" href="#home">
                          <p class="title font20 font-helve">Văn phòng tại Hà Nội:</p>
                          <p class="address font18 font-helve-light">
                            <span class="icon1 icon-loca"><img src="{{ Theme::asset()->url('images/contact/map1.png') }}" alt="location"></span>
                            <span class="icon2 icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                            <span>Số 18/647 Đường Lạc Long Quân, Phường Xuân La, Tây Hồ, Hà Nội</span>
                          </p>
                          <p class="address font18 font-helve-light">
                            <span class="icon1 icon"><img src="{{ Theme::asset()->url('images/contact/phone1.png') }}" alt="phone"></span>
                            <span class="icon2 icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                            <span>0243 5578366</span>
                          </p>
                          <p class="address font18 font-helve-light">
                            <span class="icon1 icon"><img src="{{ Theme::asset()->url('images/contact/phone2.png') }}" alt="phone"></span>
                            <span class="icon2 icon"><img src="{{ Theme::asset()->url('images/contact/phonec.png') }}" alt="phone"></span>
                            <span>Hotline: 18009406</span>
                          </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#menu1">
                        <p class="title font20 font-helve">Văn phòng tại TP.Hồ Chí Minh:</p>
                        <p class="address font18 font-helve-light">
                          <span class="icon1 icon-loca"><img src="{{ Theme::asset()->url('images/contact/map1.png') }}" alt="location"></span>
                          <span class="icon2 icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                          <span>1180/23B, Đường Quang Trung, Phường 8, Quận Gò Vấp, TP.HCM</span>
                        </p>
                        <p class="address font18 font-helve-light">
                          <span class="icon1 icon"><img src="{{ Theme::asset()->url('images/contact/phone1.png') }}" alt="phone"></span>
                          <span class="icon2 icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                          <span>0283 8311608</span>
                        </p>
                        <p class="address font18 font-helve-light">
                          <span class="icon1 icon"><img src="{{ Theme::asset()->url('images/contact/phone2.png') }}" alt="phone"></span>
                          <span class="icon2 icon"><img src="{{ Theme::asset()->url('images/contact/phonec.png') }}" alt="phone"></span>
                          <span>Hotline: 0968 980 179</span>
                        </p>
                      </a>
                    </li>
                    
                </ul>
            </div>
            <div class="right">
                <div class="tab-content">
                    <div id="home" class="container tab-pane active">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.121702249694!2d105.80886451533256!3d21.067800891819168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aae60b5ffb21%3A0x37f314a18d2279ab!2zU-G7kSAxOCwgNjQ3IMSQLiBM4bqhYyBMb25nIFF1w6JuLCBYdcOibiBMYSwgVMOieSBI4buTLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1625721116835!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div id="menu1" class="container tab-pane fade">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.67041165242!2d106.65573341526064!3d10.836514961043761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0c812ccfb%3A0x6b04258f2288642!2zMTE4MCwgMjMgUXVhbmcgVHJ1bmcsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1625721690989!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                   
                  </div>
            </div>
        </div>
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
                                <input type="text" class="contact-form-input" name="name" value="{{ old('name') }}" id="contact_name"
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
                        <div class="left">
                            <input type="checkbox" id="agree" name="agree" value="Bike" class="agree">
                            <label for="agree" class="font-helve pri-color"> Tôi muốn nhận bản tin từ GAMA Group</label>
                        </div>
                        <div class="right">
                            <button type="submit" class="contact-button font18 font-helve">{{ __('Send') }}</button>
                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    <div class="contact-section3">
        <div class="row_wrap">
            <div class="content-md4">
                <div class="font30 font-helve-bold title-primary pri-color">
                    Liên hệ các bộ phận <br>
                    Kinh Doanh
                </div>
                <select class="selectpicker font18 font-helve-light" style="background-image: url('{{ Theme::asset()->url('images/contact/down.png') }}')">
                    <span>hello</span>
                    <option>Gama Service</option>
                    <option>Gama Service 2</option>
                    <option>Gama Service 3</option>
                </select>
                <div class="address-left">
                    <p class="item">
                        <span class="icon-loca"><img src="{{ Theme::asset()->url('images/contact/mapb.png') }}" alt="location"></span>
                        <span class="font-helve-light font16">1180/23B, Đường Quang Trung, Phường 8, Quận Gò Vấp, TP.HCM</span>
                    </p>
                    <p class="item">
                        <span class="icon"><img src="{{ Theme::asset()->url('images/contact/phoneb.png') }}" alt="phone"></span>
                        <span class="font-helve-light font16">0283 8311608</span>
                    </p>
                </div>
            </div>
            <div class="content-md8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.67041165242!2d106.65573341526064!3d10.836514961043761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0c812ccfb%3A0x6b04258f2288642!2zMTE4MCwgMjMgUXVhbmcgVHJ1bmcsIEfDsiBW4bqlcCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1625721690989!5m2!1sen!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
