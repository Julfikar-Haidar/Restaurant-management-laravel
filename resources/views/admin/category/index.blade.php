
@extends('layouts.app')

@section('title')
All Category
@endsection
@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{route('category.create')}}" class="btn btn-info">Add new</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Category</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table table-striped table-bordered" id="myTable" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Slug
                        </th>
                        
                        <th>
                          Created At
                        </th>
                        <th>
                          Updated At
                        </th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      
                      @foreach($category as $key=>$category)

                          <tr>
                          <td>
                            {{$key+1}}
                          </td>
                          <td>
                        {{$category->name}}
                          </td>
                          <td>
                            {{$category->slug}}
                          </td>
                          
                          <td>
                            {{$category->created_at}}
                          </td>
                          <td>
                           {{$category->updated_at}}
                          </td>
                          <td>
                            <a href="{{ route('category.edit',$category->id) }}"class="btn btn-sm btn-info" ><i class="material-icons">edit</i></a>

                          <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" style="display: none;" method="POST">

                              @csrf
                              @method('DELETE')

                            </form>

                            <a href="" class="btn btn-sm btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $category->id }}').submit();
                            }else{

                              event.preventDefault();
                            }"><i class="material-icons">
delete
</i></a>
                          </td>
                        </tr>
                      @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
@endsection

@push('scripts')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endpush