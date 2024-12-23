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

    <div class="container mx-auto lg:py-20 md:py-16 sm:py-12 py-10 relative z-10">
      @foreach ($orders as $order)
      <div class="card bg-white shadow-2xl p-8 rounded-lg lg:w-3/5 mx-auto">        
        <div class="card-body lg:w-full p-4 md:p-6">  
          <h2 class="card-title text-xl md:text-3xl">{{ $order->tour->name }} <div class="badge badge-outline badge-secondary py-3">{{ $order->status }}</div></h2>  
          <h1 class="text-lg">Yogyakarta</h2>
          <div class="divider divider-secondary my-2 md:my-0"></div>  
          <table class="table-auto w-1/2 text-left">
            <tbody>
                <tr>
                    <th class="py-1  text-sm font-semibold">Email</th>
                    <td class="py-1 text-sm">:</td>
                    <td class="py-1  text-sm">{{ $order->user->email }}</td>
                </tr>
                <tr>
                    <th class="py-1  text-sm font-semibold">Total</th>
                    <td class="py-1 text-sm">:</td>
                    <td class="py-1  text-sm">${{ $order->tour->price }}</td>
                </tr>
                <tr>
                    <th class="py-1  text-sm font-semibold">Date</th>
                    <td class="py-1 text-sm">:</td>
                    <td class="py-1  text-sm">{{ $order->date }}</td>
                </tr>
                <tr>
                    <th class="py-1  text-sm font-semibold">Time</th>
                    <td class="py-1 text-sm">:</td>
                    <td class="py-1  text-sm">{{ $order->time }}</td>
                </tr>   
                <tr>
                    <th class="py-1  text-sm font-semibold">VA Number</th>
                    <td class="py-1 text-sm">:</td>
                    <td class="py-1  text-sm">081363323827</td>
                </tr>
                <tr>
                  <th class="py-1  text-sm font-semibold">Status</th>
                  <td class="py-1 text-sm">:</td>
                  <td class="py-1  text-sm">{{ $order->status }}</td>
              </tr>
            </tbody>
          </table>
          @if ($order->status == 'pending')
          <p>Please Finish Your Transactions</p>
          <a href="{{ route('payment_confirmations') }}">
            <div class="pb-2 w-full">  
              <button class="btn w-full rounded-full bg-gradient-to-r from-orange-400 to-orange-500 hover:from-orange-500 hover:to-orange-600 text-white font-semibold mt-3 transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-none">  
                  Finish Your Transaction
              </button>
              <a href="" class="link"><p class="text-center justify-center mt-5 text-sm">Cancel Your Transactions</p> </a>
          </div> 
          </a>          
          @elseif ($order->status == 'paid')
          <p>Please wait for the confirmations</p>
          @elseif ($order->status == 'confirmed')
          <p>Your transaction has been confirmed, please check your email</p>
          @endif
          
      </div>  
      </div>
      @endforeach
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