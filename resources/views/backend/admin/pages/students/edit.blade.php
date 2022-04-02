@extends('backend.admin.layouts.master')

@section('content')

<main class="content">
    <div class="container-fluid p-0">
        <div class="" style="text-align: center;">
            <h1 class="">Update Student</h1>
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
                    <form action="{{ route('admin.student.update', $student->id) }}" method="POST" id="addStudent">
                        @csrf
                        @method('patch')
                        <div class="tab-content">     
                            <div class="row">
                                <div class="my-5" style="text-align: center;">
                                    <h4>Student Details</h4>
                                </div>   
                                <div class="col-md-6 col-sm-12  mb-3">
                                    <label for="">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="background: rgb(9, 192, 2); color: white;">F</span>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $student->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">P</span>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $student->phone }}">
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
                                            value="{{ $student->email }}">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Password (optional)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">P</span>
                                        <input type="text" class="form-control" id="password" name="password"
                                            value="{{ $student->password }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Date of Birth</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">D</span>
                                        <input type="date" class="form-control" id="dob" name="dob" value="{{ $student->dob }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Marital Status</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">M</span>
                                        <input type="text" class="form-control" id="marital" name="marital"
                                            value="{{ $student->marital }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Secondary</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">S</span>
                                        <input type="text" class="form-control" id="secondary" name="secondary" value="{{  $student->secondary }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-3">
                                    <label for="">Field of Study</label>
                                    <div class="input-group">
                                        <span class="input-group-text"
                                            style="background: rgb(9, 192, 2); color: white;">F</span>
                                        <input type="text" class="form-control" id="field" name="field" 
                                            value=" {{ $student->field }}">
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example" name="study">
                                            <option value="full_time" {{ $student->study=='full_time' ? 'selected': ' ' }}>Full time</option>
                                            <option value="part_time" {{ $student->study=='part_time' ? 'selected': ' ' }}>Part Time</option>
                                        </select>
                                        <label for="floatingSelect">Mode of Study</label>
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
                                        value="{{ $student->location }}">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mb-3">
                                <label for="">Country</label>
                                <div class="input-group">
                                    <span class="input-group-text"
                                        style="background: rgb(9, 192, 2); color: white;">C</span>
                                    <input type="text" class="form-control" id="country" name="country"
                                        value="{{ $student->country }}">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success my-5 px-5"> Submit</button>
                        <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-danger my-5 px-5">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection