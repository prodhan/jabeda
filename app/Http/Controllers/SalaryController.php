<?php

namespace App\Http\Controllers;

use App\Debit;
use App\Salary;
use App\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data=Salary::where('created_at', '>', Carbon::now()->subDays(90))->get();
        return view('salary.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data=Staff::findOrFail($id);
        return view('salary.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input['staff_id']=Input::get('staff_id');
        $date=Input::get('date');
        $input['month_name']=Input::get('month_name');
        $amount=Input::get('amount');
        $input['amount']=$amount;
        $input['comment']=Input::get('comment');
        $input['date']=$date;

        $name=Input::get('name');

        $month=date("F", mktime(0,0,0,  $input['month_name'], 1));

        $expense['purpose_id']=1;
        $expense['date']=$date;
        $expense['amount']=$amount;
        $expense['description']='Paid to '.$name.' For '.$month;
        $expense['user_id']=Auth::user()->id;


//        return $message;


        try{
            $data=Salary::create($input);
            $ex=Debit::create($expense);
            $bug=0;
        }
        catch (\Exception $e){
            $bug=$e->errorInfo[1];
        }

        if($bug==0){
                return redirect('/staffs')->with('success', $expense['description']);

        }
        else{
            return redirect()->back()->with('error', 'Something Went Wrong!')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        //
    }

    public function salary_by_staff($id)
    {
        $staff=Staff::findOrFail($id);
        $data=Salary::where('staff_id', '=', $id)->get();
        return view('salary.bystaff', compact('staff','data'));
    }
}
