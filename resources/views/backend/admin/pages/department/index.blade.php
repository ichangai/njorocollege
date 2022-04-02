@extends('backend.admin.layouts.master')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div style="display: flex; justify-content: space-between; align-items:center;" class="mb-4">
                <div class="title">
                    <h1 class="h3 mb-3">Departments</h1>
                </div>
                <div class="btn-create">
                    <a href="{{ route('admin.department.create') }}" class="btn btn-s btn-primary">Create Department</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                </div>
                            </div>
                            <h5 class="card-title mb-0">All Departments details</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-clients" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Photo</td>
                                        <td>Name</td>
                                        <td>Description</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departments as $dep)
                                        <tr>
                                            <td>{{ $dep->Id }}</td>
                                            <td><img src="{{ $dep->photo }}" width="32" height="32"
                                                class="rounded-circle my-n1" alt="Avatar"></td>
                                            <td>{{ $dep->name }}</td>
                                            <td>{{ $dep->description }}</td>
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal"
                                                    data-target="#catID{{ $dep->id }}" title="view"
                                                    class="float-left btn btn-sm btn-outline-secondary mr-3 px-3 py-2"
                                                    data-placement="bottom"
                                                    style="background-color: rgb(12, 211, 12); border-radius: 8px; color:white; outline:none; border:none;"><i
                                                        class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin.department.edit', $dep->id) }}" data-toggle="tooltip"
                                                    title="edit"
                                                    class="float-left btn btn-warning btn-sm btn-outline-warning px-3 py-2"
                                                    data-placement="bottom"
                                                    style="background: yellow; border-radius: 8px; color: white;"><i
                                                        class="fas fa-edit"></i></a>
                                                <form class="float-left ml-2"
                                                    action="{{ route('admin.department.destroy', $dep->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" data-toggle="tooltip" title="delete"
                                                        data-id="{{ $dep->id }}"
                                                        class="dltBtn btn btn-sm btn-danger btn-outline-danger px-3 py-2"
                                                        data-placement="bottom"
                                                        style="background-color: #ff0157; border-radius: 8px; color:white;"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </form>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="catID{{ $dep->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-center" id="exampleModalLabel">
                                                                {{ Illuminate\Support\Str::upper($dep->name) }}
                                                            </h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                            <div class="row text-center">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <strong>Name</strong>
                                                                        <p>{!! html_entity_decode($dep->name) !!}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <strong>Description</strong>
                                                                        <p>{!! html_entity_decode($dep->description) !!} </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer text-center mr-4">
                                                                <button type="button" class="btn rounded btn-danger"
                                                                    data-dismiss="modal">Close</button>
                                                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e) {
            var form = $(this).closest('form');
            var dataId = $(this).data('id');
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover the department!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal(" has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("The department has not been deleted!");
                    }
                });
        });
    </script>
@endsection
