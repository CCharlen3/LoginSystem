<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
    
<body>
    <div class="header">
        <h4 >Registration</h4>
    </div>

    <form action="{{route('register')}}" method="post">
    @if(Session::has('success'))
        <div class="alert alert-success" style='color:green'>{{Session::get('success')}}</div>
    @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger" style='color:red'>{{Session::get('fail')}}</div>
            @endif
            @csrf
                <div class="input">
                    <label for="stud_id">Student ID </label>
                    <input type="text" class="form-control" placeholder="Enter Student ID" name="stud_id" value="{{old('stud_id')}}">
                    <span class="text-danger" style='color:red'>@error('stud_id') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName" value="{{old('lastName')}}">
                    <span class="text-danger" style='color:red'>@error('lastName') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" value="{{old('firstName')}}">
                    <span class="text-danger" style='color:red'>@error('firstName') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <label for="mi">Middle Initial</label>
                    <input type="text" class="form-control" placeholder="Enter Middle Initial" name="mi" value="{{old('mi')}}">
                    <span class="text-danger" style='color:red'>@error('mi') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" placeholder="Enter Course" name="course" value="{{old('course')}}">
                    <span class="text-danger" style='color:red'>@error('course') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <label for="yearLevel">Year Level</label>
                    <input type="text" class="form-control" placeholder="Enter Year Level" name="yearLevel" value="{{old('yearLevel')}}">
                    <span class="text-danger"style='color:red'>@error('yearLevel') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <label for="yearLevel">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                    <span class="text-danger" style='color:red'>@error('password') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <button class="btn" type="submit">Register</button>
                </div>
                    <a href="/">Already registered? Login Here.</a>
    </form>
</body>
</html>