@extends('_layouts.dashboard')

@section('title') Users @endsection

@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            <h4 class="page-title">Users</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ config('app.name') }}</a></li>
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs navtab-bg nav-justified">
                <li class="nav-item">
                    <a href="#searchResource" data-toggle="tab" aria-expanded="false" class="nav-link active">Search & filter</a>
                </li>
                <li class="nav-item">
                    <a href="#createResource" data-toggle="tab" aria-expanded="true" class="nav-link">Create new</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="searchResource">
                    <h4 class="header-title m-t-0">Search all users</h4>
                    <p class="text-muted font-14 m-b-20">
                        Search on resource from here.
                    </p>

                    @include('users.search')

                </div>
                <div class="tab-pane" id="createResource">
                    <h4 class="m-t-0 header-title">Create new user</h4>
                    <p class="text-muted font-14 m-b-30">
                        Create new resource from here.
                    </p>

                    @include('users.create')
                </div>
            </div>
        </div>
        <!-- end card-box -->
    </div>

    {{----}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}
            {{--<div class="card-box">--}}
                {{--<!-- Create new -->--}}
                {{--<h4 class="m-t-0 header-title">Create new User</h4>--}}
                {{--<p class="text-muted font-14 m-b-30">--}}
                    {{--Create new resource from here.--}}
                {{--</p>--}}

                {{--@include('users.create')--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- end card-box -->--}}
        {{--</div>--}}
    {{--<!-- end row -->--}}


    <div class="row">
        <div class="col-lg-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">All Users</h4>
                <p class="text-muted font-14 m-b-30">
                    Here you will find all the resources to make actions on them.
                </p>

                <table data-page-length='50' id="datatable-users-buttons" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roles</th>
                            <th>Created by</th>
                            <th>Updated by</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Control</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($resources as $resource)
                            <tr>
                                <td>{{ $resource->id }}</td>
                                <td>{{ $resource->name }}</td>
                                <td>
                                    @foreach($resource->roles as $role)
                                        <span class="label {{ $role->class }}">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                <td>{{ ($resource->createdBy)? $resource->createdBy->name : '-'}}</td>
                                <td>{{ ($resource->updatedBy)? $resource->updatedBy->name : '-' }}</td>
                                <td>{{ $resource->created_at }}</td>
                                <td>{{ $resource->updated_at }}</td>
                                <td>
                                    <a href="{{ route('users.edit', [$resource->uuid]) }}" class="update-modal btn btn-sm btn-success" title="Update user">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('users.destroy', [$resource->uuid]) }}" class="confirm-delete btn btn-sm btn-danger" title="Delete user">
                                        <i class="fa fa-times"></i>
                                    </a>
                                    <a href="{{ route('users.reset_password', [$resource->uuid]) }}" class="btn btn-sm btn-warning" title="Reset password">
                                        <i class="fa fa-recycle"></i>
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

@section('scripts')
    <script>
        var tableDTUsers = $('#datatable-users-buttons').DataTable({
                lengthChange: false,
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    }
                ],
            });
        tableDTUsers.buttons().container().appendTo('#datatable-users-buttons_wrapper .col-md-6:eq(0)');

    </script>
@endsection
