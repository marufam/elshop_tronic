

<?php
if(isset($_POST['save'])){
    $a=buatkode('berita','BR');
	$b=$_POST['judul'];
	$c=$_POST['isi'];
	$d=$_FILES['gambar']['name'];
	$s=0;
	$date=date("d-m-Y"); 
	
	if ($b<>"" and $c<>"" and $d<>""){
	if (is_uploaded_file($_FILES['gambar']['tmp_name'])){
		move_uploaded_file($_FILES['gambar']['tmp_name'], "img_berita/".$d);
	}
   echo '<img src="image/loading-x.gif">';
	$sql="insert into berita values('$a','$b','$date','$c','$d','0')";
	$masuk=mysql_query($sql) or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=?page=berita">';
	}else{
	echo "isi data dengan lengkap";
	}
}else{
  ?>

      
<form enctype="multipart/form-data" method="post" action="" >
  <table width="679" border="0"  class="table">
      <tr>
        <td width="109">Judul</td>
        <td width="10">:</td>
        <td width="466"><input type="text" name="judul" required placeholder="Masukkan Nama....."  class="form-control">&nbsp;</td>
      </tr>
      <tr>
        <td>Isi</td>
        <td>:</td>
        <td><textarea cols="50" rows="5" name="isi" required  style="width: 90%;" class="form-control" placeholder="Masukkan isi....."></textarea></td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar" required placeholder="Masukkan Gambar....."  class="form-control" /></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" class="btn btn-danger" name="save" value="Simpan"></td>
      </tr>
    </table>
</form>

  <?php
}
?>