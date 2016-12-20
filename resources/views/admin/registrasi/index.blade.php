@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrasi</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/registrasi/create') }}" class="btn btn-primary btn-xs" title="Add New registrasi"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Perpustakaan </th><th> Spp </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registrasi as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->perpustakaan }}</td><td>{{ $item->spp }}</td>
                                        <td>
                                            <a href="{{ url('/admin/registrasi/' . $item->id) }}" class="btn btn-success btn-xs" title="View registrasi"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/registrasi/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit registrasi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/registrasi', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete registrasi" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete registrasi',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registrasi->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection