<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - DevSpark</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/devspark.css') }}">
    <style>
        body {
            background-color: var(--bg-light);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-card h2 {
            color: var(--primary-color);
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
        }
        .error-message {
            color: #ef4444;
            font-size: 14px;
            margin-top: 5px;
        }
        .btn-block {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>DevSpark Admin</h2>
        
        <!-- 
            Form login diarahkan ke route 'login.post' dengan method POST.
            Penting: selalu gunakan @csrf pada form di Laravel untuk keamanan.
        -->
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Masuk Dashboard</button>
            <a href="/" class="btn btn-outline btn-block mt-15">Kembali ke Website</a>
        </form>
    </div>

</body>
</html>
