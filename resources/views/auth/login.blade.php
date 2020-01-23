
@extends('layouts.app')

@section('title')
Login
@endsection
@push('css')


@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
             @include('errors.error')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Login</h4>
                </div>
                <div class="card-body">
                  <form action="{{route('login')}}" method="post" enctype="multipart/form-data">

                   @csrf
                 <div class="row">
                  <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email </label>
                          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                      </div>
                      </div>

                     <div class="row">
                  <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password </label>
                          <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>
                      </div>
                       
                       
                    
                      <button type="submit" class="btn btn-primary">login</button>
                      <a href="{{route('welcome')}}" class="btn btn-danger">Back</a>
                 
                 </form>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
@endsection

@push('scripts')

@endpush