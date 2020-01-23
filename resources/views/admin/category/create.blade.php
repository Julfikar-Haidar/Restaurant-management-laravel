
@extends('layouts.app')

@section('title')
Create Category
@endsection
@push('css')


@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
             @include('errors.error')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Create Category</h4>
                </div>
                <div class="card-body">
                  <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">

                   @csrf
                 <div class="row">
                  <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name </label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      </div>
                       
                    
                      <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                      <button type="submit" class="btn btn-primary pull-right">Save</button>
                 
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