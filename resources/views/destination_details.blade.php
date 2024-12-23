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
        <h1 class="text-2xl md:text-4xl font-semibold mb-6">Candi Prambanan</h1>  
        <div class="card flex flex-col lg:flex-row bg-base-100 shadow-xl">  
            <figure class="lg:w-1/2 p-4 md:p-6">  
                <img  
                src="{{ asset('images/destinations/candi-prambanan.jpg') }}"  
                alt="Mountain View"  
                class="rounded-xl object-cover w-full h-full" />  
            </figure>  
            <div class="card-body lg:w-1/2 p-4 md:p-6">
              <h2 class="card-title text-xl md:text-3xl">Information</h2>
              <div class="divider divider-secondary my-2 md:my-0"></div>
              <p class="text-sm md:text-base my-0">
                  Candi Prambanan adalah candi Hindu terbesar dan termegah di Indonesia. Candi ini dibangun pada abad ke-9 Masehi oleh Rakai Pikatan, salah satu raja dari Kerajaan Mataram Kuno, sebagai wujud penghormatan terhadap agama Hindu yang saat itu berkembang pesat di Nusantara. Terletak di wilayah perbatasan Yogyakarta dan Jawa Tengah, candi ini menjadi simbol keagungan budaya serta pencapaian arsitektur masyarakat kuno.
                  Candi Prambanan juga diakui sebagai salah satu situs warisan dunia oleh UNESCO pada tahun 1991, menjadikannya sebagai bagian dari kekayaan budaya global yang harus dilestarikan. Setiap tahunnya, ribuan wisatawan baik domestik maupun mancanegara mengunjungi candi ini untuk menyaksikan keindahannya, terutama saat matahari terbenam yang menciptakan pemandangan luar biasa. Tak hanya itu, Candi Prambanan juga menjadi lokasi penyelenggaraan berbagai acara budaya, seperti pertunjukan Sendratari Ramayana, yang menampilkan seni tari dan drama dengan latar belakang candi yang megah.

                  Candi Prambanan bukan hanya sekadar situs arkeologi, tetapi juga simbol kebanggaan bangsa Indonesia yang menggambarkan kejayaan masa lalu, nilai-nilai keagamaan, serta kemegahan budaya yang diwariskan dari generasi ke generasi.
              </p>
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