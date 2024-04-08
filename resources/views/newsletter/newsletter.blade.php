@extends('layouts.admin')

@section('title')
News Letter
@endsection

@section('content')
<section class="content">

    <div class="mb-1">
      <a href="{{ route('email.export') }}" class="btn btn-primary">
          Export Data
     </a>
    
 </div>
    <div class="card">
       
            <table class="table">
                @php
                $i = 1
                @endphp
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($newsletters as $letter)
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $letter->email }}</td>
                    <td><a href="{{ route("newsletter.delete",$letter->id) }}"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
        </div>
    
</section>
@endsection
