@extends('templates.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('admins.rollstore')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Create</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Add New Subject</label>
                        <input name="subject" type="text" class="form-control" id="name" placeholder="Create Subject">
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
