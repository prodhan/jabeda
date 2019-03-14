<?php

namespace App\Http\Controllers;

use App\Credit;
use App\Debit;
use App\Staff;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wcredit=Credit::where('date', '>', Carbon::now()->subDays(7))->sum('amount');
        $wdebit=Debit::where('date', '>', Carbon::now()->subDays(7))->sum('amount');

        $mcredit=Credit::where('date', '>', Carbon::now()->subDays(30))->sum('amount');
        $mdebit=Debit::where('date', '>', Carbon::now()->subDays(30))->sum('amount');

        $credit=Credit::sum('amount');
        $debit=Debit::sum('amount');

        $users=User::count('id');
        $staff=Staff::count('id');



        return view('dashboard.index', compact('wcredit', 'wdebit', 'mcredit', 'mdebit', 'credit', 'debit', 'users', 'staff'));
    }
}
