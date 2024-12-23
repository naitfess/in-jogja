{{-- footer --}}
<footer class="bg-gradient-to-r from-orange-400 to-orange-500 text-white py-12">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 px-4">
      {{-- Logo dan Informasi Kontak --}}
      <div>
        <div class="flex items-center gap-2 mb-4">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-14">
          <h2 class="text-3xl font-bold">InJogja</h2>
        </div>
        <p class="text-sm mb-6 leading-relaxed">
          Everything Was Seamless. The Private Guides Were Interesting.
        </p>
        <ul class="space-y-3 text-sm">
          <li class="flex items-center gap-3">
            <div class="bg-white text-orange-500 p-2 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17.657 16.657a8 8 0 1 0-11.314 0M12 12v.01" />
              </svg>
            </div>
            Grand Meikarta, London
          </li>
          <li class="flex items-center gap-3">
            <div class="bg-white text-orange-500 p-2 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 10h11M9 21V8M9 15l8-8" />
              </svg>
            </div>
            +1850 45 64 88
          </li>
          <li class="flex items-center gap-3">
            <div class="bg-white text-orange-500 p-2 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M16 5L20 9M4 9l4-4m8 8h8m0 0V9M4 9h16" />
              </svg>
            </div>
            Estilo.Travel.Com
          </li>
        </ul>
      </div>
  
      {{-- News Section --}}
      <div class="mt-4">
        <h3 class="text-lg font-semibold mb-6 border-b border-white pb-2">
          All The Travel News You Need To Know
        </h3>
        <div class="space-y-6 text-sm">
          <div>
            <h4 class="font-semibold text-lg">Unforgettable Trip In Asia</h4>
            <p class="leading-relaxed">
              If You're Looking For A Unique And Unforgettable Travel Experience, Look No Further Than This Travel Website.
            </p>
          </div>
          <div>
            <h4 class="font-semibold text-lg">Maldives, Your Personal Paradise.</h4>
            <p class="leading-relaxed">
              If You're Looking For A Unique And Unforgettable Travel Experience, Look No Further Than This Travel Website.
            </p>
          </div>
        </div>
      </div>
  
      {{-- About Section --}}
      <div class="mt-4">
        <h3 class="text-lg font-semibold mb-6 border-b border-white pb-2">About</h3>
        <ul class="space-y-4 text-sm">
          <li>
            <a href="#" class="hover:underline hover:text-gray-200 transition">About Us</a>
          </li>
          <li>
            <a href="#" class="hover:underline hover:text-gray-200 transition">Community</a>
          </li>
          <li>
            <a href="#" class="hover:underline hover:text-gray-200 transition">Partner</a>
          </li>
          <li>
            <a href="#" class="hover:underline hover:text-gray-200 transition">Privacy & Policy</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="mt-10 text-center text-sm text-gray-200">
      © 2024 InJogja. All Rights Reserved.
    </div>
  </footer>