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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('hidden');
        }
    </script>
    <style>
      
    



        /* Jumbotron Custom Style */
        .jumbotron-custom {
            background-image: url('/images/58 Vape store.png');
            background-size: cover; /* Memastikan gambar menutupi seluruh area */
            background-position: center; /* Posisi gambar di tengah */
            background-repeat: no-repeat; /* Gambar tidak diulang */
            background-color: #333; /* Fallback warna jika gambar gagal dimuat */
            color : #fff ; /* Warna teks */
            padding: 5rem 1rem; /* Ruang di dalam jumbotron */
            border-radius: 10px; /* Sudut melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Bayangan elemen */
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6); /* Bayangan teks */
            min-height: 300px; /* Menjamin elemen cukup tinggi */
        }


        .jumbotron-custom h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color : #fff ; /* Warna teks */

        }

        .jumbotron-custom p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .jumbotron-custom .btn {
            background-color: #fbbf24;
            color: #121212;
            border: none;
            padding: 0.75rem 2.5rem;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            margin-top: 100px; /* Adjust this value to move the button down */
        }


        .jumbotron-custom .btn:hover {
            background-color: #f9a825;
            color: #fff;
        }

        /* Promo Carousel Custom Style */
        .carousel-inner img {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 1rem;
            border-radius: 10px;
            color: #fff;
        }

        .carousel-caption h5 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .carousel-caption p {
            font-size: 1rem;
        }

        /* Jumbotron Styling */
.jumbotron-custom {
    background-color: rgba(255, 255, 255, 0.37); /* Latar belakang putih dengan transparansi */
    color: rgba(0, 0, 0, 0.67); /* Tulisan hitam dengan transparansi */
    border-radius: 0; /* Tanpa radius */
}

.text-center.mb-4.text-white {
    font-size: 2.5rem; /* Adjust the font size */
    background-color: #fbbf24; /* Add the background color */
    padding: 0,5rem; /* Add padding to make the background more visible */
    border-radius: 8px; /* Optional: add rounded corners */
    color: #121212; /* Ensure the text color is dark for readability */
    margin-top: 100px; /* Adjust this value to move the button down */

}


/* Card Styling */
.card {
    width: 100%;
    transition: transform 0.3s ease; /* Tambahkan efek transisi untuk hover */
}

/* Card Hover Effect */
.card:hover {
    transform: scale(1.03); /* Membesarkan kartu saat hover */
}

/* Card Wrapper */
.card-wrapper {
    display: flex; /* Agar kartu berada dalam satu baris */
    transition: transform 0.3s ease; /* Transisi halus saat scroll */
}




.card:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}



.price {
  font-size: 1.2rem;
  color: #ff5733;
  font-weight: bold;
}



.content {
  position: relative;
  z-index: 1;
  color: #ffffff; /* Pastikan teks berwarna putih atau warna kontras lainnya */
}







    </style>
</head>
<body class="relative flex size-full min-h-screen flex-col bg-black dark group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <!-- Header Section (unchanged) -->
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



         <!-- Jumbotron -->
 

    <div class="p-5 mb-4 jumbotron-custom text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"></h1>
            <p class="col-md-8 mx-auto fs-4"></p>
            <button class="btn btn-outline-light" type="button">Shop Now</button>
        </div>
    </div>
    
    <h2 class="text-center mb-4 text-white">Promo Bulan Ini</h2>

    <!-- promo -->
    
    <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                    <div class="carousel-item active">
                <img src="/images/Sat vape store(1).png" class="d-block w-100" alt="Promo 1">
                
            </div>





            
            <div class="carousel-item">
                <img src="images/Sat vape store(2).png" class="d-block w-100" alt="Promo 2">
                <div class="carousel-caption d-none d-md-block">
                    
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/Promo-nataru-2024.jpg" class="d-block w-100" alt="Promo 2">
                <div class="carousel-caption d-none d-md-block">
                    
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        
       <!-- Sidebar -->
<div id="sidebar" class="fixed left-0 top-0 z-10 h-full w-64 bg-[#333333] text-[#FFFFFF] p-6 transition-transform transform -translate-x-full">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-bold">User Profile</h3>
        <button onclick="toggleSidebar()" class="text-[#fbbf24] font-semibold">Close</button>
    </div>
    <div class="flex flex-col items-center">
        <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-20"
            style='background-image: url("https://cdn.usegalileo.ai/sdxl10/d4c80c00-474a-4e28-b197-4f2bb577af26.png");'
        ></div>
        <h4 class="mt-4 font-semibold">John Doe</h4>
        <p class="text-sm text-[#CBCBCB]">Admin</p>
    </div>
    <div class="mt-8 space-y-4">
        <a href="#" class="text-[#fbbf24]">Profile Settings</a>
        <a href="#" class="text-[#fbbf24]">Account</a>
        <a href="#" class="text-[#fbbf24]">Log Out</a>
    </div>
</div>


        <h2 class="text-center text-3xl font-semibold text-white mb-6 mt-8 tracking-wide">Our Product</h2>


        <!-- Main Ecommerce Content Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-10">
            <!-- Featured Categories Section -->
            @foreach($products as $product)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('storage/'.$product->gambar) }}" alt="{{ $product->nama }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800">{{ $product->nama }}</h3>
                    <p class="text-sm text-gray-500 mt-2">{{ $product->deskripsi }}</p>
                    <p class="text-sm font-bold text-gray-800 mt-2">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                    <a href="/checkout" class="text-[#fbbf24] text-sm font-semibold">Shop Now</a>
                    <form action="{{ route('listbarang.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="produk_id" value="{{ $product->id }}">
                        <button type="submit" class="mt-2 bg-[#fbbf24] text-white text-sm font-semibold py-2 px-4 rounded">Tambahkan ke Keranjang</button>
                    </form>
                </div>
            </div>
            @endforeach

            
        </div>


        <h2 class="text-center text-3xl font-semibold text-white mb-6 mt-8 tracking-wide">-Best Seller-</h2>


        <!-- card -->
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <a href="/checkout">
            <div class="col">
                <div class="card">
                    <img src="images/MOD-Centaurus-M200-Lost-Vape-2-762x400.jpg" class="card-img-top" alt="card 1">
                    <div class="card-body">
                        <h5 class="card-title">Centaurus M200</h5>
                        <p class="card-text">High-performance mod with long-lasting battery.</p>
                        <p class="price">Rp.520.000</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="/checkout">
           <div class="col">
                <div class="card">
                    <img src="images/Desain tanpa judul(19).png" class="card-img-top" alt="card 2">
                    <div class="card-body">
                        <h5 class="card-title">Centaurus N200</h5>
                        <p class="card-text">High-performance mod with long-lasting battery.</p>
                        <p class="price">Rp.670.000</p>
                    </div>
                </div>
            </div>
            </a>
            <div class="col">
                <div class="card">
                    <img src="images/Desain tanpa judul(20).png" class="card-img-top" alt="card 3">
                    <div class="card-body">
                        <h5 class="card-title">Hotcig R234</h5>
                        <p class="card-text">High-performance mod with long-lasting battery.</p>
                        <p class="price">Rp.550.000</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/Desain tanpa judul(21).png" class="card-img-top" alt="card 4">
                    <div class="card-body">
                        <h5 class="card-title">Panda VEE 2</h5>
                        <p class="card-text">High-performance mod with long-lasting battery.</p>
                        <p class="price">Rp.350.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    </div>
    


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
                // Redirect to the logout URL
                window.location.href = '{{ url('logout') }}';
            }
        });
    }
</script>


    
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>Follow us on social media:</p>
        <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i> Facebook</a>
        <a href="https://www.instagram.com/msatrioadi/" class="text-white mx-2"><i class="bi bi-instagram"></i> Instagram</a>
        <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i> Twitter</a>
        <p class="mt-3">© 58 Vape Store. All rights reserved.</p>
    </footer>
</body>
</html>
