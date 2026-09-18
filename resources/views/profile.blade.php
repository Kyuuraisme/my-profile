<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="bg-gray-100 shadow-lg rounded-lg p-6 w-96">
        <video class="w-48 h-48 mx-auto mb-4 border-4 border-pink-500 rounded-full object-cover" autoplay loop muted>
            <source src="{{ asset('img/' . $video) }}" type="video/mp4">
        </video>
        <h1 class="text-2xl font-bold mb-2 text-center">{{ $nama }}</h1>
        <p class="text-gray-700 italic mb-1 text-center">"sic mundus creatvs est"</p>
        <hr class="border-t border-gray-600 my-3 w-full mx-auto">
        <p class="mb-1"><strong>NIM:</strong> {{ $nim }}</p>
        <p class="mb-4"><strong>Prodi:</strong> {{ $prodi }}</p>
        <p class="mb-4"><strong>Email:</strong> {{ $email }}</p>
        <p class="mb-4"><strong>Keahlian:</strong> {{ $keahlian }}</p>
        <button class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 text-center">
            View More
        </button>
        <footer class=" text-gray-400 text-center py-4">
        <p>&copy; 2026 Ega. All rights reserved.</p>
        <div class="flex justify-center mt-2 space-x-4">
            <!-- GitHub -->
            <a href="https://github.com/Kyuuraisme" target="_blank" class="hover:text-pink-500 transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="h-6 w-6 fill-current" 
                    viewBox="0 0 24 24">
                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.3.8-.6v-2.1c-3.2.7-3.9-1.5-3.9-1.5-.5-1.2-1.2-1.5-1.2-1.5-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.6 1.9 2.9 1.4.1-.8.4-1.3.7-1.6-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.2-3.3-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.3 1.2a11.5 11.5 0 016 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.6.2 2.8.1 3.1.8.9 1.2 2 1.2 3.3 0 4.6-2.7 5.6-5.3 5.9.4.3.8 1 .8 2.1v3.1c0 .3.2.7.8.6A11.5 11.5 0 0023.5 12c0-6.35-5.15-11.5-11.5-11.5z"/>
                </svg>
            </a>
        </div>
        </footer>
    </div>
    

</body>
</html>
