@extends('layouts.club')


@section('title')
    Create Club
@endsection

@section('content')
    {{-- add club form --}}
    <form action="{{ route('clubs.store') }}" method="POST" class="form-horizontal mt-4" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-header">
            <h4 class="modal-title">Add Club</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
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
                <select class="form-control" name="city_id" id="cities" required>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Sports </label>
                <select class="form-control" id="sports" name="sports[]" multiple="multiple">
                    @foreach ($sports as $sport)
                        <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>Upload the logo</label>
                <input type="file" class="form-control" name="logo">
            </div>
        </div>
        <div class="modal-footer">
            <a href="{{ route('clubs.index') }}" class="btn btn-default">Cancel</a>
            <input type="submit" class="btn btn-success" value="Add">
        </div>
    </form>
    {{-- end add club form --}}


@endsection
