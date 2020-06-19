{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('productbrands.update', $productbrands->id) }}" method="post">
        @csrf
        @method('put')
        <label for="">Name:</label><br>
        <input type="text" name="name" value="{{ $productbrands->name }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html> --}}

<!-- add modal -->
<div class="modal fade" id="editbrand{{ $productbrand->id }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit brand</h5>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('productbrands.update', $productbrand->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="task-name" class="label">Product name</label>
                        <div class="">
                            <input type="text" name="name" class="form-control" value="{{ $productbrand->name }}">
                        </div>
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
