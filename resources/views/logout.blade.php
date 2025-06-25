<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        /* Mengatur tema gelap */
        body {
            background-color: #121212;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container {
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .button {
            width: 100%;
            background-color: #6200ea;
            color: white;
            padding: 12px;
            font-size: 1.1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #3700b3;
        }

        .redirect-link {
            margin-top: 20px;
            font-size: 1rem;
            color: #6200ea;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Logout</h1>
        <p>Anda telah berhasil logout dari akun Anda.</p>
        
        <!-- Tombol untuk kembali ke halaman login -->
        <button class="button" onclick="window.location.href='/login'">Kembali ke Halaman Login</button>

        <div class="redirect-link" onclick="window.location.href='/login'">
            Atau, klik di sini untuk login kembali
        </div>
    </div>

</body>
</html>
