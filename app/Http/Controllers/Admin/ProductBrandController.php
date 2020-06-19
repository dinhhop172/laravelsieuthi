<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\ProductBrand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productbrand = ProductBrand::all();
        return view('admin.brands.index', array('productbrands' => $productbrand));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $productbrand = ProductBrand::create($request -> all());
        if($productbrand){
            return redirect()->route('productbrands.index');
        }
        return redirect()->route('productbrands.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productbrand = ProductBrand::find($id);
        return view('admin.brands.edit', ['productbrands' => $productbrand]);
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
        $productbrand = ProductBrand::findOrFail($id);
        // $productbrand->name = $request['name'];
        $productbrand->update($request->all());
        if($productbrand){
            return redirect()->route('productbrands.index');
        }
        return redirect()->route('productbrands.edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productbrand = ProductBrand::find($id);
        $productbrand->delete($id);
        return redirect()->route('productbrands.index');
    }
}
