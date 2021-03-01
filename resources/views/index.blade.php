<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3 mb-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.index') }}">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register.index') }}">
                    Register
                </a>
            </li>
        </ul>
    </div>
</body>

</html>
