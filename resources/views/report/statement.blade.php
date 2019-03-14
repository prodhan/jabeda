@extends('layouts.print_master')
@section('main-content')

    <h2 align="center">{{config('constants.company_name')}}</h2>
    <h5 align="center">{{config('constants.company_address')}}</h5>
    <h4 align="center">Statement - Report From: {{\Illuminate\Support\Carbon::parse($from)->format('d-m-Y')}} To {{\Illuminate\Support\Carbon::parse($to)->format('d-m-Y')}}</h4>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="students">

            <thead>
            <tr>
                <th>SL</th>
                <th>Date</th>
                <th>Credit</th>
                <th>Debit</th>
                <th>Balance</th>


            </tr>
            </thead>

            <tbody>
            @php($totalcredit=0)
            @php($totaldebit=0)
            @php($totalbalance=0)
            @foreach ($dates as $date)
                <tr>

                    <td>{{$loop->index+1}}</td>
                    <td>{{ \Carbon\Carbon::parse($date)->format('d-m-Y') }} </td>
                    <td>{{ $credit=getcredit($date) }}</td>
                    <td>{{ $debit=getdebit($date) }}</td>
                    <td>@php($balance=$credit-$debit){{$balance}}</td>

                    @php($totalcredit=$totalcredit+$credit)
                    @php($totaldebit=$totaldebit+$debit)
                    @php($totalbalance=$totalbalance+$balance)

                </tr>
            @endforeach
            <tr>
                <td colspan="2" align="right">Total</td>
                <td>{{$totalcredit}}</td>
                <td>{{$totaldebit}}</td>
                <td>{{$totalbalance}}</td>
            </tr>
            </tbody>

        </table>
    </div>

@endsection