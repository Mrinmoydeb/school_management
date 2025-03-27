@extends('templates.base')
@section('content')
<div class="col-md-12">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <div class="card">
        <!-- <div class="row">
            <div class="col-md-3">
                <div class="form-group has-success">
                    <label for="email">Roll No</label>
                    <select name="" id="" class="form-control">
                        <option selected>Select</option>
                        <option value="">44545</option>
                        <option value="">11156</option>
                        <option value="">321611</option>
                        <option value="">11231</option>
                        <option value="">20364</option>
                    </select>
                </div>
            </div>

            <div class="" style="text-align: center;align-items: center;display: flex; flex-direction:column; justify-content: center;">

                <button type="submit" class="btn btn-success mt-4">Filter</button>
            </div>
        </div> -->
        <div class="card-header d-flex" style="justify-content: space-between;">
            <div class="card-title"></div>
            <a href="{{route('admins.subjectcreate')}}" class="btn btn-primary">Add new</a>
        </div>
        <div class="card-body">
            <table class="table table-head-bg-success">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                    <tr>
                        <td></td>
                        <td>
                            <a href="{{route('admins.studentshow', $subject->id)}}">{{$subject->subject_name}}</a>
                        </td>
                        <td>{{$subject->created_at}}</td>

                        <td>
                            <a href="{{route('admins.subjectEdit', 1)}}" data-toggle="tooltip" title="Edit Task" class="btn btn-link <btn-simple-primary">
                                <i class="la la-edit"></i>
                            </a>
                            <button type="submit" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
                                <i class="la la-times"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="card-body">
                <p class="demo">
                <ul class="pagination pg-primary">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
