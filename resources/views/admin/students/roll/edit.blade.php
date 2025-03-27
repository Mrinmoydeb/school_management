@extends('templates.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('admins.rolleupdate', $roll->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Update Roll No</label>
                        <input name="roll_no" type="text" class="form-control" id="name" placeholder="Enter name" value="{{$roll->roll_no}}">
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
