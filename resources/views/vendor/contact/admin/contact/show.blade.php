    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('contact::contact.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#contact-contact-entry' data-href='{{guard_url('contact/contact/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($contact->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#contact-contact-entry' data-href='{{ guard_url('contact/contact') }}/{{$contact->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#contact-contact-entry' data-datatable='#contact-contact-list' data-href='{{ guard_url('contact/contact') }}/{{$contact->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('contact-contact-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('contact/contact'))!!}
            <div class="tab-content clearfix">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('contact::contact.name') !!}  [{!! $contact->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('contact::admin.contact.partial.entry')
                </div>
            </div>
        {!! Form::close() !!}
    </div>