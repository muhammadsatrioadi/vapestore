<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <title>58 Vape Store - Checkout</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <style>
        /* Custom styles for checkout page */
        .checkout-container {
            background-color: #121212;
            color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .form-label {
            color: #fbbf24;
            font-weight: bold;
        }

        .form-input {
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 0.5rem;
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

        .summary-card {
            background-color: #333333;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="relative flex size-full min-h-screen flex-col bg-black dark group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <!-- Header Section (unchanged) -->
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#333333] px-10 py-3">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-4 text-[#FFFFFF]">
                    <div class="size-4">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"
                                fill="currentColor"
                            ></path>
                        </svg>
                    </div>
                    <h2 class="text-[#FFFFFF] text-lg font-bold leading-tight tracking-[-0.015em]">58 Vape Store</h2>
                    <a class="text-[#FFFFFF] text-sm font-medium leading-normal" href="{{ url('user') }}">Home</a>
                </div>
                <div class="flex items-center gap-9">
                    <a class="text-[#FFFFFF] text-sm font-medium leading-normal" href="{{ url('listbarang') }}">Keranjang</a>                    
                    <a class="text-[#FFFFFF] text-sm font-medium leading-normal" href="{{ url('profil') }}">Profil</a>
                </div>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <label class="flex flex-col min-w-40 !h-10 max-w-64">
                    <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                        <div
                            class="text-[#CBCBCB] flex border-none bg-[#333333] items-center justify-center pl-4 rounded-l-xl border-r-0"
                            data-icon="MagnifyingGlass"
                            data-size="24px"
                            data-weight="regular"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                                ></path>
                            </svg>
                        </div>
                        <input
                            placeholder="Cari"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#FFFFFF] focus:outline-0 focus:ring-0 border-none bg-[#333333] focus:border-none h-full placeholder:text-[#CBCBCB] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                            value=""
                        />
                    </div>
                </label>
                <div class="flex gap-2">
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#FFFFFF] text-black text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">PRODUK BARU</span>
                    </button>
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Notifikasi</span>
                    </button>

                    <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold leading-normal tracking-[0.015em]"
                        onclick="window.location.href='{{ url('logout') }}'"
                    >
                        Keluar
                    </button>
                </div>
                <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://cdn.usegalileo.ai/sdxl10/d4c80c00-474a-4e28-b197-4f2bb577af26.png");'
                ></div>
            </div>
        </header>



        


        <!-- Checkout Section -->

        <div class="p-10">
          
        <div class="container">
        <h2 class="text-center">Cek Ongkir</h2>
        <form id="ongkirForm">
            <div class="form-group">
                <label for="origin">Kota Asal:</label>
                <input type="text" id="origin" name="origin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="destination">Kota Tujuan:</label>
                <input type="text" id="destination" name="destination" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="weight">Berat (gram):</label>
                <input type="number" id="weight" name="weight" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cek Ongkir</button>
        </form>
        <div id="result" class="mt-3"></div>
        </div>

      




                <h1 class="text-3xl font-bold mb-6">Pembayaran</h1>

                

                

                <!-- Payment Button -->
                <div class="mt-6 text-right">
                    <button 
                        class="btn-primary" 
                        onclick="window.location.href='{{ url('sukses') }}'"
                    >
                        Konfirmasi dan Bayar
                    </button>
                </div>

            </div> 
        </div>

        <!-- Footer Section -->
        <footer class="bg-gray-800 text-white text-center py-4">
        <p>Follow us on social media:</p>
        <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i> Facebook</a>
        <a href="https://www.instagram.com/msatrioadi/" class="text-white mx-2"><i class="bi bi-instagram"></i> Instagram</a>
        <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i> Twitter</a>
        <p class="mt-3">© 58 Vape Store. All rights reserved.</p>
    </footer>
    </div>
</body>
</html>
