@if ($recruitment)
    <p>{{ trans('core/base::tables.name') }}: <i>{{ $recruitment->name }}</i></p>
    <p>{{ trans('plugins/contact::contact.tables.email') }}: <i><a href="mailto:{{ $recruitment->email }}">{{ $recruitment->email }}</a></i></p>
    <p>{{ trans('plugins/contact::contact.tables.phone') }}: <i>@if ($recruitment->phone) <a href="tel:{{ $recruitment->phone }}">{{ $recruitment->phone }}</a> @else N/A @endif</i></p>
    <p>{{ __('plugins/recruitment::recruitment.address') }}: <i>{{ $recruitment->address ? $recruitment->address : 'N/A' }}</i></p>
    <p>{{ __('plugins/recruitment::recruitment.cv') }}: {{ \Html::link(get_image_url($recruitment->cv), $recruitment->media->name ?? __('plugins/recruitment::recruitment.Tải xuống cv'), ['download' => $recruitment->media->name ?? "cv"]) }}</p>
    @if(!blank($recruitment->recruitmentPost))
    <p>{{ __('plugins/recruitment::recruitment.job') }}: {{ \Html::link(route('recruitment-post.edit', $recruitment->recruitmentPost->id), $recruitment->recruitmentPost->name) }}</p>
    @endif
@endif
