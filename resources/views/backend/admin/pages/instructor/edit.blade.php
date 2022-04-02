@extends('backend.admin.layouts.master')

@section('content')

<main class="content">
    <div class="container-fluid p-0">
        <div class="" style="text-align: center;">
            <h1 class="">Update Instructor</h1>
        </div>
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="tab">
                    <form action="{{ route('admin.instructor.update', $instructor->id) }}" method="POST" id="addStudent">
                        @csrf
                        @method('patch')
                        <div class="tab-content">     
                            <div class="row">
                                <div class="my-5" style="text-align: center;">
                                    <h4>Instructor Details</h4>
                                </div>   
                                <div class="col-md-6 col-sm-12  mb-3">
                                    <label for="">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="background: rgb(9, 192, 2); color: white;">F</span>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $instructor->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">P</span>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $instructor->phone }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Email (optional)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">@</span>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ $instructor->email }}">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Password (optional)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">P</span>
                                        <input type="text" class="form-control" id="password" name="password"
                                            value="{{ $instructor->password }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Field/Area of expertise</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">F</span>
                                        <input type="text" class="form-control" name="field" id="field"
                                            value="{{ $instructor->field }}">
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example" name="study">
                                            <option value="full_time" {{ $instructor->study=='full_time' ? 'selected': ' '  }}>Full time</option>
                                            <option value="part_time" {{ $instructor->study=='part_time' ? 'selected': ' '  }}>Part Time</option>
                                        </select>
                                        <label for="floatingSelect">Teach</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="">Location</label>
                                <div class="input-group">
                                    <span class="input-group-text"
                                        style="background: rgb(9, 192, 2); color: white;">L</span>
                                    <input type="text" class="form-control" id="location" name="location"
                                        value="{{ $instructor->location }}">
                                </div>
                            </div>

                            {{-- <div class="col-md-6 col-sm-12 mb-3">
                                <label for="">Country</label>
                                <div class="input-group">
                                    <span class="input-group-text"
                                        style="background: rgb(9, 192, 2); color: white;">C</span>
                                    <input type="text" class="form-control" id="country" name="country"
                                        value="{{ $instructor-> }}">
                                </div>
                            </div> --}}
                        </div>

                        <div class="col-12 col-lg-12" style="margin: 40px 0;">
                            <label for="">Instructor Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn text-white btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ $instructor->photo }}">
                                </div>
                                <div id="holder" style="margin-top:15px; max-height:100px; "></div>
                        </div>

                        <button type="submit" class="btn btn-success my-5 px-5"> Submit</button>
                        <a href="{{ route('admin.instructor.edit', $instructor->id) }}" class="btn btn-danger my-5 px-5">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
