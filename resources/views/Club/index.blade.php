@extends('layouts.club')


@section('title')
    Clubs
@endsection

@section('content')

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Clubs</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-success"><i
                                    class="material-icons">&#128065;</i> <span class="mt-1">
                                    Cities</span></a>
                            <a href="#" class="btn btn-success"><i
                                    class="material-icons">&#128065;</i> <span class="mt-1">
                                    Sports</span></a>
                            <a href="{{ route('clubs.create') }}" class="btn btn-success"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Club</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>logo</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clubs as $club)
                            <tr>
                                <td>{{ $club->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center"><img class="rounded-circle"
                                            src="{{ $club->getFirstMediaUrl('logos') }}" width="50"></div>
                                </td>
                                <td>{{ $club->name }}</td>
                                <td>{{ $club->description }}</td>

                                <td>
                                    <a href="{{ route('clubs.show', $club->id) }}" class="show"><i class="material-icons"
                                            data-toggle="tooltip" title="Show">&#128065;</i></a>

                                </td>
                                <td>
                                    <a href="{{ route('clubs.edit', $club->id) }}" class="edit"><i class="material-icons"
                                            data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                </td>
                                <td>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <!-- Delete Modal HTML -->
                            <div id="deleteEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('clubs.destroy', $club->id) }}" method="post">
                                            @method('delete')
                                            {{ csrf_field() }}
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Club</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete these Club?</p>
                                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal"
                                                    value="Cancel">
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>



@endsection
