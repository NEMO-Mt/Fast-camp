<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast camp - Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="background.css">
</head>

<body class="min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
        
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-blue-800 uppercase tracking-wider">Fast Camp</h1>
            <p class="text-gray-500 mt-2">ยินดีต้อนรับ! กรุณาเข้าสู่ระบบ</p>
        </div>

        <div class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 uppercase tracking-wide">E-mail</label>
                <input type="email" placeholder="example@mail.com" 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 uppercase tracking-wide">Password</label>
                <input type="password" placeholder="••••••••" 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200">
            </div>

            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg shadow-lg transform transition active:scale-95 duration-200 uppercase mt-4">
                Sign In
            </button>
        </div>
        <div class="mt-8 text-center border-t pt-6">
            <p class="text-gray-600">
                Don't have an account? 
                <a href="Register.php" class="text-blue-600 font-semibold hover:underline decoration-2">Register</a>
            </p>
        </div>
    </div>

</body>
</html>