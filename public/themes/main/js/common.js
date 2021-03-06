const app = {
    initJs: function () {
        $(".main-slider").owlCarousel({
            smartSpeed: 1000,
            loop: true,
            autoplay: false,
            dots: false,
            margin: 0,
            nav: true,

            navText: [
                "<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>",
                "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>",
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });

        $(".open-menu-mobie").click(function () {
            $(".list-menu-mobie").toggle("slow");
            $(".list-menu-mobie li").show(400);
        });

        $(".list-admin-slider").owlCarousel({
            smartSpeed: 1000,
            loop: true,
            autoplay: false,
            dots: false,
            margin: 45,
            nav: true,
            navText: [
                "<div class='nav-btn prev-slide'><i class='fas fa-chevron-left'></i></div>",
                "<div class='nav-btn next-slide'><i class='fas fa-chevron-right'></i></div>",
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });

        $(".about-detail-s5-slider").owlCarousel({
            smartSpeed: 1000,
            loop: true,
            autoplay: false,
            dots: false,
            margin: 45,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });

        $(".post-relate-carousel").owlCarousel({
            smartSpeed: 1000,
            loop: true,
            autoplay: false,
            dots: false,
            margin: 45,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });

        // number count for stats, using jQuery animate

        $.fn.digits = function () {
            return this.each(function () {
                $(this).text(
                    $(this)
                        .text()
                        .replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")
                );
            });
        };
        $(".counter-number").digits();

        $(".counting").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-count");

            $({ countNum: $this.text() }).animate(
                {
                    countNum: countTo,
                },

                {
                    duration: 3000,
                    easing: "linear",
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    },
                }
            );
        });

        $("#select-contact").on("change", function (e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            var contact = $('select[id="select-contact"] :selected').attr(
                "class"
            );
            for (let i = 1; i < 100; i++) {
                if (contact == "contact" + i) {
                    $(".contact")
                        .hide()
                        .filter("." + "contact-show" + i)
                        .show();
                }
            }
        });

        $(".open-search").click(function () {
            $(".search-deskop").show();
        });
        $(".closer-search").click(function () {
            $(".search-deskop").hide(300);
        });

        $(".search-btn-mobie").click(function () {
            $(".search-mobie-wrap").show(200);
        });
        $(".close-search").click(function () {
            $(".search-mobie-wrap").hide();
        });

        $("#posts-form select").on("change", function () {
            $(this).closest("form").submit();
        });

        $("#recruitment-form select").on("change", function () {
            $(this).closest("form").submit();
        });

        $(".dropdown").dropdown({
            action: "combo",
        });

        $(".js-example-disabled-results").select2({
            minimumResultsForSearch: Infinity,
        });

        $(".view-posts-mobie").click(function () {
            $(".posts-form-fiter").toggle(300);
        });
    },
};

$(document).ready(function () {
    AOS.init();
    app.initJs();
});
