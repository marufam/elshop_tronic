<?php


if ($_GET){
  if (isset($_POST['simpan'])){
    $a=buatkode('slider','SL');

    $c=$_POST['c'];
    $b=$_FILES['b']['name'];

    if ($c<>""){


      if (is_uploaded_file($_FILES['b']['tmp_name'])){
        move_uploaded_file($_FILES['b']['tmp_name'], "slider/".$b);
      }
	
	if ($b<>""){
	$sql="update slider set slider='$b',  keterangan='$c' where kdslider='".$_GET['kd']."'";
	$masuk=mysql_query($sql) or die (mysql_error());
	}else{
	$sql="update slider set  keterangan='$c' where kdslider='".$_GET['kd']."'";
	$masuk=mysql_query($sql) or die (mysql_error());
	}
	echo '<meta http-equiv="refresh" content="0; url=?page=slider">';
	}else{
	echo "isi data dengan lengkap";
	}
	}
	}

$tampil=mysql_query("select * from slider where kdslider='".$_GET['kd']."'") or die (mysql_error());
$data=mysql_fetch_array($tampil);
?>
<form method="post" action="" ENCTYPE="multipart/form-data">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Slider</h4>
  </div>
  <div class="modal-body">


    <table width="282" border="0" class="table ">

      <tr>
        <td width="59">Kode</td>
        <td width="3">:</td>
        <td width="206"><label>
            <input class="form-control" required type="text" name="a" id="a" value="<?php
            echo $data['kdslider']; ?>">
          </label></td>
      </tr>
      <tr>
        <td>Slider</td>
        <td>:</td>
        <td><img src="slider/<?php
          echo $data['slider']; ?>" alt="" class="img-responsive"><input class="form-control"  type="file" name="b" id="b"></td>
      </tr>

      <tr>
        <td>Ket</td>
        <td>:</td>
        <td><textarea class="form-control" required name="c"><?php
            echo $data['keterangan']; ?></textarea></td>
      </tr>

      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label>

          </label></td>
      </tr>
    </table>


  </div>
  <div class="modal-footer">
    <input class="btn btn-primary" type="submit" name="simpan" id="button" value="Simpan">
    <input type="reset" name="reset" name="reset" value="reset" class="btn btn-danger">
  </div>
</form>