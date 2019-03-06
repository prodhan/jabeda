
@extends('layouts.master')

@section('title', 'Staffs')

@section('content')

    <div class="col-lg-12 col-lg-offset-1">
        <h2><i class="fa fa-user-tie"></i> Staffs
            <a href="{{ route('staffs.create') }}" class="btn btn-success pull-right">Add Staff</a></h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="staffs">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($staffs as $staff)
                    <tr>

                        <td><a href="{{route('staffs.show', $staff->id)}}">{{ $staff->name }}</a> </td>
                        <td>{{ $staff->designation }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->phone}}</td>


                        <td>

                            <div class="dropdown show">
                                <a class="btn-sm btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Select Action
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                    <a class="dropdown-item" href="{{url('salary/create', [$staff->id])}}">Make Payment</a>
                                    <a class="dropdown-item" href="{{url('salary-by-staff', [$staff->id])}}">View Payments</a>
                                    <a class="dropdown-item" href="{{ url('staffs/id', $staff->id) }}">Print ID</a>
                                    <a class="dropdown-item" href="{{ route('staffs.edit', $staff->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['staffs.destroy', $staff->id] ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'dropdown-item']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>

                       {{--     <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li role="presentation"><a href="{{ route('staffs.edit', $staff->id) }}" role="menuitem" tabindex="-1">Edit</a></li>
                                    <li role="presentation">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['staffs.destroy', $staff->id] ]) !!}
                                        {!! Form::submit('Delete', ['role' => 'presentation']) !!}
                                        {!! Form::close() !!}

                                    </li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                                </ul>
                            </div>--}}

                            {{--<a href="{{ route('staffs.edit', $staff->id) }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">Pay</a>--}}



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
            $('#staffs').DataTable();
        } );



    </script>


@endsection