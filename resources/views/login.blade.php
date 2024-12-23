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

    {{-- Login Card --}}
    <div class="card bg-white w-96 shadow-2xl p-8 space-y-6 z-10 backdrop-blur-sm bg-white/90">
        {{-- Header --}}
        <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Login</h2>
        <p class="text-gray-600">Sign in to your account</p>
        </div>
        @if (session('loginError'))
            <div class="text-orange-500 text-center m-0">
                {{ session('loginError') }}
            </div>
        @endif
        @if (session('success'))
            <div class="text-orange-500 text-center m-0">
                {{ session('success') }}
            </div>
        @endif
    
        {{-- Form --}}
        <form class="space-y-5" action="{{ route('login.store') }}" method="POST">
        @csrf
        {{-- Email Input --}}
        <div class="form-control">
            <label class="label">
            <span class="label-text font-medium text-gray-700">Email</span>
            </label>
            <input 
            type="email" 
            placeholder="Enter your email" 
            class="input input-bordered w-full focus:input-primary focus:ring-2 focus:ring-orange-200 transition-all" 
            name="email"
            />
        </div>
    
        {{-- Password Input --}}
        <div class="form-control pb-4">
            <label class="label">
            <span class="label-text font-medium text-gray-700">Password</span>
            </label>
            <input 
            type="password" 
            placeholder="Enter your password" 
            class="input input-bordered w-full focus:input-primary focus:ring-2 focus:ring-orange-200 transition-all" 
            name="password"
            />
        </div>
    
        {{-- Login Button --}}
        <button type="submit" class="btn w-full rounded-full bg-gradient-to-r from-orange-400 to-orange-500 hover:from-orange-500 hover:to-orange-600 text-white font-semibold mt-6 transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-none">
            Login
        </button>
        </form>
    
        {{-- Sign up link --}}
        <div class="text-center text-sm text-gray-600">
        Don't have an account? 
        <a href="{{ route('register') }}" class="text-orange-500 hover:text-orange-600 font-medium">Sign up</a>
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