<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello ^^</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listProducts as $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['name']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>