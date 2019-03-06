@extends('layouts.master')

@section('title', 'Make Salary')

@section('content')

    <div class='col-lg-8 col-lg-offset-4'>

        <h2><i class='fa fa-calculator'></i> Make Salary for {{$data->name}}
            <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a></h2>
        <hr>

        {!! Form::open(array('route'=> 'salary.store', 'class'=>'form-horizontal', 'files'=>true)) !!}


        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('name', 'Name') }}</div>
            <div class="col-md-8">{{ Form::text('name', $data->name,  array('class' => 'form-control', 'readonly')) }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('designation', 'Designation') }}</div>
            <div class="col-md-8">{{ Form::text('designation', $data->designation,  array('class' => 'form-control', 'readonly')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('date', 'Date') }}</div>
            <div class="col-md-8"> {{ Form::date('date', now(), array('class' => 'form-control', 'required')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('month_name', 'Select Month') }}</div>
            <div class="col-md-8"> {!! Form::selectMonth('month_name', null, array('class'=>'form-control', 'required')) !!}</div>
        </div>


        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('amount', 'Amount') }}</div>
            <div class="col-md-8"> {{ Form::number('amount', '', array('class' => 'form-control', 'placeholder'=>'Base salary '.$data->salary ,'required')) }}</div>
        </div>


        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('comment', 'Comment [if need]') }}</div>
            <div class="col-md-8"> {{ Form::text('comment', '', array('class' => 'form-control')) }}</div>
        </div>


        {{ Form::hidden('staff_id', $data->id) }}


        <div class="row form-group">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                {{ Form::reset('Clear', array('class'=> 'btn btn-warning')) }}
                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}</div>
        </div>

        {!! Form::close() !!}

    </div>

@endsection