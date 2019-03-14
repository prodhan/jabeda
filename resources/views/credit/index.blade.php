@extends('layouts.master')

@section('title', 'Credits')

@section('content')

    <div class="col-lg-12 col-lg-offset-1">
        <h2><i class="fa fa-book"></i> Credit Items of last 30 days
            <a href="{{ route('credits.create') }}" class="btn btn-success pull-right">Add Credit</a></h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="class">

                <thead>
                <tr>
                    <th>Date</th>
                    <th>Purpose</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($data as $item)
                    <tr>

                        <td>{{$item->date}}</td>
                        <td>{{ $item->purpose->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->amount }}</td>


                        <td>
                            <a href="{{ route('credits.edit', $item->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['credits.destroy', $item->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn-sm btn-danger pull-left']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>




    </div>

@endsection
@section('custom-js')
    <script>
        $(document).ready(function() {
            $('#class').DataTable();
        } );



    </script>


@endsection