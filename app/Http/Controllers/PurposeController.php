<?php

namespace App\Http\Controllers;

use App\Purpose;
use Illuminate\Http\Request;


class PurposeController extends Controller
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
        $data=Purpose::all();
        return view('purpose.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purpose.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        try{
            $data=Purpose::create($input);
            $bug=0;
        }
        catch (\Exception $e){
            $bug=$e->errorInfo[1];
        }

        if($bug==0){
            return redirect('/purposes')->with('success', 'Credit/Debit Item has been added');
        }
        else{
            return redirect()->back()->with('error', 'Something Went Wrong!')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function show(Purpose $purpose)
    {
        return abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Purpose::findOrFail($id);
        return view('purpose.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Purpose::findOrFail($id);
        $input=$request->all();

        try{
            $data->update($input);
            $bug=0;
        }
        catch (Exception $e){
            $bug=1;
        }
        if($bug==0){
            return redirect('/purposes')->with('success', 'Item has been updated');
        }
        else{
            return redirect()->back()->with('error', 'Something Went Wrong!')->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Purpose::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('info', 'Item has been Deleted!');
    }
}
