
@extends('layouts.app')

@section('title')
Update Slider
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
                  <h4 class="card-title ">Update Slider</h4>
                </div>
                <div class="card-body">
                  <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">

                   @csrf
                   @method('PUT')
                 <div class="row">
                  <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title </label>
                          <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                        </div>
                      </div>
                      </div>
                       <div class="row">
                         <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub-title </label>
                          <input type="text" class="form-control" name="sub_title" value="{{ $slider->sub_title }}">
                        </div>
                      </div>
                       </div>
                      <div class="row">
                         <div class="col-md-12">
                       
                          <label class="bmd-label-floating">Image </label><br>
                          <input type="file" name="image">
                        
                      </div>
                      </div>
                      <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
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