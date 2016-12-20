@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dosenpembimbing</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/dosenpembimbing/create') }}" class="btn btn-primary btn-xs" title="Add New dosenpembimbing"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nip </th><th> Nama </th><th> Tempat Lahir </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dosenpembimbing as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nip }}</td><td>{{ $item->nama }}</td><td>{{ $item->tempat_lahir }}</td>
                                        <td>
                                            <a href="{{ url('/admin/dosenpembimbing/' . $item->id) }}" class="btn btn-success btn-xs" title="View dosenpembimbing"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/dosenpembimbing/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dosenpembimbing"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/dosenpembimbing', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete dosenpembimbing" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete dosenpembimbing',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $dosenpembimbing->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection