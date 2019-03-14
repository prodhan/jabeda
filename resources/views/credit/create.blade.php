@extends('layouts.master')

@section('title', 'Add Credit Item')

@section('content')

    <div class='col-lg-8 col-lg-offset-4'>

        <h2><i class='fa fa-calculator'></i> Add Credit Item
            <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a></h2>
        <hr>

        {!! Form::open(array('route'=> 'credits.store', 'class'=>'form-horizontal', 'files'=>true)) !!}


        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('date', 'Date *') }}</div>
            <div class="col-md-8"> {{ Form::date('date', \Carbon\Carbon::now()->toDateString(), array('class' => 'form-control', 'required')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('purpose_id', 'Purpose *') }}</div>
            <div class="col-md-8"> {{ Form::select('purpose_id', $purposes,null,  array('class' => 'form-control', 'required')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('description', 'Description') }}</div>
            <div class="col-md-8"> {{ Form::text('description', '', array('class' => 'form-control')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('voucher_no', 'Voucher no') }}</div>
            <div class="col-md-8"> {{ Form::text('voucher_no', '', array('class' => 'form-control')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('amount', 'Amount *') }}</div>
            <div class="col-md-8"> {{ Form::number('amount', '', array('class' => 'form-control', 'required')) }}</div>
        </div>




        <div class="row form-group">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                {{ Form::reset('Clear', array('class'=> 'btn btn-warning')) }}
                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}</div>
        </div>

        {!! Form::close() !!}

    </div>

@endsection