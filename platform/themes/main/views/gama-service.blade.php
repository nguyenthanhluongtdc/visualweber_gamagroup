<div class="breadcrumb-wrap">
    <ul class="breadcrumb-list container font-helve-light" itemscope itemtype="http://schema.org/BreadcrumbList">
       
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
                   <a href="{{ route('public.index') }}">{{__('Home')}}</a>
                    <span class="icon">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="bread-link">
                    <a href="{{ route('public.index') }}/{{ get_slug_business() }}">{{__('Business Areas')}}</a>
                     <span class="icon">
                         <i class="fas fa-angle-right"></i>
                     </span>
                 </li>
        
                <li class="active link-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    {{ $service->name }}
                </li>
       
    </ul>
</div>

<div class="gama-service-s1 padding80">
    <div class="container">
        <div class="row_wrap">
            <div class="content-md4 font-helve-bold font30 title-primary pri-color">
                
                {{ $service->name }}
            </div>
            @if (has_field($service, 'desc_top_service'))
            <div class="content-md8 font-helve-light font18">
                {!! get_field($service, 'desc_top_service') !!}
            </div>
            @endif
        </div>
    </div>
</div>
<div class="gama-service-banner">
    @if (has_field($service, 'banner_service_detail'))
        <img src="{{ RvMedia::getImageUrl(get_field($service, 'banner_service_detail'))}}" alt="banner">
    @endif
</div>
<div class="gama-service-s2 padding80">
    <div class="container">
        <div class="gama-service-s2-top">
            <div class="row_wrap">
                @if (has_field($service, 'title_section2_service_detail'))
                <div class="content-md4 font-helve-bold font30 title-primary pri-color">
                    {!! get_field($service, 'title_section2_service_detail') !!}
                </div>
                @endif

                @if (has_field($service, 'desc_section2_service_detail'))
                <div class="content-md8 font-helve-light font18">
                    {!! get_field($service, 'desc_section2_service_detail') !!}
                </div>
                @endif
            </div>
        </div>

        @if (has_field($service, 'list_service_items'))
        <div class="gama-service-s2-items" data-aos="fade-up" data-aos-duration="700" data-aos-easing="ease-in-out">
            <div class="row">
                @foreach (get_field($service, 'list_service_items') as $item)
                    <div class="col-md-4">
                        <div class="service-item">
                            <img src="{{ RvMedia::getImageUrl(get_sub_field($item, 'image_service_item'))}}" alt="{!! get_sub_field($item, 'title_service_item') !!}">
                            <h5 class="font-helve font18 pri-color"> {!! get_sub_field($item, 'title_service_item') !!}</h5>
                            <div class="desc font-helve-light font18">
                                {!! get_sub_field($item, 'desc_service_item') !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<div class="gama-service-s3 padding80">
    <div class="container">
        <div class="row_wrap">
            @if (has_field($service, 'title_service_3_service'))
            <div class="content-md4 font-helve-bold font30 title-primary pri-color" data-aos="fade-right" data-aos-duration="700" data-aos-easing="ease-in-out">
                {!! get_field($service, 'title_service_3_service') !!}
            </div>
            @endif
            @if (has_field($service, 'desc_section_3_service'))
            <div class="content-md8 font-helve-light font18" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-out">
                   <div class="content">
                    {!! get_field($service, 'desc_section_3_service') !!}
                       <a href="" class="font-helve font18">
                           {{ $service->name}}
                       </a>
                   </div>

            </div>
            @endif
        </div>
    </div>
</div>