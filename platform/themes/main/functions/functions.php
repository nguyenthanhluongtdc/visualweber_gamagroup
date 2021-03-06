<?php

register_page_template([
    'no-sidebar' => __('No sidebar'),
    'default' => 'Default',
    'about' => 'About',
    'news-gama' => 'NEWS GAMA',
    'about-detail' => 'About-detail',
    'posts' => "Posts",
    'talent' => "Talent",
    'talent-detail' => "Talent-detail",
    'talent-opportunity' => "talent-opportunity",
    'partner' => "Partner",
    'partner-detail' => "Partner-detail",
    'oriented-development' => "Development",
    'admin-council' => "Admin-Council",
    'development-history' => "Development History",
    'achievement' => "Achievement",
    'business-areas' => "Business-Areas",
    'gama-service' => "Gama Service",
    'leading-way'=>"Leading Way",
    'respect-version'=>'Respect-version',
    'professional-environment'=>'Professional-environment',
    'contact' => "Contact",

]);

register_sidebar([
    'id'          => 'top_sidebar',
    'name'        => __('Top sidebar'),
    'description' => __('Area for widgets on the top sidebar'),
]);

register_sidebar([
    'id'          => 'footer_sidebar',
    'name'        => __('Footer sidebar'),
    'description' => __('Area for footer widgets'),
]);
register_sidebar([
    'id'          => 'footer_mid_category',
    'name'        => __('Footer Mid category'),
    'description' => __('Area for footer widgets'),
]);

RvMedia::setUploadPathAndURLToPublic();
RvMedia::addSize('featured', 565, 375)
    ->addSize('medium', 540, 360)
    // ->addSize('news_thumbnail_listing', 360, 240) // suy nghi ky nha em, vi no tao ra nhieu thumb se nang may chu lam. nhung tot cho SEO neu size chuan
    ->addSize('news_thumbnail', 365, 250);


theme_option()
->setSection([ // Set section with no field
    'title' => __('Link '),
    'desc' => __('Giới thiệu về chúng tôi'),
    'id' => 'opt-text-subsection-aboutus',
    'subsection' => true,
    'icon' => 'fa fa-building',
]);
