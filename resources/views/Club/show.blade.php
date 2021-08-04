@extends('layouts.club')


@section('title')
    Show Club
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex align-items-center"><img class="rounded-circle"
                        src="{{ $club->getFirstMediaUrl('logos') }}" width="50"></div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ $club->name }}" disabled>
                </div>
            </div>

            <div class="col-lg-6">
                <label>Description</label>
                <p>{{ $club->description }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" disabled>
                        <option>{{ $city->name }}</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Sports </label>
                    <select class="form-control" id="sports" name="sports[]" required multiple disabled>
                        @foreach ($club->sports as $key => $sports)
                            <option selected>{{ $sports->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

        </div>


        <div class="form-group">
            <a href="{{ route('clubs.index') }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>

@endsection
