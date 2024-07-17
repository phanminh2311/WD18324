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
        <h3 class="alert alert-success">Cập nhật thông tin nhân viên</h3>
        <a href="{{ route('product.listProduct') }}" class="btn btn-outline-success">Quay laị trang danh
            sách</a>
        <form action="{{ route('product.updatePostProduct') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $product->id }}" name="idProduct">
            <div class="mb-3">
            <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
            <label for="category">Danh mục sản phẩm</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($category as $value)
                        <option 
                            @if ($product->category_id === $value->id)
                                selected
                            @endif
                            value="{{ $value->id }}">{{ $value->ten_danhmuc }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="view">Lượt xem</label>
                <input type="number" class="form-control" id="view" name="view" value="{{ $product->view }}">
            </div>
            
            <button type="submit" class="btn btn-success mb-3 mt-3">Cập nhật sản phẩm</button>
        </form>
    </div>
</body>

</html>