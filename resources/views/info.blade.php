<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cá nhân</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 8px;
        }

        header h1 {
            text-align: center;
            color: #000;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img {
            width: 150px;
            /* height: 150px; */
            border-radius: 10%;
            margin-right: 20px;
        }

        .info {
            flex: 1;
            margin-left: 15px;
        }

        .info h2 {
            color: #333;
            font-size: 1.5em;
        }

        .bio {
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            color: #666;
            margin-top: 20px;
        }
        section {
            margin-left: 20px;
        }
    </style>
    <div class="container">
        <header>
            <h1>Trang cá nhân của Minh</h1>
        </header>
        @foreach ($information as $values)
            <section class="profile">
                <img src="{{ asset('images/minh.jpg') }}" alt="Ảnh đại diện của bạn">
                <div class="info">
                    <!-- <h2>Thông tin cá nhân</h2> -->
                    <p><strong>Họ và tên:</strong> {{ $values['name'] }}</p>
                    <p><strong>Ngày sinh:</strong> {{ $values['birth'] }}</p>
                    <p><strong>Địa chỉ:</strong> {{ $values['home'] }}</p>
                    <p><strong>Email:</strong> {{ $values['email'] }}</p>
                </div>
            </section>

            <section class="bio">
                <h2>Giới thiệu bản thân</h2>
            </section>

            <footer>
                <p>Liên hệ: {{ $values['phone'] }}</p>
            </footer>
        @endforeach

    </div>
</body>

</html>