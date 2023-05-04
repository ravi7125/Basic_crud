<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>
<body>
    <form action="" method="post">
        @csrf
name:-<input type="name" name="name">
@error('name')
<strong>{{$message}}</strong>
@enderror
<br>
<br>
email:<input type="email" name="email">
@error('email')
<strong>{{$message}}</strong>
@enderror
<br>
<br>
password: <input type="password" name="password" id="">
@error('password')
<strong>{{$message}}</strong>
@enderror
<br>
<br>
city <input type="text" name="city" id="">
<br><br>
country: <input type="text" name="country" id="">
<br><br>
state: <input type="text" name="state" id="">
<br><br>
gender:<select name="gender" id="">
<option value="">select</option>
    <option value="male">male</option>
    <option value="female">female</option>
</select>
<br><br>
<input type="submit" name="" id="">
    </form>
</body>
</html>