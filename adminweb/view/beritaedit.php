<?php 

if($_GET['page']=="beritaedit"){
  $Kode = isset($_GET['id']) ?  $_GET['id'] : $_POST['kdberita'];
  $sqlShow= "SELECT * FROM berita WHERE kdberita='$Kode'";
  $qryShow= mysql_query($sqlShow)  or die ("Query salah : ".mysql_error());
  $dataShow = mysql_fetch_array($qryShow); 
  $a  = isset($dataShow['judul']) ?  $dataShow['judul'] : $_POST['judul'];
  $b  = isset($dataShow['isi']) ?  $dataShow['isi'] : $_POST['isi'];
  $c  = isset($dataShow['gambar']) ?  $dataShow['gambar'] : $_POST['gambar'];
  $x = isset($dataShow['kdberita']) ? $dataShow['kdberita'] : $_POST['kdberita'];
  
}
?>



<?php



if(isset($_POST['save'])){
	$b=$_POST['judul'];
	$c=$_POST['isi'];
	$d=$_FILES['gambar']['name'];
  $x=$_POST['kdberita'];
  $date=date("d-m-Y"); 
	
	if ($b<>"" and $c<>""){

    if($d<>""){
     if (is_uploaded_file($_FILES['gambar']['tmp_name'])){
    move_uploaded_file($_FILES['gambar']['tmp_name'], "img_berita/".$d);
    } 
    $sql="update berita set judul='$b', isi='$c', tanggal='$date', gambar='$d' where kdberita='$x' ";
    $masuk=mysql_query($sql) or die (mysql_error());
    echo '<meta http-equiv="refresh" content="0; url=?page=berita">';
    }else{
     $sql="update berita set judul='$b', isi='$c', tanggal='$date' where kdberita='$x' ";
    $masuk=mysql_query($sql) or die (mysql_error());
    echo '<meta http-equiv="refresh" content="0; url=?page=berita">';
    }
	
	}else{
	echo "isi data dengan lengkap";
	}
}else{
?>

<div class="judulp">
        <h3>Edit Berita</h3> 
        <br>
      </div>
      
<form enctype="multipart/form-data" method="post">
  <table width="679" border="0"  class="table">
      <tr>
        <td width="109">Judul</td>
        <td width="10">:</td><input type="hidden" name="kdberita" value="<?php echo $x ?>" />
        <td width="466"><input type="text" value="<?php echo $a ?>" name="judul" placeholder="Masukkan Judul....."  class="form-control" required>&nbsp;</td>
      </tr>
      <tr>
        <td>Isi</td>
        <td>:</td>
        <td><textarea class="form-control" required cols="50" rows="5" name="isi" placeholder="Masukkan isi....."><?php echo $b ?></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><img src="img_berita/<?php echo $c; ?>" width="100px"></td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar" value="<?php $c ?>" placeholder="Masukkan Gambar....."  class="form-control" /></td>
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