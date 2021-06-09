<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Food Order System</title>
</head>
<body>
    <div class="login">
        <h1 class="text-center">Đăng nhập</h1>

        <!-- Login Form -->
        <form action="" method="POST" class="text-center">
            @include('errors.note')
            @csrf
            Email:
            <br>
            <input type="email" name="email" value="{{old('email')}}">
            <br><br>
            Password:
            <br>
            <input type="password" name="password">
            <br><br>
            <input type="checkbox" name="remember" value="Remember Me">Nhớ tôi
            <br><br>
            <input type="submit" name="submit" value="Login" class="btn-primary">

        </form>
        <!-- End Login Form -->
    </div>
</body>
</html>