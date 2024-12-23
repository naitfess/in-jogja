<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-base-100 overflow-x-hidden min-h-screen">
  {{-- Navbar --}}
  <x-navbar />

  {{-- Hero --}}
  <x-hero-secondary :title="$title"/>
  
  
  {{-- main content --}}
  <div class="hero min-h-screen relative">
    {{-- Background decorative element --}}
    <svg class="absolute top-0 -left-32 w-[1000px] h-[1000px] opacity-70 z-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 551 905">
      <g filter="url(#filter0_f_6_1062)">
        <ellipse cx="10.3953" cy="452.664" rx="250.867" ry="425" transform="rotate(-60.7226 10.3953 452.664)" fill="#FB7E00" fill-opacity="0.26"/>
      </g>
      <defs>
        <filter id="filter0_f_6_1062" x="-530.195" y="0.866455" width="1081.18" height="903.594" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_6_1062"/>
        </filter>
      </defs>
    </svg>

    <div class="container mx-auto lg:py-20 lg:w-1/2 md:py-20 md:w-9/12 sm:py-16 py-12">  
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mt-2">Hotel Tentrem Yogyakarta</h1>
          </div>
        <div class="card bg-base-100 shadow-xl">  
          <div class="carousel rounded-box w-full">
            <div class="carousel-item w-full">
              <img
                src="{{ asset('images/hotels/tentrem.jpg') }}"
                class="w-full objet-cover" />
            </div>
            <div class="carousel-item w-full">
              <img
                src="{{ asset('images/hotels/tentrem1.jpg') }}"
                class="w-full" />
            </div>
            <div class="carousel-item w-full">
              <img
                src="{{ asset('images/hotels/tentrem2.jpg') }}"
                class="w-full" />
            </div>
            <div class="carousel-item w-full">
              <img
                src="{{ asset('images/hotels/tentrem3.jpg') }}"
                class="w-full" />
            </div>
            <div class="carousel-item w-full">
              <img
                src="{{ asset('images/hotels/tentrem4.jpg') }}"
                class="w-full" />
            </div>
            <div class="carousel-item w-full">
              <img
                src="{{ asset('images/hotels/tentrem5.jpg') }}"
                class="w-full" />
            </div>
          </div>
        </div>  
    </div>  
  </div>


  {{-- footer --}}
  <x-footer />

  <script>
    // Toggle mobile menu
    document.getElementById("menu-toggle").addEventListener("click", function () {
      const mobileMenu = document.getElementById("mobile-menu");
      mobileMenu.classList.toggle("hidden");
    });

    window.addEventListener('scroll', () => {
      const navbar = document.getElementById('navbar');
      const carousel = document.getElementById('carousel');
      const carouselHeight = carousel?.offsetHeight || 0;

      if (window.scrollY > carouselHeight) {
        navbar.classList.add('bg-white', 'shadow-lg', 'text-black');
        navbar.classList.remove('bg-transparent', 'text-white');
      } else {
        navbar.classList.add('bg-transparent', 'text-white');
        navbar.classList.remove('bg-white', 'shadow-lg', 'text-black');
      }
    });
  </script>
</body>
</html>