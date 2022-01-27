<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Version;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = 1;
        $products = Product::all();
        return view('home',compact('products','index'));
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
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'key' => 'required',
            'value' => 'required'
        ]);
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'key' => $request->key,
            'value'=>[
                'size' => $request->value['size'],
                'color' => $request->value['color'],
            ],
        ];
        Product::create($data);
       return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return  view('products.view',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $products = Product::find($id);
       return view('products.update',compact('products'));
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
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'key' => 'required',
            'value' => 'required'
        ]);
        $products = Product::find($id);
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'key' => $request->key,
            'value'=>[
                'size' => $request->value['size'],
                'color' => $request->value['color'],
            ],
        ];
        $products->update($data);
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back();
    }
}
