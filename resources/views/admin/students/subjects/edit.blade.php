@extends('templates.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="#" method="post">
            @csrf
            @method('PATCH')
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Update Subject</label>
                        <input name="subject" type="text" class="form-control" id="name" placeholder="Edit Subject" value="#">
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
