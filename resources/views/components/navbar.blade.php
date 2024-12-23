<div id="navbar" class="navbar bg-transparent fixed top-0 w-full z-50 text-white transition-all duration-300">
    <div class="container mx-auto flex items-center justify-between px-4 py-5">
      {{-- Logo dan Brand --}}
      <div class="flex items-center">
        <div class="w-12">
          <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <a href="{{ route('index') }}" class="text-2xl font-semibold ml-2">InJogja</a>
      </div>

      {{-- Menu untuk layar besar --}}
      <div class="hidden md:flex">
        <ul class="menu menu-horizontal px-1 text-lg">
          <li class="px-2"><a href="{{ route('index') }}">Home</a></li>
          <li class="px-2"><a href="{{ route('destinations') }}">Destination</a></li>
          <li class="px-2"><a href="{{ route('tours') }}">Tour</a></li>
          <li class="px-2"><a href="{{ route('transportations') }}">Transportation</a></li>
          <li class="px-2"><a href="{{ route('hotels') }}">Hotel</a></li>
          <li class="px-2"><a href="{{ route('events') }}">Event</a></li>
        </ul>
      </div>

      {{-- Tombol untuk layar besar --}}
      <div class="hidden md:flex gap-2 relative">
        @auth 
          <div class="dropdown">
            <label tabindex="0" class="hover:opacity-75 cursor-pointer">
              <svg width="35" height="35" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="50" height="50" rx="25" fill="#FB7E00"/>
                <path d="M25 26.25C23.5166 26.25 22.0666 25.8101 20.8332 24.986C19.5999 24.1619 18.6386 22.9906 18.0709 21.6201C17.5032 20.2497 17.3547 18.7417 17.6441 17.2868C17.9335 15.832 18.6478 14.4956 19.6967 13.4467C20.7456 12.3978 22.082 11.6835 23.5368 11.3941C24.9917 11.1047 26.4997 11.2532 27.8701 11.8209C29.2406 12.3886 30.4119 13.3499 31.236 14.5832C32.0601 15.8166 32.5 17.2666 32.5 18.75C32.5 20.7391 31.7098 22.6468 30.3033 24.0533C28.8968 25.4598 26.9891 26.25 25 26.25ZM25 13.75C24.0111 13.75 23.0444 14.0432 22.2222 14.5927C21.3999 15.1421 20.759 15.923 20.3806 16.8366C20.0022 17.7502 19.9032 18.7555 20.0961 19.7255C20.289 20.6954 20.7652 21.5863 21.4645 22.2855C22.1637 22.9848 23.0546 23.461 24.0246 23.6539C24.9945 23.8469 25.9998 23.7478 26.9134 23.3694C27.8271 22.991 28.6079 22.3501 29.1574 21.5279C29.7068 20.7056 30 19.7389 30 18.75C30 17.4239 29.4732 16.1522 28.5355 15.2145C27.5979 14.2768 26.3261 13.75 25 13.75Z" fill="white"/>
                <path d="M25 43.7499C22.2281 43.7481 19.491 43.1316 16.9859 41.945C14.4808 40.7584 12.2699 39.0311 10.5125 36.8874L9.86252 36.0874L10.5125 35.2999C12.2714 33.1591 14.4829 31.4346 16.988 30.2507C19.493 29.0667 22.2293 28.4526 25 28.4526C27.7708 28.4526 30.507 29.0667 33.0121 30.2507C35.5171 31.4346 37.7286 33.1591 39.4875 35.2999L40.1375 36.0874L39.4875 36.8874C37.7301 39.0311 35.5193 40.7584 33.0141 41.945C30.509 43.1316 27.772 43.7481 25 43.7499ZM13.1375 36.0999C14.6578 37.7274 16.4964 39.0251 18.5392 39.9123C20.582 40.7995 22.7854 41.2573 25.0125 41.2573C27.2397 41.2573 29.443 40.7995 31.4858 39.9123C33.5286 39.0251 35.3672 37.7274 36.8875 36.0999C35.3672 34.4724 33.5286 33.1748 31.4858 32.2876C29.443 31.4004 27.2397 30.9426 25.0125 30.9426C22.7854 30.9426 20.582 31.4004 18.5392 32.2876C16.4964 33.1748 14.6578 34.4724 13.1375 36.0999Z" fill="white"/>
                <path d="M25 43.75C20.7409 43.7529 16.6078 42.3056 13.2809 39.6464C9.95393 36.9872 7.63145 33.2746 6.69567 29.1196C5.7599 24.9646 6.2666 20.6149 8.13237 16.7862C9.99814 12.9575 13.1118 9.87818 16.9609 8.05493C20.81 6.23168 25.1651 5.7732 29.3095 6.75494C33.4539 7.73667 37.1405 10.1001 39.7627 13.4563C42.3848 16.8125 43.7862 20.9614 43.7362 25.2202C43.6862 29.479 42.1878 33.5938 39.4875 36.8875C37.7301 39.0312 35.5192 40.7585 33.0141 41.9451C30.509 43.1317 27.772 43.7482 25 43.75ZM25 8.75001C21.7861 8.75001 18.6443 9.70306 15.972 11.4886C13.2997 13.2742 11.2169 15.8121 9.98696 18.7814C8.75704 21.7507 8.43524 25.018 9.06225 28.1702C9.68925 31.3224 11.2369 34.2179 13.5095 36.4905C15.7821 38.7631 18.6776 40.3108 21.8298 40.9378C24.982 41.5648 28.2493 41.243 31.2186 40.0131C34.1879 38.7831 36.7258 36.7003 38.5114 34.028C40.297 31.3557 41.25 28.214 41.25 25C41.25 20.6902 39.538 16.557 36.4905 13.5095C33.443 10.4621 29.3098 8.75001 25 8.75001Z" fill="white"/>
                <path d="M11.475 36.1001C11.475 36.1001 24.0625 50.1626 36.875 37.5001L38.525 36.1001C38.525 36.1001 27.825 25.0001 16.9625 31.6626L11.475 36.1001Z" fill="white"/>
                <path d="M25 25C28.4518 25 31.25 22.2018 31.25 18.75C31.25 15.2982 28.4518 12.5 25 12.5C21.5482 12.5 18.75 15.2982 18.75 18.75C18.75 22.2018 21.5482 25 25 25Z" fill="white"/>
              </svg> 
            </label>
            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-40 mt-4 text-orange-500">
              <li><a>Profile</a></li>
              <li><a href="{{ route('transactions', ['id' => Auth::user()->id]) }}">Transaction</a></li>
              @if (Auth::user()->role == 'admin')
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
              @endif
              <form method="POST" action="{{ route('logout') }}">
              <li>
                    @csrf
                    <button type="submit">Logout</button>
                  </li>          
                </form>
            </ul>
          </div>
        @else
          <a href="{{ route('login') }}">
            <button class="btn btn-sm text-orange-500 bg-white hover:bg-orange-500 hover:text-white outline-none rounded-full">Sign In</button>
          </a>
        @endauth
        
        <button class="btn btn-sm text-orange-500 bg-white hover:bg-orange-500 hover:text-white outline-none rounded-full">Get Started</button>
      </div>

      {{-- Tombol Hamburger untuk layar kecil --}}
      <div class="md:hidden">
        <button id="menu-toggle" class="btn btn-ghost">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    {{-- Menu Dropdown untuk layar kecil --}}
    <div id="mobile-menu" class="hidden md:hidden bg-base-100 p-4">
      <ul class="menu menu-vertical">
        <li>
          <details>
            <summary>Home</summary>
            <ul class="p-2">
              <li><a>Home</a></li>
              <li><a>Event</a></li>
            </ul>
          </details>
        </li>
        <li><a>Destination</a></li>
        <li><a>Transportation</a></li>
        <li><a>Hotel</a></li>
        <li><a>Shop</a></li>
        <div class="mt-4">
          <button class="btn btn-sm btn-outline btn-secondary w-full mb-2 outline-none hover:outline-none">Sign In</button>
          <button class="btn btn-sm btn-outline btn-secondary w-full outline-none hover:outline-none">Get Started</button>
        </div>
      </ul>
    </div>
  </div>