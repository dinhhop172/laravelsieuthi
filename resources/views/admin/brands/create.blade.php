<!-- add modal -->
<div class="modal fade" id="addbrand" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add brand</h5>
                <button type="button" class="close" data-dismiss="modal"><i class="fas fa-window-close red"></i></button>
            </div>
            <div class="modal-body">
                <form action="{{route('productbrands.store')}}" method="POST" class="">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="task-name" class="label">{{ trans('brand.label.name') }}</label>
                        <div class="">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong><br>
                            </span>
                        @endif
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">
                            Add Brand
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    {{-- <form action="{{ route('productbrands.store') }}" method="post">
        @csrf
        @method('POST')
        <label for="">Name:</label><br>
        <input type="text" name="name"><br>
        <input type="submit" name="sm" value="Insert">
    </form> --}}

