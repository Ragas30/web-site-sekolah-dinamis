<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Login</h2>

        <form action="proses_login.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your email" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter your password" required>
            </div>

            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="text-blue-600 w-4 h-4 rounded focus:ring-2 focus:ring-blue-500" />
                    <label for="remember" class="ml-2 text-gray-700 text-sm">Remember me</label>
                </div>
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Login</button>
        </form>

        <p class="mt-6 text-center text-gray-600">Don't have an account?
            <a href="#" class="text-blue-500 hover:underline">Sign up</a>
        </p>
    </div>
</body>

</html>