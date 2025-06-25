<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
</head>
<body class="relative flex size-full min-h-screen flex-col bg-black dark group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">

        <!-- Login Form Section -->
        <div class="flex flex-col items-center justify-center flex-grow p-10">
            <div class="bg-white shadow-lg rounded-lg p-8 w-full sm:w-96">
                <h3 class="text-xl font-bold text-gray-800 text-center">Admin Login</h3>
                <form class="space-y-4 mt-6" id="loginForm" onsubmit="return validateLogin()">
                    <div>
                        <label for="username" class="text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 mt-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#fbbf24]" placeholder="Enter your email" required>
                    </div>
                    <div>
                        <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-3 mt-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#fbbf24]" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="w-full bg-[#fbbf24] text-white rounded-md px-4 py-2 mt-4 text-sm font-semibold">Login</button>
                </form>
                <p id="errorMessage" class="text-red-500 text-sm mt-4 hidden">Invalid email or password!</p>
            </div>
        </div>
        
        <!-- Footer Section -->
        <footer class="bg-[#333333] py-6">
            <div class="text-center text-[#FFFFFF] text-sm">
                <p>&copy; 2025 58 Vape Store. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        function validateLogin() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');

            if (email === "admin1@gmail.com" && password === "tiohaekal123") {
                // Redirect to landing page
                window.location.href = "/landing";
                return false; // Prevent form default submission
            } else {
                errorMessage.classList.remove('hidden');
                errorMessage.textContent = "Invalid email or password!";
                return false; // Prevent form submission
            }
        }
    </script>
</body>
</html>
