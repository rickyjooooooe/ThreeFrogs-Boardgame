<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Admin Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow-sm" style="width: 400px;">
    <h3 class="text-center">Set Admin Password</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('admin.storepassword') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="password" class="form-label">New Password:</label>
            <input type="password" name="password" id="password" class="form-control" required minlength="8">
        </div>
        <button type="submit" class="btn btn-primary w-100">Set Password</button>
    </form>
</div>

</body>
</html>
