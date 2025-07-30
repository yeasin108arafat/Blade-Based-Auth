<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 450px;">
            <h3 class="text-center mb-3">Register</h3>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-success w-100">Register</button>
                <div class="text-center mt-3">
                    <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
                </div>
            </form>
        </div>
    </div>
</body>

</html>