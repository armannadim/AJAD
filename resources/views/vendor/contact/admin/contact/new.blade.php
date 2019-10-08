<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('contact::contact.names') !!} [{!! trans('contact::contact.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#contact-contact-entry' data-href='{!!guard_url('contact/contact/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>