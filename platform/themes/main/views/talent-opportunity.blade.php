{!! Theme::breadcrumb()->render() !!}

<div class="all-news-content">
    <div class="container">
        <div class="about-section1">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="font-helve-bold font30">
                        {!! $page -> description !!}
                        
                    </h3>
                </div>
                <div class="col-lg-8">
                    <div class="desc font18 font-helve">
                       {!! $page -> content!!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
{{-- ------------------------banner talent-opportunity ----------------}}
    <div class="opportunity-s2">
        <img src="{{ Theme::asset()->url('images/talent/banner2.jpg') }}" alt="" class="img-slider">
    </div>