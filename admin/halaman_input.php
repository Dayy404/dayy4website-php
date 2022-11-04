<?php include('dayy_header.php')?>
<?php
$judul        = "";
$ucapandihome = "";
$moreinfo     = "";
$error        = "";
$sukses       = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1 = "select * from halaman where id ='$id'";
    $q1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($q1);
    $judul= $r1['judulnavbar'];
    $ucapandihome = $r1['ucapandihome'];
    $moreinfo = $r1['moreinfo'];

    if($moreinfo == ''){
        $error = "Data tidak ditemukan";
    }
}


if(isset($_POST['simpan'])){
    $judul        = $_POST['judul'];
    $moreinfo     = $_POST['moreinfo'];
    $ucapandihome = $_POST['ucapandihome'];

    if($judul == '' or $ucapandihome == ''){
        $error = "Silahkan Masukkan Semua Data Yakni Adalah Data Judul dan Ucapan.";
    }

    if(empty($error)){
        if($id != ""){
            $sql1 = "update halaman set judulnavbar = '$judul',ucapandihome = '$ucapandihome',moreinfo = '$moreinfo',tgl_isi=now() where id = '$id'";
        }else{
            $sql1 = "insert into halaman(judulnavbar,ucapandihome,moreinfo) values ('$judul','$ucapandihome','$moreinfo')";
        }
        
        $q1   = mysqli_query($koneksi,$sql1);
        if($q1){
           $sukses = "Sukses memasukkan data";
        }else{
            $eror = "Haduh GAGAL bro masukkan data";
        }
    }
}

?>
<h1 class="pt-5">Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halaman.php"><< Kembali Ke Halaman Admin</a>
</div>
<?php
if($error){
   ?>
   <div class="alert alert-danger" role="alert">
    <?php echo $error ?>
   </div>
   <?php
}
?>
<?php
if($sukses){
   ?>
   <div class="alert alert-primary" role="alert">
    <?php echo $sukses ?>
   </div>
   <?php
}
?>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="ucapandihome" class="col-sm-2 col-form-label">Ucapan Di Home</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="ucapandihome" id="summernote" value="<?php echo $ucapandihome ?>" name="ucapandihome">
        </div>
    </div>
    <div class="mb-3 row">
    <label for="moreinfo" class="col-sm-2 col-form-label">More Info</label>
    <div class="col-sm-10">
      <textarea name="moreinfo" class="form-control" id="summernote"><?php echo $moreinfo?></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
     <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
   </div>
  </div>
</form>
<?php include('dayy_footer.php')?>