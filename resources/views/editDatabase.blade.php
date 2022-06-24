<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database</title>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <table class="table" border=1>
        <thead>
            <div class="header1" style="margin-top:20px;">
                <br><h3 align='center'>Edit Database</h3><br>
                <th>Student ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Initial</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Status</th>
                <th>Action</th>
                <th>Action</th>
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
                <td>{{$user->STATUS}}</td>
                <td align='center'><a style='text-decoration:none;' href={{"delete/".$user['id']}}>X</a></td>
                <td align='center'><a style='text-decoration:none;' href={{"edit/".$user['id']}}>Edit</a></td>     
            </tr>
        </tbody>
        @endforeach
            </div>
    </table> 

        <div><br><br><br>
            <div align='left' style="margin-left:350px;">
                <a style='text-decoration:none;' href="dashboard"><--- Go Back</a>
            </div><br><br>  
        </div>
</body>
</html>