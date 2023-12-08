<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/flowbite/dist/flowbite.css" />
    <link rel="stylesheet" href="public/css/output.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;700;800&display=swap"
      rel="stylesheet"
    />
    
  </head>
  <body class="bg-gray-200">
    <!-- bagian navbar
<section>
  <nav class="">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="/assets/images/icon/logo-namara.png" class="relative w-20" alt="">
    </a>
    <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-button focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-hamburger" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div class="hidden w-full" id="navbar-hamburger">
      <ul class="flex flex-col font-medium mt-4 rounded-lg gap-1">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-gray-500 hover:bg-gray-700 hover:duration-500 rounded-full" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white  bg-gray-500 hover:bg-gray-700 hover:duration-500 rounded-full">Products</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-gray-500 hover:bg-gray-700 hover:duration-500 rounded-full">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>   -->



<nav class="  w-full z-20 top-0 start-0 border-b border-gray-200 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="public/images/icon/logo-namara.png" class="h-8" alt="NamaraSnack Logo">
        <span class="self-center font-semibold whitespace-nowrap text-button text-lg lg:text-3xl">Namara<span class="font-light text-buttontext">Snack</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a href="login.php">
        <button type="button" class="text-white bg-yellow-500 hover:bg-yellow-800 hover:text-black hover:duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Get started</button> </a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        <li>
          <a href="#" class="block py-2 px-3 text-black rounded md:text-black md:hover:text-blue-700 lg:text-black md:p-2 lg:p-2" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-black rounded md:hover:rounded-xl md:hover:text-blue-700 md:p-2 lg:p-2">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-2 lg:p-2">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-2 lg:p-2">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  

  
 <!-- Bagian Carousel -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-52 md:h-52 lg:h-96 overflow-hidden rounded-sm">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Keripik Pisang Lumer.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Banana Lava & Banana Crispy Nugget.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Header.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Keripik Seblak.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96"  alt="...">
      </div>
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>

<!-- Bagian Category -->
<section>
<div>
  <h3 class="flex justify-center font-bold text-2xl md:text-4xl mt-6 text-button"> 
    Category
  </h3>
</div>

<div class="p-1 flex flex-wrap items-center justify-center">

  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-pinknamara rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
          style="transform: scale(1.5); opacity: 0.1;">
          <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
          <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
          <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
              style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
          </div>
          <img class="relative w-40" src="public/images/card/Pisang-lumer.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
          <span class="block opacity-75 -mb-1">Category</span>
          <div class="flex justify-between">
              <span class="block font-semibold text-xl">Pisang</span>
              <a href="">
              <button class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button></a>
          </div>
      </div>
  </div>
  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-button rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
          style="transform: scale(1.5); opacity: 0.1;">
          <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
          <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
          <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
              style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
          </div>
          <img class="relative w-40" src="public/images/card/kerupuk-seblak.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
          <span class="block opacity-75 -mb-1">Category</span>
          <div class="flex justify-between">
              <span class="block font-semibold text-lg">Seblak</span>
              <a href="">
             <button class="bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button>
            </a>
          </div>
      </div>
  </div>

  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-pinknamara   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
          style="transform: scale(1.5); opacity: 0.1;">
          <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
          <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
          <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
              style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
          </div>
          <img class="relative w-40" src="public/images/card/kerupuk-basreng.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
          <span class="block opacity-75 -mb-1">Category</span>
          <div class="flex justify-between">
              <span class="block font-semibold text-xl">Basreng</span>
              <a href="">
              <button class="bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
            </a>
          </div>
      </div>
  </div>
  </div>  
</section>


<!-- Bagian Produk Test -->
<section>
    <div>
      <h3 class="flex justify-center font-bold text-2xl md:text-4xl mt-6 text-button"> 
        Produk Lainnya
      </h3>
    </div>
    
    <div class="p-1 flex flex-wrap items-center justify-center">
    
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500 rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
          <div class="relative pt-10 px-10 flex items-center justify-center">
              <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
              </div>
              <img class="relative w-40" src="public/images/card/Pisang-lumer.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
              <span class="block opacity-75 -mb-1">Produk</span>
              <div class="flex justify-between">
                  <span class="block font-semibold text-xl">Pisang Lumer</span>
                  <a href="">
                  <button class="block bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button></a>
              </div>
          </div>
      </div>
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500 rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
          <div class="relative pt-10 px-10 flex items-center justify-center">
              <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
              </div>
              <img class="relative w-40" src="public/images/card/kerupuk-seblak.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
              <span class="block opacity-75 -mb-1">Produk</span>
              <div class="flex justify-between">
                  <span class="block font-semibold text-lg">Kerupuk Seblak</span>
                  <a href="">
                 <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button>
                </a>
              </div>
          </div>
      </div>
    
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500 rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
          <div class="relative pt-10 px-10 flex items-center justify-center">
              <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
              </div>
              <img class="relative w-40" src="public/images/card/kerupuk-basreng.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
              <span class="block opacity-75 -mb-1">Produk</span>
              <div class="flex justify-between">
                  <span class="block font-semibold text-xl">Basreng</span>
                  <a href="">
                  <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
                </a>
              </div>
          </div>
      </div>
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
        
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40" src="public/images/card/pisanglumerbanget.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Produk</span>
            <div class="flex justify-between">
                <span class="block font-semibold text-lg">Banana Nugget</span>
                <a href="">
                <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
              </a>
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
       
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40 h-[215px]" src="public/images/card/pisangkrispilumer.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Produk</span>
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">Keju Aroma</span>
                <a href="">
                <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
              </a>
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40 h-[215px]" src="public/images/card/pisangkrispikejucoklaat.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Produk</span>
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">Banana Lava</span>
                <a href="">
                <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
              </a>
            </div>
        </div>
    </div>
    
      </div>  
    </section>
        
        

    


<!-- Bagian Footer -->
<section class="">
  <div class="relative py-4 bg-center bg-no-repeat bg-cover">
      <div class="absolute top-0 left-0 w-full h-full bg-button bg-opacity-90"></div>
      <div class="relative z-10 justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-0">
          <div class="flex flex-wrap pb-10 -mx-3">
              <div class="w-full px-4 md:w-1/4 lg:w-2/12 mb-11 lg:mb-0">
                  <h2 class="pb-2 text-lg font-bold text-gray-700">Quick Links</h2>
                  <div class="w-16 mb-4 border-b-2 border-gray-700"></div>
                  <ul>
                      <li class="mb-4">
                          <a href="#" class="inline-block text-base font-normal text-buttontext hover:text-gray-200">Home</a>
                      </li>
                      <li class="mb-4">
                          <a href="#" class="inline-block text-base font-normal text-buttontext hover:text-gray-200">
                              Produk</a>
                      </li>
                      <li class="mb-4">
                          <a href="#"
                              class="inline-block text-base font-normal text-buttontext hover:text-gray-200">Contact</a>
                      </li>
                  </ul>
              </div>
              
              <div class="w-full px-4 mb-11 lg:mb-0 md:w-1/3 lg:w-3/12">
                  <h2 class="pb-2 text-lg font-bold text-gray-700 ">
                      Stay Connected</h2>
                  <div class="w-16 mb-4 border-b-2 border-gray-700 "></div>
                  <div class="flex justify-start mt-4 ">
                      <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6283150165410&text&type=phone_number&app_absent=0" type="button"
                          class="m-1 leading-normal text-gray-300 uppercase transition duration-150 ease-in-out border-2 border-gray-400 rounded-full  hover:border-gray-600 hover:bg-gray-600 w-9 h-9">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgb(102, 102, 102);transform: msFilter"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg>
                      </a>
                      <a target="_blank" href="https://www.instagram.com/namara.snack" type="button"
                          class="m-1 leading-normal text-gray-300 uppercase transition duration-150 ease-in-out border-2 border-gray-400 rounded-full  hover:border-gray-600 hover:bg-gray-600 w-9 h-9">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgb(112, 111, 111);transform: msFilter"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg>
                      </a>  
                  </div>
              </div>
          </div>
      </div>
</section>





    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
