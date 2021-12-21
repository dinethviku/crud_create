<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Discription</th>
                <th>Amount</th>
                <th>Expier Date</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            @foreach ($products as $product )
            <tr>
                <td>{{ $product->id }}</td>
                <td><a href="/view/{{ $product->id }}">{{ $product->name }}</a></td>
                <td>{{ $product->discription }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->expier_date }}</td>
                <td>{{ $product->created_at}}</td>
                <td>{{ $product->updated_at}}</td>
                <td><a href="/delete/{{ $product->id }}">Delete</a></td>
            </tr>

            @endforeach
        </table>
        <button><a href="/">Back to Home</a></button>
    </body>
</html>
