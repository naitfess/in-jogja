
  {{-- Carousel with Overlay --}}
  <div id="carousel" class="relative w-full h-[20vh] md:h-[25vh] lg:h-[30vh] flex items-center justify-center">
    {{-- Overlay Gradien --}}
    <div class="absolute inset-0 z-10 pointer-events-none" 
        style="background: linear-gradient(180deg, #ffa931 0%, #FF8C429E 35%, #FF6F424F 70%, rgba(255, 111, 66, 0) 100%); opacity: 0.9;">
    </div>
    {{-- Overlay Text --}}
    <div class="absolute inset-0 flex flex-col justify-center text-white z-20 ml-[13%] mt-10">
      <h1 class="text-3xl md:text-6xl font-semibold drop-shadow-xl">{{ $title }}</h1>
    </div>

    {{-- Carousel --}}
    <div class=" w-full h-full z-0">
      <img src="{{ asset('/images/login.jpg') }}" class="w-full h-full object-cover" alt="Slide 1" />
    </div>
      
  </div>