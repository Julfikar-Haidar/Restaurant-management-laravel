
@extends('layouts.app')

@section('title')
Details
@endsection
@push('css')



@endpush

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Details</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table table-striped table-bordered" id="myTable" style="width:100%">
                <strong>Name: {{ $contact->name }}</strong><br>
                <b>Email: {{ $contact->email }}</b> <br>
                <strong>Message: </strong><hr>

                <p>{{ $contact->message }}</p><hr>
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


@endpush