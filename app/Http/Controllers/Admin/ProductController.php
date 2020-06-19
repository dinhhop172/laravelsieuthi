<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductBrand;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $productbrand = ProductBrand::all();
        return view('admin.products.index',
        [
            'products' => $product,
            'productbrands' => $productbrand
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }
    public function doUpload(Request $request)
    {
        //Kiểm tra file
        if ($request->file('image')) {
			// File này có thực, bắt đầu đổi tên và move
			// $fileExtension = $request->file('image')->getClientOriginalExtension(); // Lấy . của file

			// Filename cực shock để khỏi bị trùng
			// $fileName = time() . "" . rand(0,9999999) . "" . md5(rand(0,9999999)) . "." . $fileExtension;
            $fileName = $request->file('image')->getClientOriginalName();
			// Thư mục upload
            $uploadPath = public_path('/upload'); // Thư mục upload

			// Bắt đầu chuyển file vào thư mục
			$request->file('image')->move($uploadPath, $fileName);
        }
        return $fileName;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // $validator =  Validator::make($request->all(), [
        //     'name' => 'required|min:10|max:200',
        //     'price' => 'required'
        // ],
        // [
        //     'name.required' => 'Tên là bắt buộc',
        //     'name.min' => 'Tên tối thiểu là 10 ký tự',
        //     'name.max' => 'Tên tối đâ là 200 ký tự',
        //     'price.required' =>'Nhập giá vô'
        // ]);
        // if ($validator->fails()) {
        //     return redirect( 'products/create' )
        //     ->withErrors($validator)
        //     ->withInput();
        //     }

        $fileName = $this->doUpload($request);
        $data = $request->all();
        $data['image'] = "http://127.0.0.1:8000/upload/" . $fileName;
        $product = Product::create($data);
        if ($product) {
            return redirect()->route('products.index');
        }
        return redirect()->route('products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.show', array('product' => $product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', array('product' => $product));
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
        $product = Product::findOrFail($id);
        // $product->name = $request['name'];
        // $product->desc = $request['desc'];
        // $product->image = $request['img'];
        // $product->price = $request['price'];
        $product->update($request->all());
        if($product){
            return redirect()->route('products.index');
        }
        return redirect()->route('products.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
