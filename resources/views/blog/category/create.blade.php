@extends('layouts.admin')

@section('title')
    Create Category
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" role="form"
                        id="uploadForm">
                        @csrf
                        {{-- @include("includes.message") --}}
                        <div class="col-md-12" style="width: 100%">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="newstitle">News Title</label><span class="text-danger">*</span>
                                                <input type="text" name="cat_name" placeholder="Category Name"
                                                    class="form-control" id="newstitle" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status">Status</label> <span class="text-danger">*</span>
                                                <select class="form-control" name="status" id="status" required="">
                                                    <option value="" selected="selected">-- Select an option --
                                                    </option>
                                                    <option value="1">Published</option>
                                                    <option value="0">Unpublished</option>
                                                </select>
                                            </div>
                                        </div>

                                       
                                        
                                      
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                          

                            {{-- <div class="col-md-4">
                            <div class="box box-primary">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="status" checked> Published
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="featured"> Featured
                                            </label>
                                        </div>
                                    </div>
                    
                                   
                                </div>
                            </div>
                        </div> --}}

                            <div class="col-md-4">
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary btn-flat">CREATE</button>
                                    <a href="" class="btn btn-warning btn-flat">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (count($categories) > 0)
            <section class="content mt-10" element-id="1214">
                <div class="container-fluid" element-id="1213">
                    <h5 class="mb-2" element-id="1212">Category List</h5>
                    <div class="row" element-id="1211">
                        @foreach ($categories as $category)
                           <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box" element-id="1209">
                                <span class="info-box-icon {{ $category->status == 1 ? 'bg-info':'bg-warning' }}" ><i class="far fa-envelope"
                                        element-id="1207"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text" >{{ $category->cat_name }}</span>
                                    <a href="{{ route("category.edit",$category->id) }}" class="info-box-number">Edit</a>
                                </div>

                            </div>

                        </div>  
                        @endforeach
                       

                        
                    </div>
                 </section>
  @endif
@endsection


