<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Fade-in animation */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in {
            animation: fadeInUp 1s ease-in-out;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-indigo-200 via-purple-100 to-pink-200 font-sans">

    <div class="min-h-screen flex flex-col items-center justify-center p-6">
        <h1 class="text-5xl font-extrabold text-gray-800 mb-2 fade-in">Meet Our Group</h1>
        <p class="text-gray-700 mb-10 italic fade-in">“Together we create, learn, and grow.”</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 w-full max-w-6xl">
            
            <!-- Member 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 hover:shadow-2xl transition fade-in">
                <div class="relative w-32 h-32 mx-auto mb-4">
                    <img src="{{ asset('images/dixie.jpg') }}" alt="Member 1" 
                         class="w-32 h-32 rounded-full border-4 border-transparent 
                                bg-gradient-to-tr from-blue-400 to-purple-400 p-1">
                </div>
                <h2 class="text-2xl font-semibold">Dixie Mae Gampic</h2>
                <p class="text-gray-500">Member 1</p>
                <a href="https://deeceeooo.github.io/autobiography/" target="_blank" 
                   class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-5 py-2 rounded-lg shadow-md hover:opacity-90">
                   View Profile
                </a>
            </div>

            <!-- Member 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 hover:shadow-2xl transition fade-in">
                <div class="relative w-32 h-32 mx-auto mb-4">
                    <img src="{{asset('images\pariñas.jpg')}}" alt="Member 2" 
                         class="w-32 h-32 rounded-full border-4 border-transparent 
                                bg-gradient-to-tr from-green-400 to-lime-400 p-1">
                </div>
                <h2 class="text-2xl font-semibold">Marlyn Pariñas</h2>
                <p class="text-gray-500">Member 2</p>
                <a href="https://stvrlight-dot.github.io/bogarti/" target="_blank" 
                   class="mt-4 inline-block bg-gradient-to-r from-green-500 to-emerald-500 text-white px-5 py-2 rounded-lg shadow-md hover:opacity-90">
                   View Profile
                </a>
            </div>

            <!-- Member 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 hover:shadow-2xl transition fade-in">
                <div class="relative w-32 h-32 mx-auto mb-4">
                    <img src="https://via.placeholder.com/150" alt="Member 3" 
                         class="w-32 h-32 rounded-full border-4 border-transparent 
                                bg-gradient-to-tr from-purple-400 to-pink-400 p-1">
                </div>
                <h2 class="text-2xl font-semibold">Member 3</h2>
                <p class="text-gray-500">Role / Position</p>
                <a href="https://example.com/member3" target="_blank" 
                   class="mt-4 inline-block bg-gradient-to-r from-purple-500 to-pink-500 text-white px-5 py-2 rounded-lg shadow-md hover:opacity-90">
                   View Profile
                </a>
            </div>

            <!-- Member 4 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:scale-105 hover:shadow-2xl transition fade-in">
                <div class="relative w-32 h-32 mx-auto mb-4">
                    <img src="{{asset('images\BJ.jpg')}}" alt="Member 4" 
                         class="w-32 h-32 rounded-full border-4 border-transparent 
                                bg-gradient-to-tr from-red-400 to-orange-400 p-1">
                </div>
                <h2 class="text-2xl font-semibold">Brian Allan F. Jornales</h2>
                <p class="text-gray-500">Member 4</p>
                <a href="https://bj0r.github.io/profile/" target="_blank" 
                   class="mt-4 inline-block bg-gradient-to-r from-red-500 to-orange-500 text-white px-5 py-2 rounded-lg shadow-md hover:opacity-90">
                   View Profile
                </a>
            </div>

        </div>
    </div>
</body>
</html>
