<div class="form-group {{ $errors->has('nip') ? 'has-error' : ''}}">
    {!! Form::label('nip', 'Nip', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tanggal_lahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : ''}}">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenis_kelamin', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telpon') ? 'has-error' : ''}}">
    {!! Form::label('telpon', 'Telpon', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telpon', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telpon', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kahlian') ? 'has-error' : ''}}">
    {!! Form::label('kahlian', 'Kahlian', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kahlian', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kahlian', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('mahasiswa_id') ? 'has-error' : ''}}">
    {!! Form::label('mahasiswa_id', 'Mahasiswa Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('mahasiswa_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mahasiswa_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nilai_id') ? 'has-error' : ''}}">
    {!! Form::label('nilai_id', 'Nilai Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('nilai_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nilai_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>