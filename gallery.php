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
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    
    <div class="flex flex-wrap w-full mb-20">

      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">

        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Welcome To My Gallery</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. At deserunt, quia vero quibusdam voluptatum obcaecati?</p>
    </div>
    
    <div class="flex flex-wrap -m-4">
      <?php
       $sql1 = "select * from gallery order by id desc";

       $q1   = mysqli_query($koneksi,$sql1);
       while ($r1 = mysqli_fetch_array($q1)){
         ?>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?php echo url_dasar()."/gambar/".gallery_foto($r1['id'])?>">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $r1['nama']?></h2>
          <p class="mt-1"><?php echo $r1['isi']?></p>
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