@extends('admin.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="/users/create">
                            Add User
                        </a>
                        <h4 class="card-title"> Manage Users</h4>
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
                                    Username
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    Options
                                </th>
                                </thead>
                                <tbody>
                                @foreach($users as $key => $user)
                                    <tr>
                                        <td>
                                            {{ (($users->currentPage() - 1 ) * $users->perPage()) + ($key+1) }}
                                        </td>
                                        <td>
                                            {{ $user->username }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->type }}
                                        </td>
                                        <td class="d-none">
                                            {{ $user->avatar_url }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary btn-edit"
                                                        data-href="/users/edit/{{$user->id}}"><i
                                                            class="nc-icon nc-scissors"></i></button>
                                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                        data-target="#modalDelete{{$user->id}}"><i
                                                            class="nc-icon nc-simple-remove"></i></button>

                                                <!-- Modal -->
                                                <div id="modalDelete{{$user->id}}" class="modal fade" role="dialog">
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
                                                                <form action="/users/delete/{{$user->id}}"
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
                        {{ $users->links() }}
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
                        <h5 class="modal-title" id="editModalLabel">Update User</h5>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="******">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Confirmation Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="******">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Type</label>
                                                    <select name="type" class="form-control">
                                                        <option value="0">Admin</option>
                                                        <option value="1">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
            $('#editForm input[name="username"]').val(col[0].innerText.trim());
            $('#editForm input[name="email"]').val(col[1].innerText);
            $('#editForm select[name="type"]').val($(col[4]).get(0).innerText === "User" ? 1 : 0);
            $('#editModal').modal({
                backdrop: 'static',
                show: true
            });
        });

        $("#avatar").click(function(e) {
            e.preventDefault();
            $("#file").trigger("click");
        })

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#file").change(function() {
            readURL(this);
        });
    </script>
@endpush
