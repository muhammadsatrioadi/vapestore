<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Mode</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Kami Sedang Memperbaiki Aplikasi</h1>
            <p class="text-lg text-gray-300 mb-6">Kami sedang melakukan pemeliharaan sistem. Mohon tunggu sebentar.</p>
            <p class="text-sm text-gray-400">Kembali lagi nanti, kami akan segera hadir kembali.</p>
        </div>
    </div>

    <script>
        // Menampilkan SweetAlert setelah beberapa detik
        window.onload = function() {
            setTimeout(function() {
                Swal.fire({
                    title: 'Pemeliharaan Sistem',
                    text: 'Kami sedang melakukan pemeliharaan, harap bersabar.',
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            }, 1000); // 1 detik setelah halaman dimuat
        };
    </script>
</body>
</html>
