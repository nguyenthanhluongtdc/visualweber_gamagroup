
{!! Theme::breadcrumb()->render() !!}
<div class="container padding80" style="min-height: 50vh">
    <div class="title font30 title-primary pri-color font-helve-bold">
        {!! $page->name !!}
    </div>
    <div class="font18 font-helve" style="padding-top: 40px">
        {!! $page->description !!}
    </div>
    <div class="font18 font-helve-light" style="padding-top: 20px">

        {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content, 'youtube'), $page) !!}
    </div>
</div>

