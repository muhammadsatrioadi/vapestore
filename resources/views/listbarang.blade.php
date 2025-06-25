<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <title>58 Vape Store</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .cart-container {
            background-color: #121212;
            color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
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

        .btn-danger {
            background-color: #e63946;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-danger:hover {
            background-color: #d62828;
        }

        .btn-secondary {
            background-color: #333333;
            color: #ffffff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-secondary:hover {
            background-color: #444444;
        }

        .form-input {
            background-color: #333333;
            color: #000;
            border: none;
            border-radius: 5px;
            padding: 0.5rem;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }

        .product-card {
            background-color: #1a1a1a;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="relative flex size-full min-h-screen flex-col bg-black dark group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <!-- Header Section -->
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
                    <button class="h-10 px-4 bg-[#FFFFFF] text-black text-sm font-bold rounded-xl hover:bg-gray-200">
                        PRODUK BARU
                    </button>
                    <button class="h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold rounded-xl hover:bg-gray-700" onclick="window.location.href='/notif';">
                        Notifikasi
                    </button>
                    <button class="h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold rounded-xl hover:bg-red-700" onclick="confirmLogout()">
                        Log Out
                    </button>
                </div>

                <!-- Profile Picture -->
                <!-- Profile Picture as Sidebar Toggle Button -->
                <div class="hidden md:block w-10 h-10 bg-center bg-no-repeat bg-cover rounded-full cursor-pointer" style="background-image: url('images/IMG_2900.JPG');" aria-label="User Profile Picture" onclick="toggleSidebar()"></div>
            </div>
        </header>

        <!-- Product Display Section -->
        <div class="p-10">
            <div class="cart-container mx-auto max-w-6xl">
                <h1 class="text-3xl font-bold mb-6">Produk Tersedia</h1>
                <div class="product-grid">
                <div class="summary-card">
                    <h2 class="text-2xl font-bold mb-4">Ringkasan Pesanan</h2>
                    <?php
                    $totalPrice = 0;
                    foreach ($carts as $cart) {
                        $totalPrice += $cart->produk->harga;
                        ?>
                        <div class="flex justify-between mb-2">
                            <span>{{ $cart->produk->nama }}</span>
                            <span>Rp.{{ number_format($cart->produk->harga, 0, ',', '.') }},-</span>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="flex justify-between border-t border-gray-500 pt-2">
                        <span class="font-bold">Total</span>
                        <span class="font-bold">Rp.{{ number_format($totalPrice, 0, ',', '.') }},-</span>
                    </div>
                </div>
            </div>

                <div class="mt-6 text-right">
                    <button 
                        class="btn-primary" 
                        onclick="window.location.href='{{ url('checkout') }}'"
                    >
                        Checkout
                    </button>
                </div>
            </div>
        </div>


        <a href="/checkout" class="text-[#fbbf24] text-sm font-semibold">Shop Now</a>


        <script>
            function confirmLogout() {
                Swal.fire({
                    title: 'Yakin Ingin Keluar?',
                    text: 'Anda akan Keluar!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya,Ingin Keluar!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ url('logout') }}';
                    }
                });
            }
        </script>

        <!-- Footer Section -->
       
    </div>

    <footer class="bg-gray-800 text-white text-center py-4">
            <p>Follow us on social media:</p>
            <a href="#" class="text-white mx-2">Facebook</a>
            <a href="https://www.instagram.com/msatrioadi/" class="text-white mx-2">Instagram</a>
            <a href="#" class="text-white mx-2">Twitter</a>
            <p class="mt-3">&copy; 58 Vape Store. All rights reserved.</p>
        </footer>
</body>
</html>
