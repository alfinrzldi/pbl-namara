<?php
//user masih bisa langsung mengakses dashboard tanpa harus login, HARUS DIPERBAIKI!!!!!
session_start();
require 'db.php';
if($_SESSION['status_login'] != true){
  header('location: login.php');
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <!-- Navbar -->
  <nav class="  w-full z-20 top-0 start-0 border-b border-gray-500 bg-button">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="public/images/icon/logo-namara.png" class="h-8" alt="NamaraSnack Logo">
        <span class="self-center font-semibold whitespace-nowrap text-buttontext text-lg lg:text-3xl">Namara<span class="font-light text-buttontext">Snack</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <a class="text-button bg-gray-700 p-2 rounded-xl hover:text-gray-200 hover:bg-gray-900 hover:duration-500 font-semibold" href="logout.php">Logout</a>
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
          <a href="#" class="block py-2 px-3 text-black rounded md:text-black md:hover:text-blue-700 lg:text-black md:p-2 lg:p-2" aria-current="page">Dashboard</a>
        </li>
        <li>
          <a href="data-category.php" class="block py-2 px-3 text-black rounded md:hover:rounded-xl md:hover:text-blue-700 md:p-2 lg:p-2">Kategori</a>
        </li>
        <li>
          <a href="data-produk.php" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-2 lg:p-2">Produk</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <!-- Content -->
  <section class="p-24 border-4 border-b-gray-800">
  <div>
<h3>Dashboard</h3>
  </div>
  <div class="bg-white border-2 p-5 box-border">
    <h4>
   Selamat datang <?php  echo $_SESSION['a_global']-> admin_name?> di NamaraSnack
  </h4>
</div>
</section>

<!-- Footer -->
<footer class="p-5 text-center">
  <div>
    <small>
      copyright &copy; 2023 NamaraSnack
    </small>
  </div>
</footer>

    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>