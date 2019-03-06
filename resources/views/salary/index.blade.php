@extends('layouts.master')

@section('title', 'Salary')

@section('bar', 'Salary Sheet')

@section('content')

    <div class="col-lg-12 col-lg-offset-1">
        <h2><i class="fa fa-calculator"></i> Salary Sheet</h2>

        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="class">

                <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Amount</th>
                    <th>Comment</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($data as $item)
                    <tr>

                        <td>{{ $item->date }}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ date("F", mktime(0,0,0, $item->month_name,1)) }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->comment }}</td>
{{--                        <td>{{ $item->user->name }}</td>--}}

                        <td>
{{--                            <a href="{{ route('salary.edit', $item->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">Edit</a>--}}

                            {!! Form::open(['method' => 'DELETE', 'route' => ['salary.destroy', $item->id] ]) !!}
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