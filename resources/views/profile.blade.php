<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-96">
        <video class="w-48 h-48 mx-auto mb-4 border-4 border-pink-500 rounded-full object-cover" autoplay loop muted>
            <source src="{{ asset('img/' . $video) }}" type="video/mp4">
        </video>
        <h1 class="text-2xl font-bold mb-2 text-center">{{ $nama }}</h1>
        <p class="text-gray-700 italic mb-1 text-center">"sic mundus creatvs est"</p>
        <p class="text-700 mb-1"><strong>NIM:</strong> {{ $nim }}</p>
        <p class="text-700 mb-4"><strong>Prodi:</strong> {{ $prodi }}</p>
        <button class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
            View More
        </button>
    </div>
</body>
</html>
