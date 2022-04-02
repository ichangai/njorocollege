@extends('backend.admin.layouts.master')

@section('content')

<main class="content">
    <div class="container-fluid p-0">
        <div class="" style="text-align: center;">
            <h1 class="">Create Department</h1>
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
                    <form action="{{ route('admin.department.store') }}" method="POST" id="addStudent">
                        @csrf
                        <div class="tab-content">     
                            <div class="row">
                                <div class="my-5" style="text-align: center;">
                                    <h4>Deprtment Details</h4>
                                </div>   
                                <div class="col-md-6 col-sm-12  mb-3">
                                    <label for="">Course Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" style="background: rgb(9, 192, 2); color: white;">F</span>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <label for="">Department Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn text-white btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ old('photo') }}">
                                        </div>
                                        <div id="holder" style="margin-top:15px; max-height:100px; "></div>
                                </div>
                            </div>

                            <div class="my-5" style="text-align: center">  
                                <h4>Department Description</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="description" id="" cols="100" rows="10" style="border: 2px solid gray; border-radius: 5px;"> </textarea>
                                </div>
                            </div>

                        <button type="submit" class="btn btn-success my-5 px-5"> Submit</button>
                        <a href="{{ route('admin.department.create') }}" class="btn btn-danger my-5 px-5">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection