
{!! Theme::breadcrumb()->render() !!}
<div class="content-achievement">
        <div class="container">
            <div class="section1-achievement padding80">
                <div class="row_wrap">
                    @if (has_field($page, 'title_achievement'))
                    <div class="content-md4 font-helve-bold font30 title-primary">
                        {!! get_field($page, 'title_achievement') !!}
                    </div>
                    @endif

                    @if (has_field($page, 'desc_achievement'))
                    <div class="content-md8 font-helve-light font18">
                        {!! get_field($page, 'desc_achievement') !!}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="banner-achievement">
            @if (has_field($page, 'banner_achievement'))
            <img src="{{ RvMedia::getImageUrl(get_field($page, 'banner_achievement')) }}" alt="construction">
             @endif
        </div>
        <div class="section2-achievement">
            <div class="container">
                <div class="row_wrap">
                    @if (has_field($page, 'achievement_item'))
                        @foreach (get_field($page, 'achievement_item') as $item)
                            <div class="col4">
                                <div class="achievement-item">
                                    <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'achievement_item_img')) }}" alt="{!! get_sub_field($item, 'achievement_item_desc') !!}">
                                    <div class="desc font-helve-light font18">
                                        {!! get_sub_field($item, 'achievement_item_desc') !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    
                </div>
            </div>
        </div>

        <div class="section4-about-achievement">
            <div class="container">
                <div class="row">
                    @if (has_field($page, 'achievement_company'))
                        @foreach (get_field($page, 'achievement_company') as $item)
                            <div class="col-md-4 item-coun pri-color" data-aos="fade-up" data-aos-duration="900"
                                data-aos-easing="ease-in-out">
                                <p class="title font-helve-bold font50">{{ get_sub_field($item, 'achievement_number') }}</p>
                                <p class="desc font-helve font18">{{ get_sub_field($item, 'achievement_text') }}</p>
                            </div>
                        @endforeach
        
                    @endif
                </div>
            </div>
        </div>

        <div class="about-detail-s5 community-achievement">
            <div class="container">
                <div class="top">
                    <div class="row_wrap">
                        <div class="content-md4" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                            <div class="font-helve-bold font30 pri-color title-primary">
                                @if (has_field($page, 'title_community_achievement'))
                                    {!! get_field($page, 'title_community_achievement') !!}
                                @endif
                            </div>
                        </div>
                        <div class="content-md8 font-helve-light font18 " data-aos="fade-left" data-aos-duration="700"
                            data-aos-easing="ease-in-out">
                            @if (has_field($page, 'desc_community_achievement'))
                                {!! get_field($page, 'desc_community_achievement') !!}
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

</div>