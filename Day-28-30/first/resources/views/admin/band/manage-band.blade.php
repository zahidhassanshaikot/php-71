@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class=" panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="message">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SL no</th>
                            <th>Band Name</th>
                            <th>Band description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($bands as $band)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $band-> band_name}}</td>
                                <td>{{ $band-> band_description}}</td>
                                <td>{{ $band-> publication_status==1 ? 'Published':'Unpublished'}}</td>

                                <td>
                                    @if($band-> publication_status==1)
                                        <a href="{{ route('unpublished-band',['id'=>$band->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-band',['id'=>$band->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-band',['id'=>$band->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-band',['id'=>$band->id]) }}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>

            </div>
        </div>
    </div>

@endsection