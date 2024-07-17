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
        <h3 class="btn btn-success">Danh sách sản phẩm</h3>

        <form action="" class="input-group" style="margin-top: 20px; margin-left: 1050px; margin-bottom: 10px;">
            <div class="form-group">
                <input type="text" class="form-control" name="key" placeholder="Tìm kiếm theo tên....">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-search"></i>
            </button>
        </form>

        <a href="{{ route('product.addProduct') }}" class="btn btn-success"><i
                class="bi bi-person-plus-fill text-white"></i> Thêm
            sản phẩm</a> 
        <br>
        <table class="table table-dark">    
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Luợt xem</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProduct as $key => $product)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->ten_danhmuc }}</td>
                        <td>{{ $product->view }}</td>
                        <td>
                            <a href="{{ route('product.updateProduct', $product->id) }}"><i
                                    class="bi bi-pencil-square text-warning px-1"></i></a>
                            <a href="{{ route('product.deleteProduct', $product->id) }}"><i
                                    class="bi bi-trash3-fill text-danger px-1"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</br>
    </div>
</body>

</html>