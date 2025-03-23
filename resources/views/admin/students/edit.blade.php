@extends('templates.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <div class="card-header d-flex" style="justify-content: space-between;">
                    <div class="card-title">Edit</div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
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
