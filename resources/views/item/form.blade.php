<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('name', 'Item') !!}
            {!! Form::text('name', null, ['class' => 'form-control text-uppercase']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('location', 'Location') !!}
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('buffer_stock', 'Buffer Stock') !!}
            {!! Form::text('buffer_stock', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-fill', 'style' => 'margin-top: 24px;']) !!}
            &nbsp;
            {!! Form::reset('Reset', ['class' => 'btn btn-default btn-fill', 'style' => 'margin-top: 24px;']) !!}
        </div>
    </div>
</div>

