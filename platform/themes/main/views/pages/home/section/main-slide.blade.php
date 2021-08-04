<div class="main-slider slider-home owl-carousel">
   
   @if (!empty(get_featured_posts(5)))
       @foreach (get_featured_posts(5) as $item)
        <div class="slider-item">
            <img src="{{ RvMedia::getImageUrl($item->image) }}" alt="{{ $item->name}}" class="img-slider">
            <div class="fade"></div>
            <div class="content">
                <h2 class="font-helve-bold font30">
                    {{ $item->name}}
                </h2>
                <a href="{{ $item->url }}" class="font-helve font17">Xem tiếp</a>
            </div>
        </div>
       @endforeach
   @endif
    {{-- <div class="slider-item">
        <img src="{{ Theme::asset()->url('images/homepage/slider.jpg') }}" alt="" class="img-slider">
        <div class="fade"></div>
        <div class="content">
            <h2 class="font-helve-bold font30">
                GamaGroup tài trợ đề án xây dựng Đà Nẵng <br>
                trở thành Trung tâm Tài chính quy mô khu vực.
            </h2>
            <a href="" class="font-helve font17">Xem tiếp</a>
        </div>
    </div>
    <div class="slider-item">
        <img src="{{ Theme::asset()->url('images/homepage/slider.jpg') }}" alt="" class="img-slider">
        <div class="fade"></div>
        <div class="content">
            <h2 class="font-helve-bold font30">
                GamaGroup tài trợ đề án xây dựng Đà Nẵng <br>
                trở thành Trung tâm Tài chính quy mô khu vực.
            </h2>
            <a href="" class="font-helve font17">Xem tiếp</a>
        </div>
    </div>
    <div class="slider-item">
        <img src="{{ Theme::asset()->url('images/homepage/slider.jpg') }}" alt="" class="img-slider">
        <div class="fade"></div>
        <div class="content">
            <h2 class="font-helve-bold font30">
                GamaGroup tài trợ đề án xây dựng Đà Nẵng <br>
                trở thành Trung tâm Tài chính quy mô khu vực.
            </h2>
            <a href="" class="font-helve font17">Xem tiếp</a>
        </div>
    </div> --}}
</div>
