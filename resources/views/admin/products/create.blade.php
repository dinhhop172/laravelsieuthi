{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @method('POST')
            <label for="">{{ trans('product.label.name') }}</label><br>
            <input type="text" name="name"><br>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong><br/>
                     <strong>{{ $errors->bags('name') }}</strong><br/>
                </span>
            @endif

            <label for="">{{ trans('product.label.desc') }}</label><br>
            <textarea name="desc" id="" cols="22" rows="5"></textarea><br>
            @if ($errors->has('desc'))
                <span class="help-block">
                    <strong>{{ $errors->first('desc') }}</strong><br/>
                </span>
            @endif

            <label for="">{{ trans('product.label.img') }}</label><br>
            <textarea name="img" id="" cols="22" rows="2"></textarea><br>
            @if ($errors->has('img'))
                <span class="help-block">
                    <strong>{{ $errors->first('img') }}</strong><br/>
                </span>
            @endif

            <label for="">{{ trans('product.label.price') }}</label><br>
            <input type="text" name="price"><br>
            @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong><br/>
                </span>
            @endif

            <input type="submit" value="Insert">
    </form>
</body>
</html> --}}

<!-- add modal -->
<div class="modal fade" id="addproduct" role="dialog">
    <div class="modal-dialog" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            {{-- <div class="alert alert-danger" style="display:none"></div> --}}
            <div class="modal-header">
                <h5 class="modal-title">Add product</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-window-close red"></i></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.name') }}</label>
                        <div class="">
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong><br>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.desc') }}</label>
                        <div class="">
                            {{-- <input type="text" name="desc" class="form-control"> --}}
                            <textarea class="form-control" name="desc" rows="3" id="desc" required></textarea>
                        </div>
                        @if ($errors->has('desc'))
                            <span class="help-block">
                                <strong>{{ $errors->first('desc') }}</strong><br>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.image') }}</label>
                        <div class="">
                            <input type="file" name="image" class="form-control" id="image" required>
                        </div>
                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong><br>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.price') }}</label>
                        <div class="">
                            <input type="text" name="price" class="form-control" id="price" required>
                        </div>
                        @if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong><br>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('product.label.product_brand_id') }}</label>
                        {{-- <div class="">
                            <input type="text" name="product_brand_id" class="form-control">
                        </div> --}}
                        <select name="product_brand_id" id="product_brand_id" class="form-d">
                            @foreach ($productbrands as $productbrand)
                            <option value="{{ $productbrand->id }}">{{ $productbrand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="modal-footer">
                            <button type="submit" class="btn btn-info" id="ajaxSubmit">
                                Add Product
                            </button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    jQuery(document).ready(function(){
       jQuery('#ajaxSubmit').click(function(e){
          e.preventDefault();
          $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
             }
         });
          jQuery.ajax({
             url: "{{ url('/chempionleague') }}",
             method: 'post',
             data: {
                name: jQuery('#name').val(),
                desc: jQuery('#desc').val(),
                image: jQuery('#image').val(),
                price: jQuery('#price').val(),
                product_brand_id: jQuery('#product_brand_id').val(),
             },
             success: function(result){
                 if(result.errors)
                 {
                     jQuery('.alert-danger').html('');

                     jQuery.each(result.errors, function(key, value){
                         jQuery('.alert-danger').show();
                         jQuery('.alert-danger').append('<li>'+value+'</li>');
                     });
                 }
                 else
                 {
                     jQuery('.alert-danger').hide();
                     $('#open').hide();
                     $('#addproduct').modal('hide');
                 }
             }});
          });
       });
 </script> --}}
