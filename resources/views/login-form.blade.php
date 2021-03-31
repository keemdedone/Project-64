<!DOCTYPE html>
<html lang="en" class="bg">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" >
    <title>Login</title>
</head>

<body>
    <form action="{{ route('authenticate') }}" method="post">
        <table align="center" border="0" bo class="table-login" style="margin-top: 150px;">
            <tr>
                <td>
                    <h1 align="center">Longin</h1>
                    <table align="center" border="0" class=""  style="width: 500px;">
                        @csrf
                        <tr>
                            <td>E-mail </td> 
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="email"  />
                            </td>
                        </tr>
                        <tr>
                            <td> Password </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="password" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit">Login</button>
                            </td>
                        </tr>
                    </table>

                    <table align="center" border="1" class="status-error" >
                        <tr>
                            @error('email')
                                <td><div>{{ $message }}</div></td>
                            @enderror      
                        </tr>
                    </table>
                </td>
            </tr>
        </table>           
    </form>      
</body>
</html>