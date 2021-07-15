@if ($contact)
    <p>{{ trans('plugins/contact::contact.tables.full_name') }}: <i>{{ $contact->name }}</i></p>
    <p>{{ trans('plugins/contact::contact.tables.email') }}: <i><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></i></p>
    <p>{{ trans('plugins/contact::contact.tables.phone') }}: <i>@if ($contact->phone) <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a> @else N/A @endif</i></p>
    <p>{{ __('Địa chỉ') }}: <i>{{ $contact->address ? $contact->address : 'N/A' }}</i></p>
    <p>Tải cv đính kèm: <a href="{{get_image_url('cv/'.$contact->cv)}}">CV</a></p>
@endif
