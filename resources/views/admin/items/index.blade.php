
@extends('layouts.app')

@section('title')
All Item
@endsection
@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{route('item.create')}}" class="btn btn-info">Add new</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Item</h4>
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
                          Image
                        </th>
                        <th>
                          Category name
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Price
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
                      
                      @foreach($item as $key=>$item)

                          <tr>
                          <td>
                            {{$key+1}}
                          </td>
                          <td>
                        {{$item->name}}
                          </td>
                          <td>
                            {{$item->image}}
                          </td>
                          <td>
                            {{$item->category->name}}
                          </td>
                          <td>
                            {{$item->description}}
                          </td>
                          <td>
                            {{$item->price}}
                          </td>
                          
                          
                          <td>
                            {{$item->created_at}}
                          </td>
                          <td>
                           {{$item->updated_at}}
                          </td>
                          <td>
                            <a href="{{ route('item.edit',$item->id) }}"class="btn btn-sm btn-info" ><i class="material-icons">edit</i></a>

                          <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">

                              @csrf
                              @method('DELETE')

                            </form>

                            <a href="" class="btn btn-sm btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $item->id }}').submit();
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