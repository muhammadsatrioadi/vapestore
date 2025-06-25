<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <title>Order</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>58 Vape Store</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-black dark group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
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

            </div>
            <div class="flex items-center gap-9">
              <script>

                $(document).ready(function() {
        
                    $('Inventaris').load('path_to_second_program.html');
        
                });
        
            </script>
            <a 
                class="text-[#FFFFFF] text-sm font-medium leading-normal" 
                href="{{ url('landing') }}"
              >
                Home
              </a>


              <a 
                class="text-[#FFFFFF] text-sm font-medium leading-normal" 
                href="{{ url('produk') }}"
              >
                Inventaris
              </a>


              <a 
                class="text-[#FFFFFF] text-sm font-medium leading-normal" 
                href="{{ url('order') }}"
              >
                Order
              </a>
              <a 
                class="text-[#FFFFFF] text-sm font-medium leading-normal" 
                href="{{ url('Pelanggan') }}"
              >
                Pelanggan
              </a>
              <a 
                class="text-[#FFFFFF] text-sm font-medium leading-normal" 
                href="{{ url('Laporan') }}"
              >
                Reports
              </a>
              <a 
                class="text-[#FFFFFF] text-sm font-medium leading-normal" 
                href="{{ url('Relasi') }}"
              >
                Relasi
              </a>
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
                  placeholder="Search"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#FFFFFF] focus:outline-0 focus:ring-0 border-none bg-[#333333] focus:border-none h-full placeholder:text-[#CBCBCB] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                  value=""
                />
              </div>
            </label>
            <div class="flex gap-2">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#FFFFFF] text-black text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">PRODUK BARU</span>
              </button>
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Notifikasi</span>
              </button>

              <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold leading-normal tracking-[0.015em]"
              onclick="window.location.href='{{ url('logout') }}'"
            >
              Log Out
            </button>

             
 
              <div class="button-container">

    
    
            </div>
            <div
                    class="hidden md:block w-10 h-10 bg-center bg-no-repeat bg-cover rounded-full cursor-pointer"
                    style="background-image: url('images/IMG_2900.JPG');"
                    aria-label="User Profile Picture"
                    onclick="toggleSidebar()"
            ></div>
          </div>
        </header>
    <style>
        .nav-link:hover {
            transition: color 0.3s ease-in-out;
            color: #fbbf24;
        }

        .logo-bounce {
            animation: bounce 2s infinite;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .fade-in {
            animation: fadeIn 1.5s ease-in;
        }

        /* Notification Styling */
        .notification {
            background-color: #333333;
            color: white;
            padding: 20px;
            border-radius: 5px;
            position: fixed;
            top: 20px;
            right: 20px;
            min-width: 300px;
            display: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }

        .notification.active {
            display: block;
        }

        .close-btn {
            float: right;
            cursor: pointer;
            background-color: transparent;
            border: none;
            color: #fbbf24;
            font-size: 18px;
        }

        .chart-container {
            width: 80%;
            margin: 2rem auto;
            padding: 2rem;
        }

        /* Information Section Styling */
        .info-section {
            display: flex;
            justify-content: space-around;
            background-color: #333333;
            padding: 20px;
            border-radius: 8px;
            margin: 2rem auto;
            width: 80%;
            flex-wrap: wrap;
        }

        .info-box {
            color: #ffffff;
            text-align: center;
            margin: 10px;
        }

        .info-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .info-value {
            font-size: 1.25rem;
            margin-top: 0.5rem;
        }

        .product-details {
            font-size: 0.875rem;
            margin-top: 0.5rem;
            color: #fbbf24;
        }
    </style>
</head>
<body>
    <div class="relative flex size-full min-h-screen flex-col bg-black dark group/design-root overflow-x-hidden fade-in" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            
            <!-- Header Section -->
            <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#333333] px-10 py-3">
                <!-- ... (Rest of the header code remains unchanged) ... -->
            </header>

            <!-- Notification Section -->
            <div id="teamNotification" class="notification">
                <button class="close-btn" onclick="hideNotification()">×</button>
                <h4 class="font-bold mb-2">Team Notification</h4>
                <p>Pesan baru untuk tim Anda!</p>
            </div>

            <!-- Content Section -->
            <div class="chart-container">
                <h3 class="text-white text-xl mb-4 text-center">Laporan Penjualan Bulanan</h3>
                <canvas id="salesChart"></canvas>
                <!-- Chart.js initialization script -->
                <script>
                    const ctx = document.getElementById('salesChart').getContext('2d');
                    const salesChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                            datasets: [{
                                label: 'Sales',
                                data: [12, 2, 15, 9, 10, 13],
                                backgroundColor: 'rgba(251, 191, 36, 0.2)',
                                borderColor: '#fbbf24',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: { beginAtZero:true }
                                }]
                            }
                        }
                    });
                </script>
            </div>

           <!-- Information Section for Orders, Products, and Customers -->
           <div class="info-section">
               <div class="info-box">
                   <div class="info-title">Orders</div>
                   <div class="info-value">1245</div>
               </div>
               <div class="info-box">
                   <div class="info-title">Products</div>
                   <div class="info-value">75</div>
               </div>
               <div class="info-box">
                   <div class="info-title">Customers</div>
                   <div class="info-value">200</div>
               </div>

              
           </div>

           <!-- Footer Section -->
           <footer class='bg-gray-800 text-white py-4'>
               <p class='text-center'>©2024 VapeDash. All rights reserved.</p>
           </footer>

       </div> <!-- End of layout-container -->
   </body> 
   <!-- JavaScript for Notification Handling -->
   <script>
       function showNotification() {
           document.getElementById('teamNotification').classList.add('active');
       }

       function hideNotification() {
           document.getElementById('teamNotification').classList.remove('active');
       }
   </script>

</html>
