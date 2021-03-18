<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
            <label>
                <b>E-mail</b> <input type="text" name="email" />
            </label><br />
            <label>
                <b>Password</b> <input type="password" name="password" />
            </label><br />
            <button type="submit">Login</button>
    </form>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
</body>
</html>