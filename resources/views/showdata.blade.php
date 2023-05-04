<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/showdata" method='GET'>
@csrf
<table border="2">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>city</th>
        <th>country</th>
        <th>state</th>
        <th>gender</th>
    </tr>
    @foreach($signup as $row)
    <tr>
        <td>{{ $row['id']}}</td>
        <td>{{ $row['name'] }}</td>
        <td>{{ $row['email']}}</td>
        <td>{{ $row['password'] }}</td>
        <td>{{ $row['city'] }}</td>
        <td>{{ $row['country']}}</td>
        <td>{{ $row['state']}}</td>
        <td>{{ $row['gender']}}</td>
        <td><a href="{{'delete/'.$row['id']}}">delete</a></td>
        <td><a href="{{'edit/'.$row['id']}}">edit</a></td>
    </tr>
    @endforeach
</table>
</form>
 
</body>
</html>
