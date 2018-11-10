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
            <!-- Nav Items -->
            <ul class="nav nav-tabs navtab-bg nav-justified">
                <li class="nav-item">
                    <a href="#searchResource" data-toggle="tab" aria-expanded="false" class="nav-link active">Search & filter</a>
                </li>
                <li class="nav-item">
                    <a href="#createResource" data-toggle="tab" aria-expanded="true" class="nav-link">Create new</a>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Search -->
                <div class="tab-pane active" id="searchResource">
                    <form method="get" action="" enctype="multipart/form-data">
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

                <!-- Create -->
                <div class="tab-pane" id="createResource">
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
                                    <a class="btn btn-danger btn-rounded waves-effect waves-light">
                                        <i class="fa fa-times"></i>
                                    </a>
                                    <a class="btn btn-success btn-rounded waves-effect waves-light">
                                        <i class="fa fa-refresh"></i>
                                    </a>
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