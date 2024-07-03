<?php require_once('config/main.php');
$mysqli = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($mysqli->connect_error) {
  die("Koneksi gagal: " . $mysqli->connect_error);
}

// Menjalankan query dan menyimpan hasilnya
$data_pembelian = $mysqli->query("SELECT * FROM user");
$data_teknisi = $mysqli->query("SELECT * FROM teknisi1");
$data_user = $mysqli->query("SELECT * FROM user1");
$data_spk = $mysqli->query("SELECT * FROM teknisi");
?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo mysqli_num_rows($data_user); ?></h3>
        <p>Data User</p>
      </div>
      <div class="icon">
        <i class="fa fa-user"></i>
      </div>
      <a href="./?page=data_user" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo mysqli_num_rows($data_pembelian); ?></h3>
        <p>Data Pembelian</p>
      </div>
      <div class="icon">
        <i class="fa fa-money"></i>
      </div>
      <a href="./?page=data_pembelian" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo mysqli_num_rows($data_teknisi); ?></h3>
        <p>Data Teknisi</p>
      </div>
      <div class="icon">
        <i class="fa fa-group"></i>
      </div>
      <a href="./?page=data_teknisi" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo mysqli_num_rows($data_spk); ?></h3>
        <p>Data SPK</p>
      </div>
      <div class="icon">
        <i class="fa fa-file"></i>
      </div>
      <a href="./?page=spk" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
</div><!-- /.row -->
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>