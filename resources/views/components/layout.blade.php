<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/app.css')
    <title>Best Agadir Activity</title>
    <style>
        .swiper-pagination-bullet {
            background-color: #f97316; /* Orange color */
        }
    </style>
</head>
<body class="font-[Outfit]">
<!-- Responsive Navbar -->
<nav class="flex md:flex-row justify-between items-center mx-auto bg-white gap-2 px-2 lg:px-5 md:w-[770px] lg:w-[900px] shadow-[0_1px_25px_rgba(0,0,0,0.1)] sm:rounded-[35px] fixed top-0 left-1/2 -translate-x-1/2 w-full z-50 transition-all duration-300 ease-in-out">
    <x-navbar href="/" class="">
        <img src="{{ asset('images/logoAgadir.png') }}" alt="Logo Agadir" class="w-[220px]">
    </x-navbar>

    <!-- Navigation Links - Hidden on mobile, shown on medium+ -->
    <div class="hidden md:flex justify-center items-center space-x-2">
        <x-navbar href="/" class="text-base md:hover:bg-gray-100 no-underline px-4 py-2 rounded-[20px]">Activities</x-navbar>
        <x-navbar href="/about" class="text-base md:hover:bg-gray-100 no-underline px-4 py-2 rounded-[20px]">About</x-navbar>
        <x-navbar href="/contact" class="text-base md:hover:bg-gray-100 no-underline px-4 py-2 rounded-[20px]">Contact</x-navbar>
    </div>

    <!-- Mobile Menu Button (Hamburger) -->
    <button class="md:hidden p-2 rounded-lg hover:bg-gray-100" id="mobileMenuButton">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <div class="hidden md:flex gap-4 mr-3">
        <button class="bg-gray-100 px-4 py-2 rounded-[20px] cursor-pointer hover:bg-gray-200 transition duration-300">📞Call Us</button>
        <button class="bg-orange-500 px-4 py-2 rounded-[20px] text-white cursor-pointer hover:bg-orange-400 transition duration-300">Book Now</button>
    </div>
</nav>

<!-- Mobile Menu (Hidden by default) - Now fixed position overlay -->
<div class="items-top fixed w-full mx-auto pb-7 bg-white bg-opacity-95 hidden z-40 pt-10 shadow-[0_10px_35px_rgba(0,0,0,0.15)]" id="mobileMenu">
    <div class="container flex  flex-col mx-auto px-4">
        <x-navbar href="/" class="block py-4 px-4 md:hover:bg-gray-100 rounded-lg text-xl text-center">Activities</x-navbar>
        <x-navbar href="/about" class="block py-4 px-4 md:hover:bg-gray-100 rounded-lg text-xl text-center">About</x-navbar>
        <x-navbar href="/contact" class="block py-4 px-4 md:hover:bg-gray-100 rounded-lg text-xl text-center mb-8">Contact</x-navbar>
        <div class="flex gap-4 mt-6 px-4">
            <button class="flex-1 bg-gray-100 px-4 py-3 rounded-[20px] text-lg cursor-pointer">📞Call Us</button>
            <button class="flex-1 bg-orange-500 px-4 py-3 rounded-[20px] text-white text-lg cursor-pointer">Book Now</button>
        </div>
    </div>
</div>

{{ $slot }}


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const navbar = document.querySelector('nav');

        const originalShadow = 'shadow-[0_1px_25px_rgba(0,0,0,0.1)]';

        mobileMenuButton.addEventListener('click', function() {
            const isOpening = mobileMenu.classList.contains('hidden');

            if (isOpening) {
                navbar.classList.remove(originalShadow);
                navbar.classList.add('shadow-none');
                document.body.style.overflow = 'hidden'; 
            } else {
                navbar.classList.remove('shadow-none');
                navbar.classList.add(originalShadow);
                document.body.style.overflow = '';
            }
            
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
      <!-- Initialize Swiper -->
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
</script>

</body>
</html>