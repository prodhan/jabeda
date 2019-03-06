{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.master')

@section('title', $data->name.'\'s Profile')

@section('content')


    <div class='col-lg-8'>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-two">
                        <header>
                            <div class="avatar">
                                <img src='{{asset("uploads/$data->photo")}}' alt="{{$data->name}}" />
                            </div>
                        </header>

                        <h3>{{strtoupper($data->name)}}</h3>
                        <div class="desc">
                            {{strtoupper($data->designation)}}
                        </div>

                        <div class="contacts">
                            <a href="{{route('staffs.edit', $data->id) }}" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="callto:{{$data->phone}}"><i class="fa fa-phone"></i></a>
                            <a href="mailto:{{$data->email}}"><i class="fa fa-envelope"></i></a>
                            <div class="clear"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row form-group">
            <div class="col-md-4">Name</div>
            <div class="col-md-8"> {{ $data->name }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">Designation</div>
            <div class="col-md-8"> {{  $data->designation }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">Date of Birth</div>
            <div class="col-md-8"> {{$data->birthday }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">Gender</div>
            <div class="col-md-8"> {{ $data->sex }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">Religion</div>
            <div class="col-md-8"> {{ $data->religion}}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">Blood Group</div>
            <div class="col-md-8"> {{$data->blood_group }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">Address</div>
            <div class="col-md-8"> {{$data->address }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">Mobile No</div>
            <div class="col-md-8"> {{$data->phone }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">E-mail</div>
            <div class="col-md-8">{{ $data->email }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">Joining Date</div>
            <div class="col-md-8">{{  $data->joining_date }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">Salary</div>
            <div class="col-md-8">{{  $data->salary }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">National ID</div>
            <div class="col-md-8"> {{  $data->nid }}</div>
        </div>





    </div>

@endsection