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
                    <h4 class="header-title m-t-0">Validation type</h4>
                    <p class="text-muted font-14 m-b-20">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form class="" action="#">
                        <div class="form-group">
                            <label>Required</label>
                            <input type="text" class="form-control" required placeholder="Name"/>
                        </div>

                        <div class="form-group">
                            <label>Equal To</label>
                            <div>
                                <input type="password" id="pass2" class="form-control" required
                                       placeholder="Password"/>
                            </div>
                            <div class="m-t-10">
                                <input type="password" class="form-control" required
                                       data-parsley-equalto="#pass2"
                                       placeholder="Re-Type Password"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control" required
                                       parsley-type="email" placeholder="Enter a valid e-mail"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <div>
                                <input parsley-type="url" type="url" class="form-control"
                                       required placeholder="URL"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Digits</label>
                            <div>
                                <input data-parsley-type="digits" type="text"
                                       class="form-control" required
                                       placeholder="Enter only digits"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <div>
                                <input data-parsley-type="number" type="text"
                                       class="form-control" required
                                       placeholder="Enter only numbers"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alphanumeric</label>
                            <div>
                                <input data-parsley-type="alphanum" type="text"
                                       class="form-control" required
                                       placeholder="Enter alphanumeric value"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <div>
                                <textarea required class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Min Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                       data-parsley-minlength="6" placeholder="Min 6 chars."/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Max Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                       data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Range Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                       data-parsley-length="[5,10]"
                                       placeholder="Text between 5 - 10 chars length"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Min Value</label>
                            <div>
                                <input type="text" class="form-control" required
                                       data-parsley-min="6" placeholder="Min value is 6"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Max Value</label>
                            <div>
                                <input type="text" class="form-control" required
                                       data-parsley-max="6" placeholder="Max value is 6"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Range Value</label>
                            <div>
                                <input class="form-control" required type="text" min="6"
                                       max="100" placeholder="Number between 6 - 100"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Regular Exp</label>
                            <div>
                                <input type="text" class="form-control" required
                                       data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                       placeholder="Hex. Color"/>
                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="createResource">
                </div>
            </div>
        </div>
        <!-- end card-box -->
        </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">Buttons example</h4>
                <p class="text-muted font-14 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                </p>

                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection