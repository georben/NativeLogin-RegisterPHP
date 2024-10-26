<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Custom background color */
        body {
            background-color: #f3f4f6;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <form id="loginForm" 
          class="relative bg-white p-10 rounded-lg shadow-lg shadow-gray-300 w-11/12 max-w-md transform scale-105 transition-all">
        
        <h1 class="text-3xl text-gray-800 font-extrabold mb-6 text-center">LOGIN</h1>

        <input type="text" name="identifier" placeholder="Username or Email" 
               class="w-full px-4 py-3 mb-5 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 placeholder-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none"
               required>

        <input type="password" name="password" placeholder="Password" 
               class="w-full px-4 py-3 mb-6 rounded-lg border border-gray-300 bg-gray-50 text-gray-800 placeholder-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none"
               required>

        <button type="button" class="w-full py-3 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 transition-colors"
                onclick="user_login()">LOGIN</button>

        <div class="mt-6 text-center">
            <p class="text-gray-500">Don't have an account?</p>
            <button type="button" class="mt-2 text-gray-700 font-semibold underline hover:text-gray-600 transition-colors"
                    onclick="window.location.href='register.php'">Register Here</button>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../lib/js/my.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault(); 
                user_login(); 
            }
        });
    </script>
</body>
</html>
