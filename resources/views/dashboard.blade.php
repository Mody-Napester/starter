@extends('_layouts.dashboard')

@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Dropdown One</a>
                    <a class="dropdown-item" href="#">Dropdown Two</a>
                    <a class="dropdown-item" href="#">Dropdown Three</a>
                    <a class="dropdown-item" href="#">Dropdown Four</a>
                </div>
            </div>

            <h4 class="page-title">Dashboard 2</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard 2</li>
            </ol>

        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-attach-money text-primary"></i>
                <h2 class="m-0 text-dark counter font-600">50568</h2>
                <div class="text-muted m-t-5">Total Revenue</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-add-shopping-cart text-pink"></i>
                <h2 class="m-0 text-dark counter font-600">1256</h2>
                <div class="text-muted m-t-5">Sales</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-store-mall-directory text-info"></i>
                <h2 class="m-0 text-dark counter font-600">18</h2>
                <div class="text-muted m-t-5">Stores</div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="md md-account-child text-custom"></i>
                <h2 class="m-0 text-dark counter font-600">8564</h2>
                <div class="text-muted m-t-5">Users</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="text-dark header-title m-t-0">Total Revenue</h4>

                <div class="row">
                    <div class="col-md-12 col-xl-8">
                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #36404a;"></i>Desktops</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5><i class="fa fa-circle m-r-5" style="color: #bbbbbb;"></i>Mobiles</h5>
                                </li>
                            </ul>
                        </div>

                        <div id="morris-area-with-dotted" style="height: 300px;"></div>

                    </div>


                    <div class="col-md-12 col-xl-4">

                        <p class="font-600">iMacs <span class="text-primary pull-right">80%</span></p>
                        <div class="progress m-b-30">
                            <div class="progress-bar progress-bar-primary progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div><!-- /.progress-bar .progress-bar-danger -->
                        </div><!-- /.progress .no-rounded -->

                        <p class="font-600">iBooks <span class="text-pink pull-right">50%</span></p>
                        <div class="progress m-b-30">
                            <div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                            </div><!-- /.progress-bar .progress-bar-pink -->
                        </div><!-- /.progress .no-rounded -->

                        <p class="font-600">iPhone 5s <span class="text-info pull-right">70%</span></p>
                        <div class="progress m-b-30">
                            <div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            </div><!-- /.progress-bar .progress-bar-info -->
                        </div><!-- /.progress .no-rounded -->

                        <p class="font-600">iPhone 6 <span class="text-warning pull-right">65%</span></p>
                        <div class="progress m-b-30">
                            <div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                            </div><!-- /.progress-bar .progress-bar-warning -->
                        </div><!-- /.progress .no-rounded -->

                        <p class="font-600">iPhone 6s <span class="text-success pull-right">40%</span></p>
                        <div class="progress m-b-30">
                            <div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            </div><!-- /.progress-bar .progress-bar-success -->
                        </div><!-- /.progress .no-rounded -->

                    </div>

                </div>

                <!-- end row -->

            </div>

        </div>

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12 col-xl-4">
            <div class="card-box">
                <div class="bar-widget">
                    <div class="table-box">
                        <div class="table-detail">
                            <div class="iconbox bg-info">
                                <i class="icon-layers"></i>
                            </div>
                        </div>

                        <div class="table-detail">
                            <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                            <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                        </div>
                        <div class="table-detail text-right">
                            <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2" data-width="120" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-xl-4">
            <div class="card-box">
                <div class="bar-widget">
                    <div class="table-box">
                        <div class="table-detail">
                            <div class="iconbox bg-custom">
                                <i class="icon-layers"></i>
                            </div>
                        </div>

                        <div class="table-detail">
                            <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                            <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                        </div>
                        <div class="table-detail text-right">
                            <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45">1/5</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-xl-4">
            <div class="card-box">
                <div class="bar-widget">
                    <div class="table-box">
                        <div class="table-detail">
                            <div class="iconbox bg-danger">
                                <i class="icon-layers"></i>
                            </div>
                        </div>

                        <div class="table-detail">
                            <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
                            <h5 class="text-muted m-b-0 m-t-0">Visiters</h5>
                        </div>
                        <div class="table-detail text-right">
                            <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">1/5</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <!-- Transactions -->
        <div class="col-lg-12 col-xl-4">
            <div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Last Transactions</b></h4>

                <div class="nicescroll mx-box">
                    <ul class="list-unstyled transaction-list m-r-5">
                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Advertising</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">07/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">Support licence</span>
                            <span class="pull-right text-danger tran-price">-$965</span>
                            <span class="pull-right text-muted">07/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Extended licence</span>
                            <span class="pull-right text-success tran-price">+$830</span>
                            <span class="pull-right text-muted">07/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Advertising</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">05/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">New plugins added</span>
                            <span class="pull-right text-danger tran-price">-$452</span>
                            <span class="pull-right text-muted">05/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Google Inc.</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">04/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">Facebook Ad</span>
                            <span class="pull-right text-danger tran-price">-$364</span>
                            <span class="pull-right text-muted">03/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">New sale</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">03/09/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-download text-success"></i>
                            <span class="tran-text">Advertising</span>
                            <span class="pull-right text-success tran-price">+$230</span>
                            <span class="pull-right text-muted">29/08/2015</span>
                            <span class="clearfix"></span>
                        </li>

                        <li>
                            <i class="ti-upload text-danger"></i>
                            <span class="tran-text">Support licence</span>
                            <span class="pull-right text-danger tran-price">-$854</span>
                            <span class="pull-right text-muted">27/08/2015</span>
                            <span class="clearfix"></span>
                        </li>

                    </ul>
                </div>
            </div>

        </div> <!-- end col -->

        <!-- CHAT -->
        <div class="col-lg-12 col-xl-4">
            <div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Chat</b></h4>

                <div class="chat-conversation">
                    <ul class="conversation-list nicescroll">
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="assets/images/avatar-1.jpg" alt="male">
                                <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>John Deo</i>
                                    <p>
                                        Hello!
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-5.jpg" alt="Female">
                                <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Smith</i>
                                    <p>
                                        Hi, How are you? What about our next meeting?
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="assets/images/avatar-1.jpg" alt="male">
                                <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>John Deo</i>
                                    <p>
                                        Yeah everything is fine
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-5.jpg" alt="male">
                                <i>10:02</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Smith</i>
                                    <p>
                                        Wow that's great
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-9 chat-inputbar">
                            <input type="text" class="form-control chat-input" placeholder="Enter your text">
                        </div>
                        <div class="col-sm-3 chat-send">
                            <button type="submit" class="btn btn-md btn-info btn-block waves-effect waves-light">Send</button>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end col-->


        <!-- Todos app -->
        <div class="col-lg-12 col-xl-4">
            <div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Todo</b></h4>
                <div class="todoapp">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4>
                        </div>
                        <div class="col-sm-6">
                            <a href="" class="pull-right btn btn-primary btn-sm waves-effect waves-light" id="btn-archive">Archive</a>
                        </div>
                    </div>

                    <ul class="list-group no-margn nicescroll todo-list" style="height: 280px" id="todo-list"></ul>

                    <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                        <div class="row">
                            <div class="col-sm-9 todo-inputbar">
                                <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                            </div>
                            <div class="col-sm-3 todo-send">
                                <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection