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

    <div class="py-24">
      <div class="text-center mb-8">
        <h2 class="text-orange-500 text-2xl md:text-3xl font-regular">Travel Far Enough, Meet Yourself</h2>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mt-2">Most Popular Tours</h1>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-center">
        @foreach ($tours as $tour)
          <div class="card bg-base-100 w-80 shadow-xl">
            <figure>
              <img
                src="{{ asset('images/destinations/' .$tour->picture) }}"
                class="w-full h-48 object-cover"
                alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ $tour->name}}</h2>
                <p>{{ $tour->information }}</p>
                <div class="divider divider-secondary my-0"></div>
                <div class="flex justify-between items-center gap-2">
                    <svg width="14" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_1414)">
                        <path d="M0.0327148 19.0722V8.19366H17.9503V19.0722C17.9503 19.6055 17.7637 20.0587 17.3904 20.432C17.0171 20.8053 16.5638 20.9919 16.0306 20.9919H1.95246C1.4192 20.9919 0.965923 20.8053 0.59264 20.432C0.219357 20.0587 0.0327148 19.6055 0.0327148 19.0722ZM12.831 11.2332V12.833C12.831 13.153 12.991 13.313 13.3109 13.313H14.9107C15.2307 13.313 15.3907 13.153 15.3907 12.833V11.2332C15.3907 10.9133 15.2307 10.7533 14.9107 10.7533H13.3109C12.991 10.7533 12.831 10.9133 12.831 11.2332ZM12.831 16.3526V17.9523C12.831 18.2723 12.991 18.4323 13.3109 18.4323H14.9107C15.2307 18.4323 15.3907 18.2723 15.3907 17.9523V16.3526C15.3907 16.0326 15.2307 15.8726 14.9107 15.8726H13.3109C12.991 15.8726 12.831 16.0326 12.831 16.3526ZM7.71169 11.2332V12.833C7.71169 13.153 7.87167 13.313 8.19162 13.313H9.79141C10.1114 13.313 10.2713 13.153 10.2713 12.833V11.2332C10.2713 10.9133 10.1114 10.7533 9.79141 10.7533H8.19162C7.87167 10.7533 7.71169 10.9133 7.71169 11.2332ZM7.71169 16.3526V17.9523C7.71169 18.2723 7.87167 18.4323 8.19162 18.4323H9.79141C10.1114 18.4323 10.2713 18.2723 10.2713 17.9523V16.3526C10.2713 16.0326 10.1114 15.8726 9.79141 15.8726H8.19162C7.87167 15.8726 7.71169 16.0326 7.71169 16.3526ZM2.59237 11.2332V12.833C2.59237 13.153 2.75235 13.313 3.07231 13.313H4.67209C4.99205 13.313 5.15203 13.153 5.15203 12.833V11.2332C5.15203 10.9133 4.99205 10.7533 4.67209 10.7533H3.07231C2.75235 10.7533 2.59237 10.9133 2.59237 11.2332ZM2.59237 16.3526V17.9523C2.59237 18.2723 2.75235 18.4323 3.07231 18.4323H4.67209C4.99205 18.4323 5.15203 18.2723 5.15203 17.9523V16.3526C5.15203 16.0326 4.99205 15.8726 4.67209 15.8726H3.07231C2.75235 15.8726 2.59237 16.0326 2.59237 16.3526ZM16.0306 3.07434C16.5638 3.07434 17.0171 3.26098 17.3904 3.63427C17.7637 4.00755 17.9503 4.46082 17.9503 4.99408V6.91383H0.0327148V4.99408C0.0327148 4.46082 0.219357 4.00755 0.59264 3.63427C0.965923 3.26098 1.4192 3.07434 1.95246 3.07434H3.8722V1.1546C3.8722 0.967955 3.93219 0.814642 4.05218 0.694658C4.17216 0.574675 4.32547 0.514683 4.51212 0.514683H5.79194C5.97859 0.514683 6.1319 0.574675 6.25188 0.694658C6.37187 0.814642 6.43186 0.967955 6.43186 1.1546V3.07434H11.5512V1.1546C11.5512 0.967955 11.6112 0.814642 11.7311 0.694658C11.8511 0.574675 12.0044 0.514683 12.1911 0.514683H13.4709C13.6576 0.514683 13.8109 0.574675 13.9309 0.694658C14.0508 0.814642 14.1108 0.967955 14.1108 1.1546V3.07434H16.0306Z" fill="#505050"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2_1414">
                        <rect width="17.9176" height="20.4773" fill="white" transform="matrix(1 0 0 -1 0.0327148 20.9919)"/>
                        </clipPath>
                        </defs>
                    </svg>  
                    <p class="text-sm font-semibold">Days : {{ $tour->days }}</p>                      
                </div>
                <div class="flex justify-between items-center gap-2">
                    <svg width="14" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.3662 9.48215C13.3662 9.48215 13.1162 9.73212 12.6163 10.2321C12.1163 10.732 11.1598 10.982 9.74664 10.982C8.3335 10.982 7.12699 10.482 6.12713 9.48215C5.12726 8.48229 4.62733 7.27578 4.62733 5.86264C4.62733 4.44949 5.12726 3.24299 6.12713 2.24312C7.12699 1.24325 8.3335 0.74332 9.74664 0.74332C11.1598 0.74332 12.3663 1.24325 13.3662 2.24312C14.366 3.24299 14.866 4.44949 14.866 5.86264C14.866 7.27578 14.366 8.48229 13.3662 9.48215ZM13.3462 12.2618C14.8126 12.2618 16.0725 12.7884 17.1257 13.8416C18.1788 14.8948 18.7054 16.1546 18.7054 17.6211V19.3008C18.7054 19.8341 18.5188 20.2874 18.1455 20.6607C17.7722 21.0339 17.319 21.2206 16.7857 21.2206H2.70758C2.17432 21.2206 1.72105 21.0339 1.34777 20.6607C0.974484 20.2874 0.787842 19.8341 0.787842 19.3008V17.6211C0.787842 16.1546 1.31444 14.8948 2.36763 13.8416C3.42082 12.7884 4.68065 12.2618 6.14712 12.2618H6.82703C7.76024 12.6884 8.73345 12.9017 9.74664 12.9017C10.7598 12.9017 11.733 12.6884 12.6663 12.2618H13.3462Z" fill="#505050"/>
                        </svg>
                          
                    <p class="text-sm font-semibold">Max Capacity : {{ $tour->max_capacity }}</p>                      
                </div>
                <div class="card-actions">
                  <p class="text-lg font-semibold my-auto">${{ $tour->price }}</p>
                  <a href="{{ route('tour_details') }}">
                    <button class="btn bg-orange-400 text-white hover:bg-orange-500">Book Now</button>
                  </a>
                </div>
            </div>
          </div>
        @endforeach
      </div>

      {{-- paginations --}}
      <div class="join flex justify-center mt-16">
        <button class="join-item btn">«</button>
        <button class="join-item btn btn-active">1</button>
        <button class="join-item btn">2</button>
        <button class="join-item btn">3</button>
        <button class="join-item btn">4</button>
        <button class="join-item btn">5</button>
        <button class="join-item btn">»</button>
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