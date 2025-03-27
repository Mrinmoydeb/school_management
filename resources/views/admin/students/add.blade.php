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
                        <label for="dob">Date of birth
                        </label>
                        <input name="dob" type="date" class="form-control" id="age" placeholder="Date of birth">
                    </div>
                    <div class="form-group">
                        <label for="parent">Email
                        </label>
                        <input name="email" type="text" class="form-control" id="parent" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="parent">Phone
                        </label>
                        <input name="phone" type="text" class="form-control" id="parent" placeholder="Phone no">
                    </div>

                    <div class="form-group">
                        <label for="class">Address
                        </label>
                        <input name="address" type="text" class="form-control" id="class" placeholder="Your adderss">
                    </div>
                    <div class="form-group">
                        <label for="class">City
                        </label>
                        <input name="city" type="text" class="form-control" id="class" placeholder="Your city">
                    </div>

                    <div class="form-group">
                        <label for="email">Add Roll No</label>
                        <select name="roll_id" id="" class="form-control">
                            <option selected>Select</option>
                            @foreach($roll_numbers as $roll_number)
                            <option value="{{$roll_number->roll_no}}">{{$roll_number->roll_no}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gender</h4>
                                <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                            </div>
                            <div class="card-body">
                                <p class="demo">
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="gender" value="male">
                                        <span class="form-radio-sign">Male</span>
                                    </label>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="gender" value="female">
                                        <span class="form-radio-sign">Female</span>
                                    </label>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="gender" value="other">
                                        <span class="form-radio-sign">Other</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Subjects</label>
                        <select name="roll_id" id="" class="form-control">
                            <option selected>Select</option>

                            <option value="#">dummy</option>

                        </select>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




@endsection
