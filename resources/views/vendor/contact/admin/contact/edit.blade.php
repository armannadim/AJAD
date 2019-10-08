    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#contact" data-toggle="tab">{!! trans('contact::contact.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#contact-contact-edit'  data-load-to='#contact-contact-entry' data-datatable='#contact-contact-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#contact-contact-entry' data-href='{{guard_url('contact/contact')}}/{{$contact->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('contact-contact-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('contact/contact/'. $contact->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="contact">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('contact::contact.name') !!} [{!!$contact->name!!}] </div>
                @include('contact::admin.contact.partial.entry')
            </div>
        </div>
        {!!Form::close()!!}
    </div>