<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h2>Update User</h4>
                <hr>

<div>
<form action="/edit" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="form-group">
                        <label for="stud_id">Student ID </label>
                        <input type="text" class="form-control" placeholder="Enter Student ID" name="stud_id" value="{{$data['stud_id']}}">
                        <span class="text-danger">@error('stud_id') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName" value="{{$data['lastName']}}">
                        <span class="text-danger">@error('lastName') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" value="{{$data['firstName']}}">
                        <span class="text-danger">@error('firstName') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="mi">Middle Initial</label>
                        <input type="text" class="form-control" placeholder="Enter Middle Initial" name="mi" value="{{$data['mi']}}">
                        <span class="text-danger">@error('mi') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="course">Course</label>
                        <input type="text" class="form-control" placeholder="Enter Course" name="course" value="{{$data['course']}}">
                        <span class="text-danger">@error('course') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="yearLevel">Year Level</label>
                        <input type="text" class="form-control" placeholder="Enter Year Level" name="yearLevel" value="{{$data['yearLevel']}}">
                        <span class="text-danger">@error('yearLevel') {{$message}} @enderror</span><br>
                    </div>

                    <div class="form-group">
                            <button class="btn btn-block btn-primary" type="submit">Update</button>
                    </div>
                    <br>
                </form>
    </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>