
@extends('layouts.app')

@section('title')
Create Items
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
          <h4 class="card-title ">Create Items</h4>
        </div>
        <div class="card-body">
          <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">

           @csrf
           <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Name </label>
                <input type="text" class="form-control" name="name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Category</label>
                <select class="form-control" name="category_id">
                  @foreach($category as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Description</label>
                <textarea class="form-control" name="description"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Price</label>
                <input type="number" class="form-control" name="price">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="control-label">Image</label><br>
              <input type="file" name="image">
            </div>
          </div>


          <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
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