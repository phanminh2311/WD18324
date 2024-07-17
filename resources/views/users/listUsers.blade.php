<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h3 class="alert alert-primary">Danh sách</h3>
        <a href="{{ route('users.addUsers') }}" class="btn btn-success mb-3 mt-3"><i class="bi bi-person-plus-fill text-white"></i> Thêm
            nhân viên</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phòng Ban</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUsers as $key => $user)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->ten_donvi }}</td>
                    <td>
                        <a href=""><i class="bi bi-clipboard-data-fill text-primary-emphasis px-1"></i></a>
                        <a href="{{ route('users.updateUsers', $user->id) }}"><i class="bi bi-pencil-square text-warning px-1"></i></a>
                        <a href="{{ route('users.deleteUsers', $user->id) }}"><i class="bi bi-trash3-fill text-danger px-1"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>