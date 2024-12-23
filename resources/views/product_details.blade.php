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

    <div class="container mx-auto lg:py-20 lg:w-full md:py-20 md:w-9/12 sm:py-16 py-12">  
        <div class="card flex flex-col lg:flex-row bg-base-100 shadow-xl">     
            <div class="card-body lg:w-1/2 p-4 md:p-6">
              <h2 class="card-title text-xl md:text-3xl">Wayang Kulit</h2>
              <div class="divider divider-secondary my-2 md:my-0"></div>
              <p class="text-sm md:text-base my-0">
                Wayang kulit miniatur adalah replika dari wayang kulit tradisional yang menjadi bagian penting dari budaya Jawa. Wayang kulit asli biasanya digunakan dalam pertunjukan wayang, yang menceritakan kisah epik seperti Ramayana dan Mahabharata, atau cerita lokal dengan makna moral yang mendalam. Dalam bentuk miniatur, wayang ini dibuat lebih kecil dengan detail yang tetap terjaga, menjadikannya cinderamata yang indah dan penuh nilai budaya.

                Wayang kulit miniatur dibuat dari kulit kerbau atau sapi yang diproses dengan teknik tradisional, seperti pengeringan, pengukiran, dan pewarnaan dengan cat alami atau emas. Figur yang sering dibuat sebagai miniatur meliputi karakter ikonik seperti Arjuna, Gatotkaca, atau Semar, yang memiliki filosofi tersendiri dalam budaya Jawa.
                
                Miniatur ini biasanya digunakan sebagai pajangan untuk menghias rumah atau ruang kerja, karena selain indah, wayang kulit juga dianggap membawa energi positif dan nilai spiritual. Anda dapat menemukan wayang kulit miniatur berkualitas di Pasar Seni Gabusan, yang merupakan pusat kerajinan Jogja, atau di toko-toko suvenir di kawasan Malioboro dan Kotagede. Selain itu, beberapa pengrajin bahkan menerima pesanan khusus untuk menyesuaikan desain dengan keinginan pembeli, seperti menambahkan ukiran nama atau pesan.
                
                Wayang kulit miniatur bukan hanya suvenir, tetapi juga simbol penghargaan terhadap seni tradisional Jawa yang telah diakui sebagai Warisan Budaya Tak Benda oleh UNESCO. Membawanya pulang berarti membawa sepotong sejarah dan kebanggaan budaya Indonesia
              </p>
          </div>
          <figure class="lg:w-1/2 p-4 md:p-6">  
            <img  
            src="{{ asset('images/wayang-kulit.jpg') }}"  
            alt="Mountain View"  
            class="rounded-xl object-cover w-full h-full" />  
        </figure> 
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