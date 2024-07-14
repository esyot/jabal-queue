<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Card</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Welcome! Reinhard Esteban</h1>
        <p class="text-gray-600 mb-4">Thank you for being part of our journey.We are excited to have you here. Explore our features and enjoy your experience!</p>
        <a href="{{ route('welcome')}}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition">Get Started</a>
    </div>
</body>
</html>
