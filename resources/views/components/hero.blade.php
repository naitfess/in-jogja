{{-- Carousel with Overlay --}}
<div id="carousel" class="relative w-full h-screen">
    {{-- Overlay Gradien --}}
    <div class="absolute inset-0 z-10 pointer-events-none" 
        style="background: linear-gradient(180deg, #ffa931 0%, #FF8C429E 35%, #FF6F424F 70%, rgba(255, 111, 66, 0) 100%); opacity: 0.9;">
    </div>

    {{-- Overlay Text --}}
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white z-20">
      <h1 class="text-5xl md:text-8xl font-bold drop-shadow-md">Amazing In Jogja</h1>
      <p class="text-lg md:text-2xl mt-4 drop-shadow-md">Get Incredible Experience With Us</p>
      <button class="btn mt-6 px-6 py-2 text-orange-500 bg-white hover:bg-orange-500 hover:text-white outline-none rounded-full">
        Get Started
      </button>
    </div>

    {{-- Carousel --}}
    <div class="carousel w-full h-full z-0">
      <div id="slide1" class="carousel-item relative w-full h-full">
        <img src="{{ asset('/images/image1.png') }}" class="w-full h-full object-cover" alt="Slide 1" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between z-30">
          <a href="#slide4" class="text-white text-xl hover:text-secondary">❮</a>
          <a href="#slide2" class="text-white text-xl hover:text-secondary">❯</a>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full h-full">
        <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp" class="w-full h-full object-cover" alt="Slide 2" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between z-30">
          <a href="#slide1" class="text-white text-xl hover:text-secondary">❮</a>
          <a href="#slide3" class="text-white text-xl hover:text-secondary">❯</a>
        </div>
      </div>
      <div id="slide3" class="carousel-item relative w-full h-full">
        <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp" class="w-full h-full object-cover" alt="Slide 3" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between z-30">
          <a href="#slide2" class="text-white text-xl hover:text-secondary">❮</a>
          <a href="#slide4" class="text-white text-xl hover:text-secondary">❯</a>
        </div>
      </div>
      <div id="slide4" class="carousel-item relative w-full h-full">
        <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp" class="w-full h-full object-cover" alt="Slide 4" />
        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between z-30">
          <a href="#slide3" class="text-white text-xl hover:text-secondary">❮</a>
          <a href="#slide1" class="text-white text-xl hover:text-secondary">❯</a>
        </div>
      </div>
    </div>
  </div>