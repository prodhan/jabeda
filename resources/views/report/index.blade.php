@extends('layouts.master')

@section('title', 'Reports')

@section('content')

    <div class="col-lg-12 col-lg-offset-1">
        <h2><i class="fa fa-bar-chart"></i> Reports
            </h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Type</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Option</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tr>
                    {!! Form::open(array('url'=> 'debit-report', 'class'=>'form-horizontal', 'method'=>'post', 'target'=>'_blank')) !!}
                    <td>Debit</td>
                    <td>{{Form::date('from', \Carbon\Carbon::now()->subDay(30), array('class'=>'form-control'))}}</td>
                    <td>{{Form::date('to', \Carbon\Carbon::now()->toDateString(), array('class'=>'form-control'))}}</td>
                    <td>{{Form::select('type', $debitPurpose,null, array('placeholder' => 'ALL Purpose','class'=>'form-control'))}}</td>
                    <td>{{ Form::submit('Print', array('class' => 'btn btn-primary')) }}</td>
                    {!! Form::close() !!}
                </tr>

                <tr>
                    {!! Form::open(array('url'=> 'credit-report', 'class'=>'form-horizontal', 'method'=>'post', 'target'=>'_blank')) !!}
                    <td>Credit</td>
                    <td>{{Form::date('from', \Carbon\Carbon::now()->subDay(30), array('class'=>'form-control'))}}</td>
                    <td>{{Form::date('to', \Carbon\Carbon::now()->toDateString(), array('class'=>'form-control'))}}</td>
                    <td>{{Form::select('type', $creditPurpose,null, array('placeholder' => 'ALL Purpose','class'=>'form-control'))}}</td>
                    <td>{{ Form::submit('Print', array('class' => 'btn btn-primary')) }}</td>
                    {!! Form::close() !!}
                </tr>

                <tr>
                    {!! Form::open(array('url'=> 'statement-report', 'class'=>'form-horizontal', 'method'=>'post', 'target'=>'_blank')) !!}
                    <td>Credit</td>
                    <td>{{Form::date('from', \Carbon\Carbon::now()->subDay(30), array('class'=>'form-control'))}}</td>
                    <td>{{Form::date('to', \Carbon\Carbon::now()->toDateString(), array('class'=>'form-control'))}}</td>
                    <td> N/A </td>
                    <td>{{ Form::submit('Print', array('class' => 'btn btn-primary')) }}</td>
                    {!! Form::close() !!}
                </tr>

                <tbody>

                </tbody>

            </table>
        </div>




    </div>

@endsection
