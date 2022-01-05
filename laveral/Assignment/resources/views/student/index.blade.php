@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        @if (session('status'))
       <h6 class="alert alert-success">{{ session('status') }}</h6>
       @endif
        <div class="card-header">
          <h4>Insert Infromation
            <a href="{{ url('addstudent') }}" class="btn btn-primary float-end">Add Student</a>
            <a href="{{ url('exportexcel') }}" class="btn btn-primary float-end">Export Data</a>
           
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Import Data
</button>
          </h4>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="importexcel" method="POST" enctype="multipart/form-data">
        @csrf
      
      <div class="modal-body">
        <div class="form-group">
          <input type="file" name="file" required>
        </div>       
      </div>   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>

        </div>
        <div class="card-body">

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Major</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($student as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->dob }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->Major->major}}</td>
                <td>
                  <a href="{{ url('editstudent/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                  {{-- <a href="{{ url('deletestudent/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                  <form action="{{ url('deletestudent/'.$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
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

@endsection