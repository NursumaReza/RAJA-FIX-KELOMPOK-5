<div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
    {!! Form::label('nim', 'Nim', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nim', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tempat') ? 'has-error' : ''}}">
    {!! Form::label('tempat', 'Tempat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tempat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tempat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('waktu') ? 'has-error' : ''}}">
    {!! Form::label('waktu', 'Waktu', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('waktu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('waktu', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>