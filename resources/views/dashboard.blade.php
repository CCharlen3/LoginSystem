<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
    
</head>
<body>
    <div class="header2" style="margin-top:20px;">
        <h1 align='center'>Welcome to Dashboard</h1>
        <hr>
    </div>

    <table border=1>
        <thead>
            <div align='right' style="margin-right:350px;">
                <a href="editDatabase">Edit Database</a>
            </div><br><br>
            <div class="header1" style="margin-top:20px;">
                <br><h4 align='center' >Registered Users</h4>
                <th>Student ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Initial</th>
                <th>Course</th>
                <th>Year Level</th>
        </thead> 

         @foreach($users as $user)
        <tbody>
            <tr>
                <td>{{$user->stud_id}}</td>
                <td>{{$user->lastName}}</td>
                <td>{{$user->firstName}}</td>
                <td>{{$user->mi}}</td>
                <td>{{$user->course}}</td>
                <td>{{$user->yearLevel}}</td>
            </tr>
        </tbody>
        @endforeach
            </div>
    </table>
<br><br><br><br>
    <div align='right' style="margin-right:350px;">
        <a href="logout">Logout</a>
    </div><br><br>
</body>
</html>