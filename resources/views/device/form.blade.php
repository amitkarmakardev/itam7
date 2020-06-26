{!! Form::hidden('type', $type) !!}
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('asset_id', 'Asset ID') !!}
            {!! Form::text('asset_id', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('subtype', 'Type') !!}
            {!! Form::select('subtype', $config->getValue($type.'_type'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('model', 'Model') !!}
            {!! Form::select('model', $config->getValue($type.'_model'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('serial_no', 'Serial No') !!}
            {!! Form::text('serial_no', null, ['class' => 'form-control text-uppercase']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('ip', 'IP') !!}
            {!! Form::text('ip', null, ['class' => 'form-control ip']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('location', 'Location') !!}
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('os', 'OS') !!}
            {!! Form::select('os', $config->getValue($type.'_os'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('product_key', 'Product Key') !!}
            {!! Form::text('product_key', null, ['class' => 'form-control']) !!}
        </div>
    </div>
   
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('owner', 'Tagged To') !!}
            {!! Form::text('owner', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('phone_no', 'Phone no') !!}
            {!! Form::text('phone_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('maintenance_status', 'Maintenance Status') !!}
            {!! Form::select('maintenance_status', ['Not in Maintenance' => 'Not in Maintenance','In Warranty' => 'In Warranty','In AMC' => 'In AMC'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('status', 'Status') !!}
            {!! Form::select('status', $config->getValue('device_deployment_status'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('comment', 'Comment') !!}
            {!! Form::text('comment', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-group" style="text-align: right">
    <div class="col-md-2"></div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-fill']) !!}
    {!! Form::reset('Reset', ['class' => 'btn btn-default btn-fill']) !!}
</div>
