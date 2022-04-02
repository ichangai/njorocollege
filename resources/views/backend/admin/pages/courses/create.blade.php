@extends('backend.admin.layouts.master')

@section('content')

<main class="content">
    <div class="container-fluid p-0">
        <div class="" style="text-align: center;">
            <h1 class="">Create Course</h1>
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
                    <form action="{{ route('admin.course.store') }}" method="POST" id="addStudent">
                        @csrf
                        <div class="tab-content">     
                            <div class="row">
                                <div class="my-5" style="text-align: center;">
                                    <h4>Course Details</h4>
                                </div>   
                                <div class="col-md-6 col-sm-12  mb-3">
                                    <label for="">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="background: rgb(9, 192, 2); color: white;">F</span>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ old('name') }}">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Duration</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">D</span>
                                        <input type="text" class="form-control" id="duration" name="duration"
                                            value="{{ old('duration') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Grade Certificate</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">C</span>
                                        <input type="text" class="form-control" name="grade_cert" id="grade_cert"
                                            value="{{ old('grade_cert') }}">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Grade Diploma</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">D</span>
                                        <input type="text" class="form-control" id="grade_dip" name="grade_dip"
                                            value="{{ old('grade_dip') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Entry Requirement</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">E</span>
                                        <input type="text" class="form-control" name="entry" id="entry"
                                            value="{{ old('entry') }}">
                                    </div>
                                </div>

                                <div class="col-6 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="exam">
                                                        <option value="KNEC">KNEC</option>
                                                        <option value="NITA">NITA</option>
                                                        <option value="C&G">C&G</option>
                                                </select>
                                                <label for="floatingSelect">Examination</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example" name="instructor_id">
                                                @foreach ($instructors as $instructor)
                                                    <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Instructor</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example" name="dep_id">
                                                @foreach ($departments as $dep)
                                                <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                            @endforeach
                                            </select>
                                            <label for="floatingSelect">Department</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12" style="margin: 40px 0;">
                            <label for="">Course Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn text-white btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="photo">
                                </div>
                                <div id="holder" style="margin-top:15px; max-height:100px; "></div>
                        </div>

                        

                        <div class="my-5" style="text-align: center">  
                            <h4>Course Description</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="desc" id="" cols="100" rows="10" style="border: 2px solid gray; border-radius: 5px;"> </textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success my-5 px-5"> Submit</button>
                        <a href="{{ route('admin.course.create') }}" class="btn btn-danger my-5 px-5">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
