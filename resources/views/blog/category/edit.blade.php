@extends('layouts.admin')

@section('title')
    Create Category
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data" role="form"
                        id="uploadForm">
                        @csrf
                        @method("PUT")
                        {{-- @include("includes.message") --}}
                        <div class="col-md-12" style="width: 100%">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="newstitle">Category Name</label><span class="text-danger">*</span>
                                                <input type="text" name="cat_name" placeholder="Category Name"
                                                    class="form-control" id="newstitle" required value="{{ $category->cat_name }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status">Status</label> <span class="text-danger">*</span>
                                                <select class="form-control" name="status" id="status" required="">
                                                    <option value="" selected="selected">-- Select an option --
                                                    </option>
                                                    <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>
                                                        Published</option>
                                                    <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>
                                                        Unpublished</option>
                                                </select>
                                            </div>
                                        </div>

                            <div class="col-md-4">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary btn-flat">UPDATE</button>
                                    <a href="{{ route("category.create") }}" class="btn btn-warning btn-flat">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
       
    </div>
@endsection


