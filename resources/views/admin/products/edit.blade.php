{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.update', $product->id)}}" method="post">
        @csrf
        @method('PUT')
        Name: <br><input type="text" name="name" value="{{ $product->name }}"><br>
        Price: <br><input type="text" name="price" value="{{ $product->price }}"><br>
        Description: <br><textarea name="desc" id="" cols="30" rows="5">{{ $product->desc }}</textarea><br>
        Image: <br><textarea name="img" id="" cols="30" rows="3">{{ $product->image }}</textarea><br>
        <input type="submit" name="sm" value="Update">
    </form>
</body>
</html> --}}

<div class="modal fade" id="editproduct{{$product->id}}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit brand</h5>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.name') }}</label>
                        <div class="">
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.desc') }}</label>
                        <div class="">
                            {{-- <input type="text" name="desc" class="form-control" value="{{ $product->desc }}"> --}}
                            <textarea class="form-control" rows="5" >{{ $product->desc }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.image') }}</label>
                        <div class="">
                            <input type="text" name="image" class="form-control" value="{{ $product->image }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.price') }}</label>
                        <div class="">
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.product_brand_id') }}</label>
                        {{-- <div class="">
                            <input type="text" name="mail" class="form-control" value="{{ $product->mail }}">
                        </div> --}}
                        <select name="product_brand_id" id="" class="form-d">
                            @foreach ($productbrands as $productbrand)
                            <option value="{{ $productbrand->id }}"{{ $product->product_brand_id == $productbrand->id ? "selected" : '' }}>{{ $productbrand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">
                            Edit Brand
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

