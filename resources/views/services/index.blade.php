@extends('layouts.admin')

@section('title')
Service List
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="row">
        
            @if (count($services) > 0)
                @foreach ($services as $service)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow">
                        {{-- <img src="https://drive.google.com/uc?export=view&id=1aj_vT5zjJlkdEQ_VcCsdnvpVBi-Fjwyb" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h2 class="card-title">{{ $service->title }}</h2>
                            <p class="card-text">
                            {{ $service->content }}    
                            </p>
                        </div>
                        <div class="card-body card-p">
                            <div class="row">
                                {{-- <div class="col col-xs-4 ">
                                    <i class="far fa-comments"></i> 456
                                </div> --}}
                                <a href="{{ route('service.edit', $service->id) }}" class="col col-xs-4 ">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="" class="col col-xs-4">
                                    <i class="fas fa-trash danger"></i> 
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
           
        </div>
    </div>
</section>
@endsection
