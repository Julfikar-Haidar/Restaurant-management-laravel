
@extends('layouts.app')

@section('title')
All slider
@endsection
@push('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{route('slider.create')}}" class="btn btn-info">Add new</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Slider</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table table-striped table-bordered" id="myTable" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Sub-title
                        </th>
                        <th>
                          Image
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
                      
                      @foreach($slider as $key=>$slider)

                          <tr>
                          <td>
                            {{$key+1}}
                          </td>
                          <td>
                        {{$slider->title}}
                          </td>
                          <td>
                            {{$slider->sub_title}}
                          </td>
                          <td>
                           {{$slider->image}}
                          </td>
                          <td>
                            {{$slider->created_at}}
                          </td>
                          <td>
                           {{$slider->updated_at}}
                          </td>
                          <td>
                            <a href="{{ route('slider.edit',$slider->id) }}"class="btn btn-sm btn-info" ><i class="material-icons">edit</i></a>

                          <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                            <a href="" class="btn btn-sm btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $slider->id }}').submit();
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