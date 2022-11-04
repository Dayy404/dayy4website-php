<?php
include_once("dayy/koneksi.php");
include_once("dayy/dayy_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dayy404 | Gallery</title>
    <link rel="stylesheet" href="css/gallery.css">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--TAILWIND CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <!--NAVBAR-->
<nav class="navbar navbar-expand-lg bg-light text-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><?php echo ambil_judul('29')?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <i class="bars text-primary fa-solid fa-bars"></i>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" text-dark aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/category/downloads/index.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Downloads
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/category/downloads/android/index.html">Apps Android</a></li>
              <li><a class="dropdown-item" href="/category/downloads/windows/index.html">Apps Windows</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://saweria.co/Dayy404" target="_blank">Donate</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    
  <!--FOTO-->
  <section class="text-light body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="lg:w-2/3 mx-auto">
        <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
          <img alt="gallery" class="w-full object-cover h-full object-center block opacity-100 absolute inset-0" src="https://h.top4top.io/p_24976xeal0.jpg">
          <div class="text-center relative z-10 w-full">
            <h2 class="text-2xl text-light font-medium title-font mb-2">Nanda_Yoh</h2>
            <p class="leading-relaxed">:v</p>
            <a class="mt-3 text-indigo-500 inline-eboard +1 mustache fixie paleo lumbersexualflex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex flex-wrap -mx-2">
          <div class="px-2 w-1/2">
            <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
              <img alt="gallery" class="w-full object-cover h-full object-center block opacity-100 absolute inset-0" src="https://h.top4top.io/p_24976xeal0.jpg">
              <div class="text-center relative z-10 w-full">
                <h2 class="text-xl text-light font-medium title-font mb-2">Nanda_Yoh</h2>
                <p class="leading-relaxed">:v</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="px-2 w-1/2">
            <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
              <img alt="gallery" class="w-full object-cover h-full object-center block opacity-100 absolute inset-0" src="https://h.top4top.io/p_24976xeal0.jpg">
              <div class="text-center relative z-10 w-full">
                <h2 class="text-xl text-light font-medium title-font mb-2">Nanda_Yoh</h2>
                <p class="leading-relaxed">:v</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
     
</body>
</html>