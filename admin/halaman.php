<?php include('dayy_header.php')?>
  <?php
  $sukses = "";

  $katakunci = (isset($_GET['katakunci']))?$_GET['katakunci']:"";
  if(isset($_GET['op'])){
    $op = $_GET['op'];
  }else{
    $op = "";
  }
  if($op == 'delete'){
    $id   = $_GET['id'];
    $sql1 = "delete from halaman where id = '$id'";
    $q1   = mysqli_query($koneksi,$sql1);
    if($q1){
      $sukses = "Berhasil Di Hapus Tuh";
    }
  }
  ?>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
  .halad {
    font-family: 'Lobster', cursive;
  }
  </style>
  <h1 class="text-center halad" style="padding-top:30px">Halaman Admin</h1>
  <p class="text-center">
    <a href="halaman_input.php">
      <input type="button" class="btn btn-primary" value="Buat Halaman Baru">
    </a>
  </p>
  <?php
  if($sukses){
    ?>
    <div class="alert alert-primary" role="alert">
      <?php echo $sukses ?>
    </div>
    <?php
  }
  ?>
  <form class="d-flex" menthod="get">
        <input class="form-control me-2" type="text" placeholder="Cari Kata Kunci" name="katakunci" value="<?php echo $katakunci?>">
        <input class="btn btn-outline-primary" type="submit" name="cari" value="Cari"></input>
      </form>
<br>
      <table class="table table-strippe">
        <thead>
          <tr>
            <th class="col-1">#</th>
            <th>JudulNavBar</th>
            <th>Ucapan</th>
            <th class="col-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sqltambahan = "";
          $per_halaman = 2;
          if($katakunci != ''){
             $array_katakunci = explode(" ",$katakunci);
             for($x=0;$x < count($array_katakunci);$x++){
              $sqlcari[] = "(judulnavbar like '%".$array_katakunci[$x]."%' or ucapandihome like '%".$array_katakunci[$x]."%' or moreinfo like '%".$array_katakunci[$x]."%')";
             }
             $sqltambahan = " where ".implode(" or ",$sqlcari);
          }
          $sql1 = "select * from halaman $sqltambahan";
          $page = isset($_GET['page'])?(int)$_GET['page']:1;
          $mulai= ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
          $q1   = mysqli_query($koneksi,$sql1);
          $total= mysqli_num_rows($q1);
          $pages= ceil($total / $per_halaman);
          $nomor= $mulai + 1;
          $sql1 = $sql1." order by id desc limit $mulai,$per_halaman";


          $q1   = mysqli_query($koneksi, $sql1);
          while($r1 = mysqli_fetch_array($q1)){
            ?>
            <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r1['judulnavbar']?></td>
            <td><?php echo $r1['ucapandihome']?></td>
            <td>
              <a href="halaman_input.php?id=<?php echo $r1['id']?>">
                <span class="badge text-bg-warning">Edit</span>
              </a>
              <a href="halaman.php?op=delete&id=<?php echo $r1['id']?>" onclick="return confirm('Yakin Datanya Mau Dihapus?')">
                <span class="badge text-bg-danger">Delete</span>
              </a>
            </td>
          </tr>
            <?php
          }
          ?>
          
        </tbody>
      </table>

      <nav aria-label="Page navigation example">
         <ul class="pagination">
          <?php
          $cari = (isset($_GET['cari']))?$_GET['cari']: "";

          for($i=1; $i <= $pages; $i++){
            ?>
            <li class="page-item">
              <a class="page-link" href="halaman.php?katakunci=<?php echo $katakunci?>&cari=<?php echo $cari?>&page=<?php echo $i ?>"><?php echo $i?></a>
            </li>
            <?php
          }
          ?>
         </ul>
      </nav>
<?php include('dayy_footer.php')?>