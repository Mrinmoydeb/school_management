@extends('templates.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('admins.studentstore')}}" method="post">
            @csrf
            <div class="card">
            <div class="card-header">
                <div class="card-title">Student register</div>
            </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="student_name" type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="parent">Guardian’s Name
                        </label>
                        <input name="parent_name" type="text" class="form-control" id="parent" placeholder="Guardian’s Name">
                    </div>
                    <div class="form-group">
                        <label for="age">Student age
                        </label>
                        <input name="age" type="text" class="form-control" id="age" placeholder="Age">
                    </div>
                    <div class="form-group">
                        <label for="class">Class
                        </label>
                        <input name="class" type="text" class="form-control" id="class" placeholder="Class">
                    </div>
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input name="phone" type="text" class="form-control" id="name" placeholder="Subjects">
                    </div>
                    <div class="form-group">
                        <label for="address">Address
                        </label>
                        <input name="address" type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="address">section
                        </label>
                        <input name="section" type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="address">Create Roll no
                        </label>
                        <input name="roll_no" type="text" class="form-control" id="address" placeholder="Address">
                    </div>


                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <!-- <button class="btn btn-danger">Cancel</button> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
