<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsModel;
use Auth;
use Session;


class ProductsController extends Controller

{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = ProductsModel::orderby('id', 'desc')->paginate(10);
        return view('products.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:100'

        ]);

        $data=ProductsModel::create($request->all());
        return redirect()->route('products.index')
            ->with('flash_message', 'Success');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=ProductsModel::findOrFail($id);
        return view('products.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=ProductsModel::findOrFail($id);
        return view('products.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);

        $product=ProductsModel::findOrFail($id);
        $product->name=$request->input('name');
        $product->details=$request->input('details');
        $product->save();

        return redirect()->route('products.show', $product->id)->with('flash_message', 'Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=ProductsModel::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('flash_message', 'Deleted');
    }
}
