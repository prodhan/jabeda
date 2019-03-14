@extends('layouts.print_master')
@section('main-content')

    <h2 align="center">{{config('constants.company_name')}}</h2>
    <h5 align="center">{{config('constants.company_address')}}</h5>
    <h4 align="center">Ledger Type: {{$type}} - Report From: {{\Illuminate\Support\Carbon::parse($from)->format('d-m-Y')}} To {{\Illuminate\Support\Carbon::parse($to)->format('d-m-Y')}}</h4>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="students">

            <thead>
            <tr>
                <th>SL</th>
                <th>Date</th>
                <th>Purpose</th>
                <th>Description</th>
                <th>V. No</th>
                <th>Amount</th>


            </tr>
            </thead>

            <tbody>
            @php($total=0)
            @foreach ($data as $item)
                <tr>

                    <td>{{$loop->index+1}}</td>
                    <td>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }} </td>
                    <td>{{ $item->purpose->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->voucher_no }}</td>
                    <td>{{ $item->amount }}</td>
                    @php($total=$total+$item->amount)

                </tr>
            @endforeach
            <tr>
                <td colspan="5" align="right">Total Amount</td>
                <td>{{$total}}</td>
            </tr>
            </tbody>

        </table>
    </div>

@endsection