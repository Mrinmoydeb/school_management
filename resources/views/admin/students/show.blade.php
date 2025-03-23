@extends('templates.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Details</div>
            </div>
            <div class="card-body">

                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Roll No</th>
                            <th scope="col">Class</th>
                            <th scope="col">section</th>
                            <th scope="col">Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>611313</td>
                            <td>3</td>
                            <td>A</td>
                            <td>Subject A,subject B, subject C,subject D</td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="container-fluid">
                <h4 class="page-title pt-4">Marks</h4>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-stats card-warning">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Visitors</p>
                                            <h4 class="card-title">1,294</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-success">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-bar-chart"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Sales</p>
                                            <h4 class="card-title">$ 1,345</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-danger">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-newspaper-o"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Subscribers</p>
                                            <h4 class="card-title">1303</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-primary">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Order</p>
                                            <h4 class="card-title">576</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">

            <div class="card-body">

                <div class="card-header d-flex" style="justify-content: space-between;">
                    <div class="card-title">Asign Marks</div>
                </div>
                <div class="form-group has-success">
                    <label for="subject">Select Subjects</label>
                    <select name="subject" id="subject" class="form-control">
                        <option selected>Select Subjects</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mark">Mark</label>
                    <input name="marks" type="text" class="form-control" id="mark" placeholder="Mark">
                </div>

                <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <!-- <button class="btn btn-danger">Cancel</button> -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
