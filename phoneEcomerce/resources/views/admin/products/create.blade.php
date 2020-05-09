@extends('admin.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Add Product</h5>
                    </div>
                    <div class="card-body">
                        <!-- Display Validation Errors -->
                        <form action="store" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-3 offset-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Brand id">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Brand id</label>
                                        <input type="text" name="brand_id" class="form-control" placeholder="Brand id">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Provider id</label>
                                        <input type="text" name="provider_id" class="form-control" placeholder="Provider id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 offset-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Promotion price</label>
                                        <input type="text" name="promotion_price" class="form-control" placeholder="Brand id">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="text" name="price" class="form-control" placeholder="Brand id">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Quantity</label>
                                        <input type="text" name="quantity" class="form-control" placeholder="Brand id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 offset-1">
                                    <div class="form-group">
                                        <h6>Image URL <span class="icon-danger">*</span></h6>
                                        <input style="opacity: 1; position:initial" name="file" type="file" class="form-control border-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
