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
          </h4>
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