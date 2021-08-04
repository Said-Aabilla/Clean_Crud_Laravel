@extends('layouts.club')


@section('title')
    Edit Club
@endsection

@section('content')
<div class="container mt-5 ml-3">
    <form action="{{ route('clubs.update',$club->id) }}" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
        @method('PUT')
          {{ csrf_field() }}
          
          <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="name" required>
          </div>
  
          <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" required></textarea>
          </div>
          <div class="form-group">
              <label>City</label>
              <select class="form-control" name="city_id" required>
                  @foreach ($cities as $city)
                      <option value="{{ $city->id }}" {{ $city->id==$club->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
              <label>Sports </label>
              <select class="form-control" id="sports" name="sports[]" multiple required>
                  @foreach ($sports as $sport)
                      <option value="{{ $sport->id }}"  {{ $club->sports->contains($sport->id) ? 'selected' : '' }}>{{ $sport->name }}</option>
                  @endforeach
              </select>
          </div>
  
  
          <div class="form-group">
              <label>Upload the logo</label>
              <input type="file" class="form-control" name="logo">
          </div>
          </div>
          <div class="form-group ml-3">
              <a href="{{ route('clubs.index') }}" class="btn btn-default">Cancel</a>
              <input type="submit" class="btn btn-success" value="Add">
          </div>
      </form>
  
</div>
  
@endsection
