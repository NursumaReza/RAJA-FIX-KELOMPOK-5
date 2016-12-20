@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">pengumuman {{ $pengumuman->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/pengumuman/' . $pengumuman->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pengumuman"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pengumuman', $pengumuman->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete pengumuman',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pengumuman->id }}</td>
                                    </tr>
                                    <tr><th> Nim </th><td> {{ $pengumuman->nim }} </td></tr><tr><th> Nama </th><td> {{ $pengumuman->nama }} </td></tr><tr><th> Tempat </th><td> {{ $pengumuman->tempat }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection