{!! Theme::breadcrumb()->render() !!}
<div class="admin-section1">
    <div class="container">
        <div class="admin-desc">
            <div class="row_wrap">
                <div class="content-md4 font-helve-bold font30 title-primary pri-color">
                    @if (has_field($page, 'title_admin'))
                            {!! get_field($page, 'title_admin') !!}
                    @endif
                </div>
                <div class="content-md8">
                    @if (has_field($page, 'desc_admin'))
                        <div class="desc font-helve-light font18">
                            {!! get_field($page, 'desc_admin') !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="admin-content">
            <div class="row">
                @if (has_field($page, 'admin_list'))
                    @foreach (get_field($page, 'admin_list') as $item)
                        <div class="col-md-3 admin-item">
                           
                                <a href="{{ RvMedia::getImageUrl(get_sub_field($item, 'admin_image_item')) }}" data-fancybox="hdqt">
                                    <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'admin_image_item')) }}" >
                                </a>
                                <h5 class="name font-helve font18">
                                    {!! get_sub_field($item, 'name_admin_item') !!}
                                </h5>
                                <div class="desc font-helve-light">
                                    {!! get_sub_field($item, 'desc_admin_item') !!}
                                </div>
                          
                        </div>
                    @endforeach

                @endif

            </div>
        </div>
    </div>
</div>

<div class="admin-section2 about-detail-s5 padding80">
    <div class="container">
        <div class="top">
            <div class="row_wrap">
                <div class="content-md4" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                    <div class="font-helve-bold font30 title-primary pri-color">
                        @if (has_field($page, 'title_community'))
                            {!! get_field($page, 'title_community') !!}
                        @endif
                    </div>
                </div>
                <div class="content-md8 font-helve-light font18" data-aos="fade-left" data-aos-duration="700"
                    data-aos-easing="ease-in-out">
                    @if (has_field($page, 'desc_community'))
                        {!! get_field($page, 'desc_community') !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="about-detail-s5-slider owl-carousel" data-aos="fade-up" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            @php $category = get_category_default(); 
            
            $listPost = get_posts_by_category_order($category[0]->id , 12 , 12, ['posts.created_at' => 'desc']);
            @endphp
            
            @if (!empty( $listPost))
                    @foreach ($listPost as $item)
                    <div class="item">
                        <a href="{{ $item->url }}">
                            <div class="img"> <img src="{{ RvMedia::getImageUrl($item->image) }}" alt="{{ $item->name }}"></div>
                        </a>
                        <h5 class="font-helve font20"><a href="{{ $item->url }}">{{ $item->name }}</a></h5>
                    </div>
                    @endforeach
            @endif
            
        </div>
        <div class="views font-helve font18">
            <a href="{{ get_slug_posts() }}" class="primary-a"> {{ trans('See more') }}</a>
        </div>
    </div>
</div>
