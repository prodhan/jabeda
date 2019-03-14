<?php

namespace App\Http\Controllers;

use App\Credit;
use App\Debit;
use App\Purpose;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $debitPurpose=Purpose::where('type', '=', 'Dr')->pluck('name', 'id');
        $creditPurpose=Purpose::where('type', '=', 'Cr')->pluck('name', 'id');

        return view('report.index', compact('debitPurpose', 'creditPurpose'));
    }

    public function debit(Request $request)
    {

        $from=$request->input('from');
        $to=$request->input('to');
        $type="Debit";
        $purpose=$request->input('type');

        if($purpose==null)
            $data=Debit::whereBetween('date', [$from, $to])->get();
        else
            $data=Debit::whereBetween('date', [$from, $to])->where('purpose_id', $purpose)->get();
        return view('report.debits', compact('data', 'from', 'to', 'type', 'config'));

    }
    public function credit(Request $request)
    {

        $from=$request->input('from');
        $to=$request->input('to');
        $type="Credit";
        $purpose=$request->input('type');

        if($purpose==null)
            $data=Credit::whereBetween('date', [$from, $to])->get();
        else
            $data=Credit::whereBetween('date', [$from, $to])->where('purpose_id', $purpose)->get();
        return view('report.debits', compact('data', 'from', 'to', 'type', 'config'));

    }

    public function statement(Request $request)
    {

        $from=$request->input('from');
        $to=$request->input('to');
        $dates=CarbonPeriod::create($from, $to);


        return view('report.statement', compact('dates', 'from', 'to', 'type', 'config'));

    }
}
