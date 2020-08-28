@extends('_layouts.dashboard')

@section('title') Permission Groups @endsection

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

                @include('permission_groups.create')
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

            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
