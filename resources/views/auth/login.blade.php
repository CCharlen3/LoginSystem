<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="/css/style.css" rel="stylesheet">  
</head>
    

</head>
<body>
    <div class="header">
        <h4>Login</h4>
    </div>

    <form action="{{route('login-user')}}" method="post">
    @if(Session::has('success'))
        <div class="alert alert-success" style='color:green'>{{Session::get('success')}}</div>
    @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger" style='color:red'>{{Session::get('fail')}}</div>
            @endif
            @csrf
                <div class="input">
                    <label for="stud_id">User ID </label>
                    <input type="text" class="form-control" placeholder="Enter User ID" name="stud_id" value="{{old('stud_id')}}">
                    <span class="text-danger" style='color:red'>@error('stud_id') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <label for="yearLevel">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
                    <span class="text-danger" style='color:red'>@error('password') {{$message}} @enderror</span>
                </div>
                <div class="input">
                    <button class="btn" type="submit">Login</button>
                </div>
                    <a href="registration">Not yet registered? Register Here.</a>
    </form>
</body>
</html>