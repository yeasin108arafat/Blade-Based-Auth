<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyApp</a>
            <div class="d-flex">
                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Are you sure, you want to logout?')">
                    @csrf
                    <button class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            👋 Welcome back, {{ Auth::user()->name }}!
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">View and update your profile information.</p>
                        <a href="#" class="btn btn-sm btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">Check your recent activities and reports.</p>
                        <a href="#" class="btn btn-sm btn-success">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Settings</h5>
                        <p class="card-text">Manage your account settings.</p>
                        <a href="#" class="btn btn-sm btn-warning">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>