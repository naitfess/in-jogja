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
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mt-2">Plan Your Trip</h1>
      </div>
      
      <div class="container mx-auto lg:py-20 lg:w-full md:py-20 md:w-9/12 sm:py-16 py-12">  
        <div class="card flex flex-col lg:flex-row bg-base-100 shadow-xl">  
            <figure class="lg:w-1/2 p-4 md:p-6">  
                <img  
                src="{{ asset('images/destinations/candi-prambanan.jpg') }}"  
                alt="Mountain View"  
                class="rounded-xl object-cover w-full h-full" />  
            </figure>  
            <div class="card-body lg:w-1/2 p-4 md:p-6">  
                <h2 class="card-title text-xl md:text-3xl">Cultural Wonders Package</h2>  
                <h1 class="text-lg">Yogyakarta</h2>
                <h1 class="text-lg font-semibold">$2000</h2>
                <div class="divider divider-secondary my-2 md:my-0"></div>  
                <div class="flex items-center gap-2 ">
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
                    <p class="text-sm font-semibold">Days : 2</p>                       
                </div>
                <div class="flex items-center gap-2">
                  <svg width="14" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.3662 9.48215C13.3662 9.48215 13.1162 9.73212 12.6163 10.2321C12.1163 10.732 11.1598 10.982 9.74664 10.982C8.3335 10.982 7.12699 10.482 6.12713 9.48215C5.12726 8.48229 4.62733 7.27578 4.62733 5.86264C4.62733 4.44949 5.12726 3.24299 6.12713 2.24312C7.12699 1.24325 8.3335 0.74332 9.74664 0.74332C11.1598 0.74332 12.3663 1.24325 13.3662 2.24312C14.366 3.24299 14.866 4.44949 14.866 5.86264C14.866 7.27578 14.366 8.48229 13.3662 9.48215ZM13.3462 12.2618C14.8126 12.2618 16.0725 12.7884 17.1257 13.8416C18.1788 14.8948 18.7054 16.1546 18.7054 17.6211V19.3008C18.7054 19.8341 18.5188 20.2874 18.1455 20.6607C17.7722 21.0339 17.319 21.2206 16.7857 21.2206H2.70758C2.17432 21.2206 1.72105 21.0339 1.34777 20.6607C0.974484 20.2874 0.787842 19.8341 0.787842 19.3008V17.6211C0.787842 16.1546 1.31444 14.8948 2.36763 13.8416C3.42082 12.7884 4.68065 12.2618 6.14712 12.2618H6.82703C7.76024 12.6884 8.73345 12.9017 9.74664 12.9017C10.7598 12.9017 11.733 12.6884 12.6663 12.2618H13.3462Z" fill="#505050"/>
                  </svg>     
                  <p class="text-sm font-semibold">Max Capacity : 5</p>
                </div>
                <div class="flex items-center gap-2 ">
                    <svg id="fi_7585212" enable-background="new 0 0 32 32" height="14" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m14 23h4v7h-4z"></path><path d="m29 28h-2v-20c0-.6-.4-1-1-1h-1v-4c0-.6-.4-1-1-1h-16c-.6 0-1 .4-1 1v4h-1c-.6 0-1 .4-1 1v20h-2c-.6 0-1 .4-1 1s.4 1 1 1h9v-8c0-.6.4-1 1-1h6c.6 0 1 .4 1 1v8h9c.6 0 1-.4 1-1s-.4-1-1-1zm-7-18c.6 0 1 .4 1 1v2c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1zm-12 15c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1zm1-6c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1zm0-6c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1zm1-4c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1v2c0 .6-.4 1-1 1zm3 10c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1zm0-6c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1zm1-4c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1v2c0 .6-.4 1-1 1zm3 10c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1zm0-6c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1zm1-4c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1v2c0 .6-.4 1-1 1zm1 10v-2c0-.6.4-1 1-1s1 .4 1 1v2c0 .6-.4 1-1 1s-1-.4-1-1zm3 6c0 .6-.4 1-1 1s-1-.4-1-1v-2c0-.6.4-1 1-1s1 .4 1 1z"></path></svg>
                    <p class="text-sm font-semibold">Hotel : <a href="{{ route('hotel_details') }}" class="link">Hotel Tentrem</a></p>                      
                </div>
                <div class="flex items-center gap-2 ">
                  <svg id="fi_2207497" enable-background="new 0 0 512 512" viewBox="0 0 512 512" width="14" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill-rule="evenodd"><path d="m41.5 158.4c0-5.9001 4.8259-10.725 10.725-10.725h75.075v85.8h-85.8zm107.25-10.725h85.8v85.8h-85.8zm107.25 0h85.8v85.8h-85.8zm107.25 0h71.3215c10.1884 0 19.3051 7.5061 20.9135 17.6935l12.334 76.1503c1.0724 8.0437 2.1451 16.0875 2.1451 24.1312h-74.5391l-32.175-32.175zm-343.2 0v193.05c0 11.7968 9.6525 21.45 21.45 21.45h1.0725c-.5359-3.2189-1.0725-6.972-1.0725-10.725 0-29.4937 24.1315-53.625 53.625-53.625 29.494 0 53.625 24.1313 53.625 53.625 0 3.7531-.5359 7.5061-1.0724 10.725h195.1949c-.5359-3.2189-1.0725-6.972-1.0725-10.725 0-29.4937 24.1315-53.625 53.625-53.625 29.494 0 53.625 24.1313 53.625 53.625 0 3.7531-.5359 7.5061-1.0724 10.725h22.5224c11.7975 0 21.45-9.6532 21.45-21.45v-68.6407c0-11.2627-1.0727-23.0595-2.6808-34.3221l-12.3342-76.681c-3.7535-20.3782-21.45-35.3939-42.3635-35.3939h-393.0715c-11.7975.5377-21.45 10.1874-21.45 21.9877z"></path><path d="m432.9625 351.45c0 20.7308-16.8058 37.5375-37.5375 37.5375s-37.5375-16.8067-37.5375-37.5375 16.8058-37.5375 37.5375-37.5375 37.5375 16.8067 37.5375 37.5375z"></path><path d="m132.6625 351.45c0 20.7308-16.8058 37.5375-37.5375 37.5375s-37.5375-16.8067-37.5375-37.5375 16.8058-37.5375 37.5375-37.5375 37.5375 16.8067 37.5375 37.5375z"></path></g></svg>                            
                  <p class="text-sm font-semibold">Transportation : <a href="{{ route('transportation_details') }}" class="link">Toyota HiAce</a></p>  
                </div>
                <div class="flex items-center gap-2 ">
                    <svg id="fi_8189068" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg"><path id="box" d="m10.48 11.15a4.285 4.285 0 0 0 .77.24v9.52a2.64 2.64 0 0 1 -.47-.17l-6-2.67a3 3 0 0 1 -1.78-2.74v-6.66a2.955 2.955 0 0 1 .11-.79zm4.34-2.23-8.15-3.83-1.89.84a2.909 2.909 0 0 0 -.91.63l7.21 3.21a2.268 2.268 0 0 0 1.84 0zm5.31-2.36a2.909 2.909 0 0 0 -.91-.63l-6-2.67a2.966 2.966 0 0 0 -2.44 0l-2.29 1.02 8.15 3.83zm.76 1.32-3.51 1.56v2.45a.75.75 0 1 1 -1.5 0v-1.79l-2.36 1.05a5.275 5.275 0 0 1 -.77.24v9.52a2.64 2.64 0 0 0 .47-.17l6-2.67a3 3 0 0 0 1.78-2.74v-6.66a2.955 2.955 0 0 0 -.11-.79z" fill="rgb(0,0,0)"></path></svg>  
                    <p class="text-sm font-semibold">Products : <a href="{{ route('product_details') }}" class="link">Wayang Kulit</a>, <a href="#" class="link">Blankon</a></p>     
                </div>
                <div class="flex items-center gap-2 ">
                    <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="14" xmlns="http://www.w3.org/2000/svg" id="fi_3179068"><path d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg>            
                    <p class="text-sm font-semibold">Destinations : <a href="{{ route('destination_details') }}" class="link">Candi Prambananan</a>, <a href="#" class="link">Candi Borobudur</a></p>                 
                </div>
                <p class="text-sm md:text-base mt-2">  
                  Experience the rich cultural heritage of Yogyakarta with this exclusive package. Immerse yourself in traditional arts like Wayang Kulit and explore the iconic temples of Candi Prambanan and Candi Borobudur. Stay in comfort at Hotel Tentrem, known for its luxurious ambiance, and travel in style with a private Toyota HiAce. This package offers a perfect blend of culture, comfort, and convenience, designed for those looking to explore the beauty of Yogyakarta in just two days.

                  Feel free to adjust if you need something more specific!
                </p>
                {{-- Form --}}
                <form class="space-y-5 w-full" action="{{ route('orders') }}" method="POST">  
                  @csrf
                    <div class="w-full space-y-4">  
                        <div class="form-control w-full">  
                            <div class="label px-0">  
                                <span class="label-text">Select Date</span>  
                            </div>  
                            <input   
                                type="date"   
                                class="input input-bordered w-full"   
                                placeholder="Select Date"  
                                name="date" 
                            />  
        
                            <div class="label px-0 mt-4">  
                                <span class="label-text">Start Time</span>  
                            </div>  
                            <input   
                                type="time"   
                                class="input input-bordered w-full"   
                                placeholder="Start Time" 
                                name="time"  
                            />  
                        </div>  
                    </div>   
                
                    <div class="pb-2 w-full">  
                        <button type="submit" class="btn w-full rounded-full bg-gradient-to-r from-orange-400 to-orange-500 hover:from-orange-500 hover:to-orange-600 text-white font-semibold mt-6 transition-all duration-300 transform hover:scale-105 hover:shadow-lg border-none">  
                            Book Order  
                        </button>  
                    </div>  
                </form>  
            </div>  
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