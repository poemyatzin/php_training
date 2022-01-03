@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

    @if($errors->any())
  <div class="alert alert-danger">
    <ol>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ol>
  </div>
  @endif

      <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">

          <form action="{{ url('updatestudent/'.$student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
              <label for="">Student Name</label>
              <input type="text" name="name" value="{{$student->name}}" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="">Student DOB</label>
              <input type="text" name="dob" value="{{$student->dob}}" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="">Student Phone </label>
              <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="">Student Address</label>
              <input type="text" name="address" value="{{$student->address}}" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Major</label>
              <select class="form-select" name="majorid">
                @foreach($majors as $major)
                <option value="{{$major['id'] }}">
                  {{$major['major'] }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="form-group mb-3">
              <button type="submit" class="btn btn-primary">Update Student</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection