<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Kamoa Copper';
            src: url('path/to/kamoa-copper-font.woff2') format('woff2');
        }

        body {
            font-family: 'Ubuntu', sans-serif;
        }

        .kamoa-title {
            font-family: 'Kamoa Copper', sans-serif;
        }
    </style>
    <title>Responsive Login Form</title>
</head>
<body class="bg-white flex items-center justify-center min-h-screen p-4">
<div class="w-full max-w-sm p-8 space-y-6 rounded-lg shadow-lg bg-white">
    <div class="flex justify-center">
        <img src="path/to/logo.png" alt="Logo" class="w-24 h-24 mb-4">
    </div>
    <h2 class="text-2xl font-bold text-center text-black kamoa-title">Login to your account</h2>
    <p class="text-center text-gray-700">Hello, welcome back to your account</p>

    <form action="#" method="POST" class="space-y-4">
        <div>
            <label for="email" class="block text-sm font-medium text-black">E-mail</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-red-500 focus:border-red-500" placeholder="example@email.com">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-black">Password</label>
            <input type="password" id="password" name="password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-red-500 focus:border-red-500" placeholder="Your Password">
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input type="checkbox" id="remember-me" name="remember-me" class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                <label for="remember-me" class="ml-2 block text-sm text-black">Remember me</label>
            </div>
            <a href="#" class="text-sm text-red-600 hover:text-red-500">Forgot Password?</a>
        </div>
        <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white rounded-md hover:bg-red-500">Login</button>
    </form>

    <div class="flex flex-col items-center mt-4">
        <p class="text-sm text-gray-500">or sign up with</p>
        <div class="flex space-x-4 mt-2">
            <button class="flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full">
                <img src="path/to/facebook-icon.svg" alt="Facebook" class="w-6 h-6">
            </button>
            <button class="flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full">
                <img src="path/to/google-icon.svg" alt="Google" class="w-6 h-6">
            </button>
            <button class="flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full">
                <img src="path/to/apple-icon.svg" alt="Apple" class="w-6 h-6">
            </button>
        </div>
    </div>
</div>
</body>
</html>
