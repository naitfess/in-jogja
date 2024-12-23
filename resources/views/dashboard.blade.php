<!doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  @vite('resources/css/app.css') <!-- Ensure this points to your compiled CSS -->  
  <title>Your Page Title</title> <!-- Add a title for better SEO -->  
</head>  
<body class="bg-base-100 overflow-x-hidden min-h-screen">  
  {{-- Navbar --}}  
  <x-navbar id="navbar" />  

  {{-- Hero --}}  
  <x-hero-secondary :title="$title"/>

  {{-- Main content --}}  
  <div class="min-h-screen relative">  
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

    <div class="container mx-auto z-10 pt-16">  
      {{-- Tabs --}}  
      <div class="tabs tabs-bordered mb-4">  
        <a role="tab" class="tab tab-active">Order</a>  
        <a role="tab" class="tab hover:tab-active">User</a>  
        <a role="tab" class="tab hover:tab-active">Destination</a>  
        <a role="tab" class="tab hover:tab-active">Tour</a>  
        <a role="tab" class="tab hover:tab-active">Transportation</a>  
        <a role="tab" class="tab hover:tab-active">Hotel</a>  
        <a role="tab" class="tab hover:tab-active">Event</a>  
        <a role="tab" class="tab hover:tab-active">Product</a>  
      </div>  

      <div class="overflow-x-auto mt-4">  
        <table class="table w-full border-collapse">  
          <!-- Head -->  
          <thead>  
            <tr class="bg-gray-200">  
              <th class="p-4 text-left">No</th>  
              <th class="p-4 text-left">Name</th>  
              <th class="p-4 text-left">Email</th>  
              <th class="p-4 text-left">Tour</th>  
              <th class="p-4 text-left">Date</th>  
              <th class="p-4 text-left">Time</th>
              <th class="p-4 text-left">Payment Confirmation</th>
              <th class="p-4 text-left">Status</th>
              <th class="p-4 text-left">Action</th>
            </tr>  
          </thead>  
          <tbody>  
            @foreach ($orders as $order)
            <tr class="hover:bg-gray-100">  
              <th class="p-4">{{ $loop->iteration }}</th>  
              <td class="p-4">{{ $order->user->name }}</td>  
              <td class="p-4">{{ $order->user->email }}</td>  
              <td class="p-4">{{ $order->tour->name }}</td>  
              <td class="p-4">{{ $order->date }}</td>  
              <td class="p-4">{{ \Carbon\Carbon::parse($order->time)->format('H:i') }}</td>  
              <td class="p-4">
                @if ($order->payment == null)
                  -
                  @else
                  <a class="link link-secondary" href="{{ asset('media/'.$order->payment) }}" target="_blank">Click to open</a>
                  @endif
              </td>  
              <td class="p-4">{{ $order->status }}</td>  
              <td class="p-4">
                <form action="{{ route('confirmOrder', $order->id) }}" method="POST" class="inline">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn btn-sm btn-success text-white">Confirm</button>
                </form>
                <button class="btn btn-sm btn-error text-white">Delete</button>  
              </td>  
            </tr>  
            @endforeach
          </tbody>  
        </table>  
      </div>  
    </div>  
  </div>  

  {{-- Footer --}}  
  <x-footer />  

  <script>  
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