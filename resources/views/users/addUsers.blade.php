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
        <h3 class="alert alert-success">Thêm mới nhân viên</h3>
        <a href="{{ route('users.listUsers') }}" class="btn btn-outline-secondary mb-3 mt-3">Quay laị trang danh
            sách</a>
        <form action="{{ route('users.addPostUsers') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Tên nhân sự</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email">Email nhân sự</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phongban">Phòng ban nhân sự</label>
                <select name="phongban" id="phongban" class="form-control">
                    @foreach ($phongban as $value)
                        <option value="{{ $value->id }}">{{ $value->ten_donvi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tuoi">Tuổi nhân sự</label>
                <input type="number" class="form-control" id="tuoi" name="tuoi">
            </div>
            <button type="submit" class="btn btn-success mb-3 mt-3">Thêm mới</button>
        </form>
    </div>
</body>

</html>