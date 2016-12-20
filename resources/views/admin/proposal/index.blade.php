@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Proposal</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/proposal/create') }}" class="btn btn-primary btn-xs" title="Add New proposal"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
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
                                @foreach($proposal as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nim }}</td><td>{{ $item->nama }}</td><td>{{ $item->judul_ta }}</td>
                                        <td>
                                            <a href="{{ url('/admin/proposal/' . $item->id) }}" class="btn btn-success btn-xs" title="View proposal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/proposal/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit proposal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/proposal', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete proposal" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete proposal',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $proposal->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection