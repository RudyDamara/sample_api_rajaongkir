<?php require_once 'kota.php'; 
$provinsi_asal_api= new Kota();
$kota_asal_api= new Kota();
$provinsi_tujuan_api= new Kota();
$kota_tujuan_api= new Kota();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RajaOngkir - Ongkir</title>
</head>
<body>
<div>
<h1>Cek Ongkir</h1>
<hr>
<h3>Asal</h3>
<label for="">Provinsi</label><br>
<select name="provinsi_asal" id="provinsi_asal">
  <option value="">--PILIH--</option>
  <?php foreach ($provinsi_asal_api->ambil_provinsi()['rajaongkir']['results'] as $data_provinsi) { ?>
  <option value=""><?php echo $data_provinsi['province'] ?></option>
  <?php }?>
</select>  
</div>
<br>
<div>
<label for="">Kota</label><br>
<select name="kota_asal" id="kota_asal">
  <option value="">--PILIH--</option>
  <?php foreach ($kota_asal_api->ambil_kota()['rajaongkir']['results'] as $data_kota) { ?>
  <option value=""><?php echo $data_kota['city_name'] ?></option>
  <?php }?>
</select>  
</div>
<hr>
<h3>Tujuan</h3>
<label for="">Provinsi</label><br>
<select name="provinsi_tujuan" id="provinsi_tujuan">
  <option value="">--PILIH--</option>
  <?php foreach ($provinsi_tujuan_api->ambil_provinsi()['rajaongkir']['results'] as $data_provinsi) { ?>
  <option value=""><?php echo $data_provinsi['province'] ?></option>
  <?php }?>
</select>  
</div>
<br>
<div>
<label for="">Kota</label><br>
<select name="kota_tujuan" id="kota_tujuan">
  <option value="">--PILIH--</option>
  <?php foreach ($kota_tujuan_api->ambil_kota()['rajaongkir']['results'] as $data_kota) { ?>
  <option value=""><?php echo $data_kota['city_name'] ?></option>
  <?php }?>
</select>  
</div>
<hr>
</body>
</html>