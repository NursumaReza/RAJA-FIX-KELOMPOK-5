<div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
    {!! Form::label('nim', 'Nim', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nim', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dosen_pembimbing') ? 'has-error' : ''}}">
    {!! Form::label('dosen_pembimbing', 'Dosen Pembimbing', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dosen_pembimbing', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dosen_pembimbing', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>