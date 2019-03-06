
@extends('layouts.master')

@section('title', 'Edit Staff')

@section('content')

    <div class='col-lg-8 col-lg-offset-4'>

        <h2><i class='fa fa-user-plus'></i>Edit Staff
        <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a></h2>
        <hr>

        {!! Form::open(array('route'=> ['staffs.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('name', 'Name') }}</div>
            <div class="col-md-8"> {{ Form::text('name', $data->name, array('class' => 'form-control', 'required')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('designation', 'Designation') }}</div>
            <div class="col-md-8"> {{ Form::text('designation', $data->designation, array('class' => 'form-control', 'required')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('birthday', 'Date of Birth') }}</div>
            <div class="col-md-8"> {{ Form::date('birthday', $data->birthday, array('class' => 'form-control')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('sex', 'Gender') }}</div>
            <div class="col-md-8"> {{ Form::select('sex',[$data->sex=>$data->sex,'Male'=>'Male', 'Female'=>'Female'],null, ['class' => 'form-control',  'required']) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('religion', 'Religion') }}</div>
            <div class="col-md-8"> {{ Form::text('religion', $data->religion, array('class' => 'form-control')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('blood_group', 'Blood Group') }}</div>
            <div class="col-md-8"> {{ Form::select('blood_group',[
            $data->blood_group=>$data->blood_group,
            'A+'=>'A+',
            'A-'=>'A-',
            'B+'=>'B+',
            'B-'=>'B-',
            'O+'=>'O+',
            'O-'=>'O-',
            'AB+'=>'AB+',
            'AB-'=>'AB-',

            ],null, ['class' => 'form-control']) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('address', 'Address') }}</div>
            <div class="col-md-8"> {{ Form::textarea('address',$data->address , array('class' => 'form-control')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('phone', 'Mobile No') }}</div>
            <div class="col-md-8"> {{ Form::text('phone', $data->phone, array('class' => 'form-control',  'required')) }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('email', 'E-mail') }}</div>
            <div class="col-md-8"> {{ Form::email('email', $data->email, array('class' => 'form-control')) }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('joining_date', 'Joining Date') }}</div>
            <div class="col-md-8"> {{ Form::date('joining_date', $data->joining_date, array('class' => 'form-control',  'required')) }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('salary', 'Salary') }}</div>
            <div class="col-md-8"> {{ Form::number('salary', $data->salary, array('class' => 'form-control',  'required')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('nid', 'National ID') }}</div>
            <div class="col-md-8"> {{ Form::number('nid', $data->nid, array('class' => 'form-control')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('photo', 'Photo') }}</div>
            <div class="col-md-8"> {{ Form::file('photo') }}

                @if($errors->has('photo'))
                    <span class="help-block" style="display:block">
          <strong>{{ $errors->first('photo') }}</strong>
                   </span>
                @endif
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-4"><img src='{{url("upload/$data->photo")}}' alt=""></div>
            <div class="col-md-8">
                {{ Form::reset('Restore', array('class'=> 'btn btn-warning')) }}
                {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}</div>
        </div>



        {!! Form::close() !!}

    </div>

@endsection