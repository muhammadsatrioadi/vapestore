<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>58 Vape Store</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <!-- Tambahkan SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .success-container {
            background-color: #121212;
            color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .btn-ok {
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

        .btn-ok:hover {
            background-color: #f9a825;
            color: #fff;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-black" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="success-container">
        <h1 class="text-3xl font-bold mb-4">Payment Berhasil!</h1>
        <p class="text-lg mb-6">Terima kasih telah melakukan pembayaran. Pesanan Anda akan segera diproses.</p>
        <button class="btn-ok" onclick="showSuccessAlert()">OK</button>
    </div>

    <script>
        function showSuccessAlert() {
            // SweetAlert sukses
            Swal.fire({
                icon: 'success',
                title: 'Pembayaran Berhasil!',
                text: 'Terima kasih telah melakukan pembayaran. Anda akan segera dialihkan ke halaman pengguna.',
                confirmButtonColor: '#fbbf24',
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke URL tujuan setelah menutup alert
                    window.location.href = '{{ url("user") }}';
                }
            });
        }
    </script>
</body>
</html>
