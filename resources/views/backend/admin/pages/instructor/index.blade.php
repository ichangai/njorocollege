@extends('backend.admin.layouts.master')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div style="display: flex; justify-content: space-between; align-items:center;" class="mb-4">
                <div class="title">
                    <h1 class="h3 mb-3">Instructors</h1>
                </div>
                <div class="btn-create">
                    <a href="{{ route('admin.instructor.create') }}" class="btn btn-s btn-primary">Create Instructor</a>
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
                            <h5 class="card-title mb-0">All Student details</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-clients" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Name</td>
                                        <td>Phone</td>
                                        <td>email</td>
                                        <td>Location</td>
                                        <td>Field</td>
                                        <td>Study</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instructors as $instructor)
                                        <tr>
                                            <td>{{ $instructor->Id }}</td>
                                            <td>{{ $instructor->name }}</td>
                                            <td>{{ $instructor->phone }}</td>
                                            <td>{{ $instructor->email }}</td>
                                            <td>{{ $instructor->location }}</td>
                                            <td>{{ $instructor->field }}</td>
                                            @if($instructor->study == 'part_time')
                                            <td>Part Time</td>
                                            @else
                                            <td>Full Time</td>
                                            @endif
                                            <td>
                                                <a href="javascript:void(0);" data-toggle="modal"
                                                    data-target="#catID{{ $instructor->id }}" title="view"
                                                    class="float-left btn btn-sm btn-outline-secondary mr-3 px-3 py-2"
                                                    data-placement="bottom"
                                                    style="background-color: rgb(12, 211, 12); border-radius: 8px; color:white; outline:none; border:none;"><i
                                                        class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin.instructor.edit', $instructor->id) }}" data-toggle="tooltip"
                                                    title="edit"
                                                    class="float-left btn btn-warning btn-sm btn-outline-warning px-3 py-2"
                                                    data-placement="bottom"
                                                    style="background: yellow; border-radius: 8px; color: white;"><i
                                                        class="fas fa-edit"></i></a>
                                                <form class="float-left ml-2"
                                                    action="{{ route('admin.instructor.destroy', $instructor->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="" data-toggle="tooltip" title="delete"
                                                        data-id="{{ $instructor->id }}"
                                                        class="dltBtn btn btn-sm btn-danger btn-outline-danger px-3 py-2"
                                                        data-placement="bottom"
                                                        style="background-color: #ff0157; border-radius: 8px; color:white;"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </form>
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="catID{{ $instructor->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-center" id="exampleModalLabel">
                                                                {{ Illuminate\Support\Str::upper($instructor->name) }}
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
                                                                        <p>{!! html_entity_decode($instructor->name) !!}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <strong>Phone</strong>
                                                                        <p>{!! html_entity_decode($instructor->phone) !!} </p>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <strong>Email</strong>
                                                                        <p>{!! html_entity_decode($instructor->email) !!} </p>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <strong>Field of Expertise</strong>
                                                                        <p>{!! html_entity_decode($instructor->field) !!} </p>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <strong>Mode of teaching</strong>
                                                                        @if($instructor->study == 'full_time')
                                                                            <p> Full Time </p>
                                                                        @else
                                                                        <p> Part Time </p>
                                                                        @endif
                                                                    </div>

                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <strong>Location</strong>
                                                                        <p>{!! html_entity_decode($instructor->location) !!} </p>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <strong>Country</strong>
                                                                        <p>{!! html_entity_decode($instructor->country) !!} </p>
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
                    text: "Once deleted, you will not be able to recover the instructor!",
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
                        swal("The instructor has not been deleted!");
                    }
                });
        });
    </script>
@endsection
