<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/add" method="POST">
        @csrf
        <label for="">Code Number</label>
        <input type="number" name="codeNumber"><br>
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">Description</label>
        <input type="text" name="description"><br>
        <label for="">Expire Date</label>
        <input type="date" name="expire_date"><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>
