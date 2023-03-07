<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.productTable', ['product' => Products::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.productCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Products::create($input);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //$product = Products::find($id);
        return view('admin.productEdit', ['product' => Products::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //dd($request);
         $product = Products::find($id);
         $input = $request->all();
         $product->update($input);
         return redirect('/admin');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Products::destroy($id);
        return redirect('/admin');
    }
}
