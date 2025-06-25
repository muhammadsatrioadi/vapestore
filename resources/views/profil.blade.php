<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <title>58 Vape Store - Cart</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-black min-h-screen flex flex-col">
    <div class="relative flex-grow flex flex-col">
        <!-- Header Section -->
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
                    <a class="text-[#FFFFFF] text-sm font-medium leading-normal" href="{{ url('profil') }}">Profile</a>
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
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#FFFFFF] text-black text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">PRODUK BARU</span>
                    </button>
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Notifikasi</span>
                    </button>

                    <button
                        class="h-10 px-4 bg-[#333333] text-[#FFFFFF] text-sm font-bold rounded-xl hover:bg-red-700"
                        onclick="confirmLogout()"
                    >
                        Log Out
                   </button>
                </div>
                <div
                    class="hidden md:block w-10 h-10 bg-center bg-no-repeat bg-cover rounded-full cursor-pointer"
                    style="background-image: url('images/IMG_2900.JPG');"
                    aria-label="User Profile Picture"
                    onclick="toggleSidebar()"
                    ></div>
            </div>
        </header>
        <!-- Content Section -->
        <div class="user-info-container py-10 px-10 flex-grow">
            <h3 class="text-white text-2xl mb-6 text-center">Informasi Pengguna</h3>
            <div class="flex flex-col items-center gap-4">
                <!-- Placeholder untuk menampilkan foto profil -->
                <div class="photo-preview">
                    <img id="profileImage" src="" alt="Foto Profil" class="w-32 h-32 object-cover rounded-full border-2 border-white">
                </div>
                
                <!-- Input file untuk memilih foto -->
                <div class="photo">
                    <label for="profilePicture" class="text-white text-lg mb-2">Pilih Foto Profil:</label>
                    <input type="file" id="profilePicture" accept="image/*" class="text-white mb-4" onchange="previewImage(event)">
                </div>

                <!-- User Information -->
                <div class="text-white text-lg mt-4" id="userInfo">
                    <!-- User data will be displayed here dynamically -->
                </div>

                <!-- Edit Profile Form -->
                <div id="editForm" class="hidden mt-4">
                    <h4 class="text-white text-lg mb-2">Edit Informasi Pengguna</h4>
                    <input type="text" id="editName" placeholder="Nama" class="text-white bg-[#333333] rounded-xl p-2 mb-4 w-full">
                    <input type="email" id="editEmail" placeholder="Email" class="text-white bg-[#333333] rounded-xl p-2 mb-4 w-full">
                    <input type="tel" id="editPhone" placeholder="Telepon" class="text-white bg-[#333333] rounded-xl p-2 mb-4 w-full">
                    <input type="text" id="editAddress" placeholder="Alamat" class="text-white bg-[#333333] rounded-xl p-2 mb-4 w-full">
                    <button class="bg-[#FFFFFF] text-black rounded-xl p-2" onclick="updateUserInfo()">Update Info</button>
                </div>

                <!-- Additional Actions -->
                <div class="flex gap-4 mt-6">
                    <button class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#FFFFFF] text-black text-sm font-bold leading-normal tracking-[0.015em]" onclick="editUserInfo()">
                        <span class="truncate">Edit Profile</span>
                    </button>
                    <button class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#FF6347] text-white text-sm font-bold leading-normal tracking-[0.015em]" onclick="deleteUserInfo()">
                        <span class="truncate">Delete Profile</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
     <!-- Footer Section -->
     <footer class='bg-gray-800 text-white py-4'>
            <p class='text-center'>©2024 58 Vape Store. All rights reserved.</p>
        </footer>

    <script>
        let userInfo = {
            name: 'John Doe',
            email: 'johndoe@example.com',
            phone: '123-456-7890',
            address: '123 Main Street, Springfield'
        };

        // Function to display user info
        function displayUserInfo() {
            const userInfoDiv = document.getElementById('userInfo');
            userInfoDiv.innerHTML = `
                <p><strong>Name:</strong> ${userInfo.name}</p>
                <p><strong>Email:</strong> ${userInfo.email}</p>
                <p><strong>Phone:</strong> ${userInfo.phone}</p>
                <p><strong>Address:</strong> ${userInfo.address}</p>
            `;
        }

        // Function to edit user info
        function editUserInfo() {
            document.getElementById('editForm').classList.remove('hidden');
        }

        // Function to update user info
        function updateUserInfo() {
            userInfo.name = document.getElementById('editName').value;
            userInfo.email = document.getElementById('editEmail').value;
            userInfo.phone = document.getElementById('editPhone').value;
            userInfo.address = document.getElementById('editAddress').value;
            
            displayUserInfo();
            document.getElementById('editForm').classList.add('hidden');
        }

        // Function to delete user info
        function deleteUserInfo() {
            userInfo = {
                name: '',
                email: '',
                phone: '',
                address: ''
            };
            displayUserInfo();
        }

        // Function to preview the selected image
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('profileImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        // Initial display of user info
        displayUserInfo();
    </script>



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
</body>
</html>
