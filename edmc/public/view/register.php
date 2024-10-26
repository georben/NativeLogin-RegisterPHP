<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Page</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Custom background color */
        body {
            background-color: white;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">

    <form id="registerForm" 
          class="bg-white p-8 rounded-lg shadow-lg shadow-gray-400 w-11/12 max-w-2xl transition-all transform scale-105 grid gap-6 grid-cols-2">
        
        <h2 class="col-span-2 text-3xl text-black font-extrabold text-center mb-6">REGISTER</h2>

        <div>
            <label for="firstname" class="block text-black font-medium mb-1">First Name</label>
            <input type="text" name="first_name" placeholder="First Name" 
                   class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 text-black placeholder-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none"
                   required>
        </div>

        <div>
            <label for="lastname" class="block text-black font-medium mb-1">Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name" 
                   class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 text-black placeholder-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none"
                   required>
        </div>

        <div class="col-span-2">
            <label for="email" class="block text-black font-medium mb-1">Email</label>
            <input type="email" name="email" placeholder="Email" 
                   class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 text-black placeholder-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none"
                   required>
        </div>

        <div class="col-span-2">
            <label for="username" class="block text-black font-medium mb-1">Username</label>
            <input type="text" name="username" placeholder="Username" 
                   class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 text-black placeholder-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none"
                   required>
        </div>

        <div class="col-span-2">
            <label for="password" class="block text-black font-medium mb-1">Password</label>
            <input type="password" name="password" placeholder="Password" 
                   class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 text-black placeholder-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none"
                   required>
        </div>

        <button type="button" onclick="user_register()" 
                class="col-span-2 w-full py-3 rounded-lg bg-gray-500 text-white font-bold hover:bg-gray-600 transition-colors">
            REGISTER
        </button>

        <p class="col-span-2 text-gray-500 text-center mt-4">
            Already have an account? <a href="login.php" class="text-gray-700 hover:underline">Log In</a>
        </p>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../lib/js/my.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                user_register();
            }
        });
    </script>
</body>
</html>
