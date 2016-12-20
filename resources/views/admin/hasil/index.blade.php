@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Hasil</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/hasil/create') }}" class="btn btn-primary btn-xs" title="Add New hasil"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nim </th><th> Nama </th><th> Judul Ta </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($hasil as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nim }}</td><td>{{ $item->nama }}</td><td>{{ $item->judul_ta }}</td>
                                        <td>
                                            <a href="{{ url('/admin/hasil/' . $item->id) }}" class="btn btn-success btn-xs" title="View hasil"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/hasil/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit hasil"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/hasil', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete hasil" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete hasil',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $hasil->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection