<div class="form-group {{ $errors->has('perpustakaan') ? 'has-error' : ''}}">
    {!! Form::label('perpustakaan', 'Perpustakaan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('perpustakaan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('perpustakaan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('spp') ? 'has-error' : ''}}">
    {!! Form::label('spp', 'Spp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('spp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('spp', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>