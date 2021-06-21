<footer class="page-footer bg-dark pt-50">
   
</footer>
<div id="back2top"><i class="fa fa-angle-up"></i></div>

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
