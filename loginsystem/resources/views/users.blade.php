<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users Register page</h1>

    <form action="/register" method="post">

        {{ csrf_field() }}

        <label for="">Name: </label>
        <input type="text" name="name" id=""><br><br>

        <label for="">Email: </label>
        <input type="email" name="email" id=""><br><br>

        <label for="">Password: </label>
        <input type="password" name="password" id=""><br><br>

        <input type="submit" value="Regiter Now">

    </form>
    
</body>
</html>