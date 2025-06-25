<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <title>58 Vape Store</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .notification-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .notification-title {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .notification-content {
            font-size: 1rem;
            margin-top: 5px;
            color: #555;
        }
        .notification-time {
            font-size: 0.9rem;
            color: #777;
            margin-top: 10px;
        }
        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 0.9rem;
            border-radius: 5px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<header class="flex flex-wrap md:flex-nowrap items-center justify-between whitespace-nowrap border-b border-solid border-b-[#333333] px-4 md:px-10 py-3">
  <!-- Logo and Navigation Links -->
  <div class="flex items-center gap-6 text-[#FFFFFF]">
    <!-- Logo -->
    <div class="size-4">
      <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"
          fill="currentColor"
        ></path>
      </svg>
    </div>
    <!-- Store Name and Links -->
    <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">58 Vape Store</h2>
    <nav class="flex gap-4">
      <a class="text-sm font-medium leading-normal hover:underline" href="{{ url('user') }}">Home</a>
      <a class="text-sm font-medium leading-normal hover:underline" href="{{ url('listbarang') }}">Keranjang</a>
      <a class="text-sm font-medium leading-normal hover:underline" href="{{ url('profil') }}">Profile</a>
    </nav>
  </div>

  <!-- Search Bar and Action Buttons -->
  <div class="flex items-center justify-end gap-4 mt-4 md:mt-0 flex-1">
    <!-- Search Bar -->
    <label class="flex w-full md:w-auto items-stretch h-10">
      <div class="flex items-center bg-[#333333] pl-4 rounded-l-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
          <path
            d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
          ></path>
        </svg>
      </div>
      <input
        type="text"
        placeholder="Search"
        class="flex-1 bg-[#333333] text-[#FFFFFF] placeholder:text-[#CBCBCB] focus:outline-none px-4 text-base font-normal rounded-r-xl"
      />
    </label>

    <!-- Buttons -->
    <div class="flex gap-2">
      <button
        class="h-10 px-4 bg-[#FFFFFF] text-black text-sm font-bold rounded-xl hover:bg-gray-200"
      >
        PRODUK BARU
      </button>
      <button
        class="h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold rounded-xl hover:bg-gray-700"
        onclick="window.location.href='/notif';"
        >
        Notifikasi
        </button>

      <button
            class="h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold rounded-xl hover:bg-red-700"
            onclick="confirmLogout()"
        >
            Log Out
    </button>

    </div>

    <!-- Profile Picture -->
  <!-- Profile Picture as Sidebar Toggle Button -->
<div
  class="hidden md:block w-10 h-10 bg-center bg-no-repeat bg-cover rounded-full cursor-pointer"
  style="background-image: url('images/IMG_2900.JPG');"
  aria-label="User Profile Picture"
  onclick="toggleSidebar()"
></div>

  </div>
</header>
<body class="relative flex flex-col min-h-screen bg-black dark group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>

<div class="layout-container flex flex-col flex-grow">
    <!-- Daftar Pemberitahuan -->
    <div class="container my-5">
        <!-- Contoh pemberitahuan -->
        <div class="notification-card" id="notif1">
            <button class="delete-btn" onclick="deleteNotification('notif1')">Hapus</button>
            <div class="notification-title">Promo Diskon Tersedia!</div>
            <div class="notification-content">Nikmati diskon hingga 20% untuk produk terpilih. Jangan lewatkan!</div>
            <div class="notification-time">Diposting 3 jam yang lalu</div>
        </div>

        <!-- Contoh pemberitahuan lainnya -->
        <div class="notification-card" id="notif2">
            <button class="delete-btn" onclick="deleteNotification('notif2')">Hapus</button>
            <div class="notification-title">Vape Mod Baru Tersedia!</div>
            <div class="notification-content">Mod Centaurus M200 yang baru kini tersedia. Cek sekarang juga!</div>
            <div class="notification-time">Diposting 1 hari yang lalu</div>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk menghapus notifikasi
    function deleteNotification(id) {
        const notifElement = document.getElementById(id);
        if (notifElement) {
            notifElement.remove();
            Swal.fire({
                icon: 'success',
                title: 'Notifikasi berhasil dihapus!',
                timer: 1500,
                showConfirmButton: false
            });
        }
    }
</script>

</body>
</html>
