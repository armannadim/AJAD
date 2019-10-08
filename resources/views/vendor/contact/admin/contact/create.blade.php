    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Contact</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#contact-contact-create'  data-load-to='#contact-contact-entry' data-datatable='#contact-contact-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#contact-contact-entry' data-href='{{guard_url('contact/contact/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('contact-contact-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('contact/contact'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('contact::contact.name') !!}] </div>
                @include('contact::admin.contact.partial.entry')
            </div>
            {!! Form::close() !!}
        </div>
    </div>