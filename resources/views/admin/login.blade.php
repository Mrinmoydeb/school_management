<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assets/css/ready.css">
    <link rel="stylesheet" href="/assets/css/demo.css">
</head>

<body>
    <div class="wrapper ">

        <div class="container">
            <h4 class="pt-4 text-center">Login</h4>
            <form action="{{route('auth.check')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="width: 50%;justify-content: center;display: flex;margin: 0 auto;">
                            <div class="card-body">
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>

                                <div class="card-action">
                                    <button class="btn btn-success">login</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>

</body>
<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>

</html>
