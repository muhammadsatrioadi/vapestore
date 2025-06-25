<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800">
    <title>58 Vape Store</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" href="data:image/x-icon;base64,">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', 'Noto Sans', sans-serif;
        }
        .login-container {
            background-color: #121212;
            color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }
        .form-input {
            background-color: #333333;
            color: #2f2f2f;
            border: none;
            border-radius: 5px;
            padding: 0.75rem;
        }
        .btn-primary {
            background-color: #fbbf24;
            color: #121212;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #f9a825;
            color: #fff;
        }
    </style>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="login-container w-full max-w-sm">
        <h1 class="text-3xl font-bold mb-6 text-center">LOGIN</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- Tampilkan pesan error jika email salah --}}
            @if ($errors->has('email'))
                <div class="alert alert-danger mb-4 text-red-500">
                    {{ $errors->first('email') }}
                </div>
            @endif

            {{-- Input Email --}}
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-[#fbbf24]">Email</label>
                <input type="email" id="email" name="email" class="form-input w-full mt-1 @error('email') border-red-500 @enderror" placeholder="example@gmail.com" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Input Password --}}
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-[#fbbf24]">Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-input w-full mt-1 @error('password') border-red-500 @enderror" placeholder="Kata Sandi" required>
                @error('password')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Checkbox Remember Me --}}
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-[#fbbf24]" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="text-sm text-[#fbbf24]">Ingat Saya</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-sm text-[#fbbf24] hover:underline">Lupa Kata Sandi?</a>
            </div>

            {{-- Tombol Login --}}
            <div class="text-center">
                <button type="submit" class="btn-primary w-full">Masuk</button>
            </div>
        </form>

        {{-- Daftar Link --}}
        <p class="text-center text-sm mt-4 text-white">
            Belum punya akun? <a href="{{ route('register') }}" class="text-[#fbbf24] hover:underline">Daftar Sekarang</a>
        </p>
    </div>
</body>
</html>
