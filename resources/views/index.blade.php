<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css') {{-- Pastikan Vite telah dikonfigurasi dengan benar --}}
</head>
<body class="bg-base-100 overflow-x-hidden">
  {{-- Navbar --}}
  <x-navbar />

  {{-- Hero --}}
  <x-hero />
  {{-- main content --}}
  <div class="hero min-h-screen flex flex-col py-24">
    <svg class="absolute top-[1000px] -left-32 w-[1000px] h-[1000px] opacity-50 z-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 551 905">
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
    <svg class="absolute top-[1900px] -right-32 w-[1000px] h-[1000px] opacity-50 z-0" width="499" height="905" viewBox="0 0 499 905" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_f_6_1063)">
      <ellipse cx="541.395" cy="452.664" rx="250.867" ry="425" transform="rotate(-60.7226 541.395 452.664)" fill="#FB7E00" fill-opacity="0.22"/>
      </g>
      <defs>
      <filter id="filter0_f_6_1063" x="0.804688" y="0.866333" width="1081.18" height="903.594" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
      <feGaussianBlur stdDeviation="75" result="effect1_foregroundBlur_6_1063"/>
      </filter>
      </defs>
    </svg>
    <svg class="absolute top-[2700px] -left-32 w-[1000px] h-[1000px] opacity-50 z-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 551 905">
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
      
    <!-- Hero Content -->
    <div class="hero-content flex-col lg:flex-row items-center lg:items-start">
        <!-- Card -->
        <div class="card bg-base-100 w-full lg:w-full shadow-xl">
            <figure class="px-4 pt-4">
                <img
                    src="{{ asset('images/image1.png') }}"
                    alt="#InJogja"
                    class="rounded-xl w-full h-[250px] md:h-[300px] lg:h-[350px] object-cover"
                />
            </figure>
            <div class="card-body py-4 px-5">
                <h2 class="card-title text-sm md:text-lg lg:text-xl">#InJogja</h2>
            </div>
        </div>
        <!-- Content -->
        <div class="mt-6 lg:mt-3 lg:ml-8 text-center lg:text-left">
            <h2 class="text-orange-500 text-3xl font-regular">About Us</h2>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mt-2">Discover Adventure</h1>
            <p class="py-6 text-gray-600 text-sm md:text-base">
                Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Donec Id Justo Tempus, Luctus Velit Vehicula, Facilisis Mi. Mauris Non Ante Id Nunc Imperdiet Vehicula At Condi Mentum Ex. Lorem Ipsum Dolor Sit Amet, Consectetur.
            </p>
            <p class="pb-6 text-gray-600 text-sm md:text-base">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quia fugiat, vel, aspernatur impedit architecto, fuga praesentium odit sed itaque eius temporibus enim est molestias consectetur explicabo eveniet! Adipisci, unde?
            </p>
            <button class="btn px-8 bg-orange-500 border-none hover:bg-orange-600 rounded-full text-white px-6 py-2">
                View All
            </button>
        </div>     
    </div>

    <!-- Section Below -->
    <div class="pt-16 mt-12">
        <div class="text-center">
            <h2 class="text-orange-500 text-3xl font-regular">We Care About Your Happiness</h2>
            <h1 class="text-4xl md:text-5xl font-semibold mt-2">What We Provide For You</h1>
            <p class="text-gray-600 mt-4">
                Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Donec Id Justo
                Tempus, Luctus Velit Vehicula, Facilisis Mi. Mauris Non.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6 lg:px-20">
            <!-- Card 1 -->
            <div class="card bg-base-100 rounded-lg shadow-xl p-6 text-center">
              <div class="flex justify-center items-center mb-4 ">
                  <img src="{{ asset('images/icon1.png') }}" alt="" class="h-24 w-24 object-contain">
              </div>
              <h3 class="font-semibold text-lg">12+ Years Experience</h3>
            </div>
          
            <!-- Card 2 -->
            <div class="card bg-base-100 rounded-lg shadow-xl p-6 text-center">
                <div class="flex justify-center items-center mb-4">
                  <img src="{{ asset('images/icon2.png') }}" alt="" class="h-24 w-24 object-contain">
                </div>
                <h3 class="font-semibold text-lg">Professional Guide</h3>
            </div>

            <!-- Card 3 -->
            <div class="card bg-base-100 rounded-lg shadow-xl p-6 text-center">
                <div class="flex justify-center items-center mb-4">
                  <img src="{{ asset('images/icon3.png') }}" alt="" class="h-24 w-24 object-contain">
                </div>
                <h3 class="font-semibold text-lg">35+ Tourist Options</h3>
            </div>

            <!-- Card 4 -->
            <div class="card bg-base-100 rounded-lg shadow-xl p-6 text-center">
                <div class="flex justify-center items-center mb-4">
                  <img src="{{ asset('images/icon4.png') }}" alt="" class="h-24 w-24 object-contain">
                </div>
                <h3 class="font-semibold text-lg">Professional Service</h3>
            </div>
        </div>
      </div>
    </div>

    {{-- section --}}
    <div class="py-12 mt-10">
      <div class="text-center mb-8">
          <h2 class="text-orange-500 text-2xl md:text-3xl font-regular">Travel Far Enough, Meet Yourself</h2>
          <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mt-2">Most Popular Tours</h1>
      </div>

      <div class="px-4 sm:px-8 lg:px-48">
          <div class="carousel carousel-center rounded-box w-full gap-6 py-8 px-5">
            @foreach ($tours as $tour)
            <div class="carousel-item w-64 sm:w-72 md:w-80">
                  <div class="card bg-white shadow-xl rounded-lg overflow-hidden">
                      <!-- Gambar -->
                      <figure class="relative p-4">
                          <img
                              src="{{ asset('images/destinations/' .$tour->picture) }}"
                              alt="Shoes"
                              class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg" />
                      </figure>
                      <!-- Konten -->
                      <div class="card-body p-4 text-center">
                          <h2 class="card-title text-2xl font-semibold text-gray-800 justify-center">{{ $tour->name }}</h2>
                          <div class="card-actions justify-center">
                              <button class="btn-sm bg-orange-500 border-none px-8 text-white rounded-full">
                                   {{ $tour->days }} Days
                              </button>
                          </div>
                          <p class="text-gray-600 mt-2 px-2 text-md">{{ $tour->information }}</p>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>

    {{-- section --}}
    <div class="py-12 mt-10">
      <div class="text-center mb-8">
          <h2 class="text-orange-500 text-2xl md:text-3xl font-regular">People Who Give You Best Treatment</h2>
          <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mt-2">Meet Our Guide</h1>
      </div>

      <div class="px-4 sm:px-8 lg:px-48">
          <div class="carousel carousel-center rounded-box w-full gap-6 py-8 px-5">
              @foreach ($guides as $guide)
                <div class="carousel-item w-64 sm:w-72 md:w-80">
                    <div class="card bg-white shadow-xl rounded-lg overflow-hidden">
                        <!-- Gambar -->
                        <figure class="relative p-4 pb-0">
                            <img
                                src="{{ asset('images/guides/'.$guide->picture) }}"
                                class="h-48 sm:h-64 md:h-80 w-full object-cover rounded-lg" />
                        </figure>
                        <!-- Konten -->
                        <div class="card-body p-6 text-center">
                            <div class="card-actions justify-center">
                                <button class="btn btn-sm bg-orange-500 border-none hover:bg-orange-600 px-8 text-white rounded-full">
                                    {{ $guide->name }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- Footer --}}
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
    const carouselHeight = carousel.offsetHeight;

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
