<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Product Form</h3>
    <form action="/add" method="POST">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">Discription</label>
        <input type="text" name="discription"><br>
        <label for="">Amount</label>
        <input type="number" name="amount"><br>
        <label for="">Expier Date</label>
        <input type="date" name="expier_date"><br>
        <input type="submit" value="Add">
    </form>
    <a href="/view">View Products</a>
</body>
</html>
