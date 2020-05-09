@extends('admin.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="/products/create">
                            Add Product
                        </a>
                        <h4 class="card-title"> Manage Products</h4>
                    </div>
                    <div class="card-body">
                        @if(session()->has("success"))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                    <i class="nc-icon nc-simple-remove"></i>
                                </button>
                                <span> {{ session("success") }}</span>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Promotion Price
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Quantity
                                </th>
                                </thead>
                                <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>
                                            {{ (($products->currentPage() - 1 ) * $products->perPage()) + ($key+1) }}
                                        </td>
                                        <td>
                                            {{ $product->name }}
                                        </td>
                                        <td>
                                            {{ $product->promotion_price }}
                                        </td>
                                        <td>
                                            {{ $product->price }}
                                        </td>
                                        <td>
                                            {{ $product->quantity }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary btn-edit"
                                                        data-href="/products/edit/{{$product->id}}"><i
                                                            class="nc-icon nc-scissors"></i></button>
                                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                        data-target="#modalDelete{{$product->id}}"><i
                                                            class="nc-icon nc-simple-remove"></i></button>

                                                <!-- Modal -->
                                                <div id="modalDelete{{$product->id}}" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="display: block;">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">&times;
                                                                </button>
                                                                <h4 class="modal-title">Xóa</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Bạn có chắc chắn muốn xóa?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="/products/delete/{{$product->id}}"
                                                                      method="post">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Đóng
                                                                    </button>
                                                                    <button type="submit" class="btn btn-danger">Xóa
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal edit -->
    <div class="modal" id="editModal" role="dialog" aria-labelledby="editModalLabel" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Update Product</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="brand_id" class="form-control" placeholder="Brand id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Brand id</label>
                                    <input type="text" name="brand_id" class="form-control" placeholder="Brand id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Provider id</label>
                                    <input type="text" name="provider_id" class="form-control" placeholder="Provider id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Promotion price</label>
                                    <input type="text" name="brand_id" class="form-control" placeholder="Brand id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" name="brand_id" class="form-control" placeholder="Brand id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantity</label>
                                    <input type="text" name="brand_id" class="form-control" placeholder="Brand id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h6>Image URL <span class="icon-danger">*</span></h6>
                                    <input style="opacity: 1; position:initial" name="file" type="file" class="form-control border-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // Click edit button
        $('.btn-edit').click(function (e) {
            e.preventDefault();
            resetFormModal($(this).data('href'));

            // Fill default value
            var row = $(this).parent().parent().parent();
            var col = row.find('td');
            console.log(row);
            console.log(col);
            $('#editForm input[name="name"]').val(col[1].innerText.trim());
            $('#editModal').modal({
                backdrop: 'static',
                show: true
            });
        });

    </script>
@endpush
