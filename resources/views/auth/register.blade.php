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
        .register-container {
            background-color: #121212;
            color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }
        .form-input {
            background-color: #2f2f2f;
            color: #2f2f2f; /* Corrected the text color to white */
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
    <div class="register-container w-full max-w-sm">
        <h1 class="text-3xl font-bold mb-6 text-center">DAFTAR</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-[#fbbf24]">Nama</label>
                <input id="name" type="text" class="form-input w-full mt-1 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-[#fbbf24]">Email</label>
                <input id="email" type="email" class="form-input w-full mt-1 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-[#fbbf24]">Kata Sandi</label>
                <input id="password" type="password" class="form-input w-full mt-1 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-sm font-semibold text-[#fbbf24]">Konfirmasi Kata Sandi</label>
                <input id="password-confirm" type="password" class="form-input w-full mt-1" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="text-center">
                <button type="submit" class="btn-primary w-full">Daftar</button>
            </div>
        </form>

        <p class="text-center text-sm mt-4">
            Sudah punya akun? <a href="/login" class="text-[#fbbf24] hover:underline">Masuk Sekarang</a>
        </p>
    </div>
</body>
</html>
