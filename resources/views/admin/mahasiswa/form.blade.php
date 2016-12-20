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
<div class="form-group {{ $errors->has('angkatan') ? 'has-error' : ''}}">
    {!! Form::label('angkatan', 'Angkatan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('angkatan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('angkatan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dosen_pembimbing') ? 'has-error' : ''}}">
    {!! Form::label('dosen_pembimbing', 'Dosen Pembimbing', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dosen_pembimbing', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dosen_pembimbing', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('judul_ta') ? 'has-error' : ''}}">
    {!! Form::label('judul_ta', 'Judul Ta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('judul_ta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('judul_ta', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nilai_id') ? 'has-error' : ''}}">
    {!! Form::label('nilai_id', 'Nilai Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('nilai_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nilai_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('proposal_id') ? 'has-error' : ''}}">
    {!! Form::label('proposal_id', 'Proposal Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('proposal_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('proposal_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('hasil_id') ? 'has-error' : ''}}">
    {!! Form::label('hasil_id', 'Hasil Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('hasil_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hasil_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ujian_id') ? 'has-error' : ''}}">
    {!! Form::label('ujian_id', 'Ujian Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('ujian_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ujian_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>