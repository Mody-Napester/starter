@extends('_layouts.dashboard')

@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            <h4 class="page-title">Permission Groups</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ config('app.name') }}</a></li>
                <li class="breadcrumb-item"><a href="#">Permission Groups</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <!-- Create new -->
                <h4 class="m-t-0 header-title">Create new Permission Group</h4>
                <p class="text-muted font-14 m-b-30">
                    Create new resource from here.
                </p>

                <form method="post" action="{{ route('permission-groups.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="Name"/>
                    </div>

                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card-box -->
        </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">All Permission Groups</h4>
                <p class="text-muted font-14 m-b-30">
                    Here you will find all the resources to make actions on them.
                </p>

                <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Created by</th>
                            <th>Updated at</th>
                            <th>Created at</th>
                            <th>Control</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($resources as $resource)
                            <tr>
                                <td>{{ $resource->id }}</td>
                                <td>{{ $resource->name }}</td>
                                <td>{{ $resource->createdBy->name }}</td>
                                <td>{{ $resource->updatedBy->name }}</td>
                                <td>{{ $resource->created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-url="{{ route('permission-groups.edit', [$resource->uuid]) }}" data-toggle="modal" data-target=".bs-edit-modal-lg">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    <form class="d-inline-block" action="{{ route('permission-groups.destroy', [$resource->uuid]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-rounded waves-effect waves-light">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection