<footer class="footer">
   <div class="footer-content container">
       <div class="row row-footer">
           <div class="col-lg-2">
                <a class="footer-logo" href="{{ route('public.index') }}">
                    <img src="{{ theme::asset()->url('images/logo.png') }}" alt="logo">
                </a>
           </div>
           <div class="col-lg-8 menu-footer">
               <div class="row ">
                   <div class="col-md-6">

                            {!! dynamic_sidebar('footer_sidebar') !!}
                        {{-- <ul class="list-menu-footer font-helve font18">
                            <li class="active"><a href="">Trang chủ</a></li>
                            <li><a href="">Lĩnh vực kinh doanh</a></li>
                            <li><a href="">Đối tác</a></li>
                            <li><a href="">Nhân tài</a></li>
                            <li><a href="">Giới thiệu</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Tin tức</a></li>
                        </ul> --}}
                        {{-- {!! Menu::renderMenuLocation('main-menu', [
                            'options' => ['class' => 'menu sub-menu--slideLeft'],
                            'view' => 'main-menu',
                        ]) !!} --}}
                   </div>
                   <ul class="col-md-6 link-another font18 font-helve">
                        <li><a href="">Câu hỏi thường gặp</a></li>
                        <li><a href="">Quy định bảo mật</a></li>
                   </ul>
               </div>
           </div>
           <div class="col-lg-2 footer-right">
               <p>Liên kết với chúng tôi</p>
               <ul>
                   <li><a href=""><img src="{{ theme::asset()->url('images/homepage/iconfb.png') }}" alt="facebook"></a></li>
                   <li><a href=""><img src="{{ theme::asset()->url('images/homepage/iconyt.png') }}" alt="youtube"></a></li>
                   <li><a href=""><img src="{{ theme::asset()->url('images/homepage/iconistar.png') }}" alt="instargram"></a></li>
               </ul>
           </div>
       </div>

       <div class="row end-home row-footer">
           <div class="col-md-2">

           </div>
           <div class="col-lg-8 coppy-right font-helve-light">
            © Copyright GAMAGROUP. All rights reserved. 
           </div>
           <div class="col-lg-2">
            <ul class="language-footer font-helve">
                <li class="lang lang-vi">
                    <a rel="alternate" hreflang="vi" href="{{ Language::getLocalizedURL('vi') }}">

                        <span>VN</span>
                    </a>
                </li>
                <li class="lang lang-en">
                    <a rel="alternate" hreflang="en" href="{{ Language::getLocalizedURL('en') }}">

                        <span>EN</span>
                    </a>
                </li>
            </ul>
           </div>
       </div>
   </div>
</footer>
{{-- <div id="back2top"><i class="fa fa-angle-up"></i></div> --}}

<!-- JS Library-->
{!! Theme::footer() !!}

@if (theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes' || (theme_option('facebook_chat_enabled', 'yes') == 'yes' && theme_option('facebook_page_id')))
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v7.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>



<script>
    $('.main-slider').owlCarousel({
    smartSpeed: 1000,
    loop: false,
    autoplay: false,
    dots: true,
    nav: true,
    navText: ["<div class='nav-btn prev-slide'><i class='fas fa-long-arrow-alt-left'></i></div>", "<div class='nav-btn next-slide'><i class='fas fa-long-arrow-alt-right'></i></div>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
</script>

    @if (theme_option('facebook_chat_enabled', 'yes') == 'yes' && theme_option('facebook_page_id'))
        <div class="fb-customerchat"
             attribution="install_email"
             page_id="{{ theme_option('facebook_page_id') }}"
             theme_color="{{ theme_option('primary_color', '#ff2b4a') }}">
        </div>
    @endif
@endif

</body>
</html>
