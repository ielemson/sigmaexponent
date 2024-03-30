@extends('layouts.app')

@section('content')
@include("includes.breadcrumb",["header_1"=>"Login","header_2"=>"Account Login"])
    <!-- about-area -->
    <section class="about-area-eight pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                
                <div class="col-lg-6">
                    <div class="about-content-eight">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                               
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                               
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->
@endsection