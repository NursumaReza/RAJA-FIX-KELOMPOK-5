@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">dosenpembimbing {{ $dosenpembimbing->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/dosenpembimbing/' . $dosenpembimbing->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dosenpembimbing"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/dosenpembimbing', $dosenpembimbing->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete dosenpembimbing',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dosenpembimbing->id }}</td>
                                    </tr>
                                    <tr><th> Nip </th><td> {{ $dosenpembimbing->nip }} </td></tr><tr><th> Nama </th><td> {{ $dosenpembimbing->nama }} </td></tr><tr><th> Tempat Lahir </th><td> {{ $dosenpembimbing->tempat_lahir }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection