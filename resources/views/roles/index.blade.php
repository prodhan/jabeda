{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.master')

@section('title', '| Roles')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-key"></i> Roles

            <a href="{{ URL::to('roles/create') }}" class="btn btn-success pull-right">Add Role</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->name }}</td>

                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td>
                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn-sm btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
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