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
<div class="form-group {{ $errors->has('judul_ta') ? 'has-error' : ''}}">
    {!! Form::label('judul_ta', 'Judul Ta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('judul_ta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('judul_ta', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('prodi') ? 'has-error' : ''}}">
    {!! Form::label('prodi', 'Prodi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prodi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prodi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('waktu') ? 'has-error' : ''}}">
    {!! Form::label('waktu', 'Waktu', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('waktu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('waktu', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('seminar') ? 'has-error' : ''}}">
    {!! Form::label('seminar', 'Seminar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('seminar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('seminar', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dosen_pembimbing') ? 'has-error' : ''}}">
    {!! Form::label('dosen_pembimbing', 'Dosen Pembimbing', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dosen_pembimbing', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dosen_pembimbing', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('penyanggah') ? 'has-error' : ''}}">
    {!! Form::label('penyanggah', 'Penyanggah', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('penyanggah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('penyanggah', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tempat') ? 'has-error' : ''}}">
    {!! Form::label('tempat', 'Tempat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tempat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tempat', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>