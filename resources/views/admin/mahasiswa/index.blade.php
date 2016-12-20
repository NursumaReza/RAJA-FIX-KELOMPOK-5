@extends('layout')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mahasiswa</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/mahasiswa/create') }}" class="btn btn-primary btn-xs" title="Add New mahasiswa"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nim </th><th> Nama </th><th> Tempat Lahir </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nim }}</td><td>{{ $item->nama }}</td><td>{{ $item->tempat_lahir }}</td>
                                        <td>
                                            <a href="{{ url('/admin/mahasiswa/' . $item->id) }}" class="btn btn-success btn-xs" title="View mahasiswa"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/mahasiswa/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit mahasiswa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/mahasiswa', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete mahasiswa" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete mahasiswa',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $mahasiswa->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection