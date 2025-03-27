@extends('templates.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <div class="card-header d-flex" style="justify-content: space-between;">
                    <div class="card-title">Subject</div>
                </div>
                <div class="form-group">
                    <label for="email">Subject</label>
                    <input name="Subject" type="email" class="form-control" id="email" placeholder="Student Subject">

                </div>
                <div class="form-group">
                    <label for="email">Class</label>
                    <input name="class" type="email" class="form-control" id="email" placeholder="Student Class">

                </div>


                <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
