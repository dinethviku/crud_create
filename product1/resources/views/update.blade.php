<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="/update" method="POST">
        @csrf
        <label for="">Id</label>
        <input type="text" name="id" value="{{ $product->id }}"><br>
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $product->name }}"><br>
        <label for="">Discription</label>
        <input type="text" name="discription" value="{{ $product->discription }}"><br>
        <label for="">Amount</label>
        <input type="number" name="amount" value="{{ $product->amount }}"><br>
        <label for="">Expier Date</label>
        <input type="date" name="expier_date" value="{{$product->expier_date}}"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
