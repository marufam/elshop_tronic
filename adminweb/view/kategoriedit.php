<?php


if ($_GET) {
    if (isset($_POST['simpan'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];


        if ($b <> "") {
            $sql = "update kategori set kategori='$b' where kode ='" . $_GET['kd'] . "'";
            $masuk = mysql_query($sql) or die (mysql_error());
        }else{
            echo "Isi data dengan lengkap";
        }
        echo '<meta http-equiv="refresh" content="0; url=?page=kategori">';

    }
}


$tampil = mysql_query("select * from kategori where kode='" . $_GET['kd'] . "'") or die (mysql_error());
$data = mysql_fetch_array($tampil);
?>
<form method="post" action="" ENCTYPE="multipart/form-data">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kategori</h4>
    </div>
    <div class="modal-body">


        <table width="282" border="0" class="table ">

            <tr>
                <td width="59">Kode</td>
                <td width="3">:</td>
                <td width="206"><label>
                        <input class="form-control" required type="text" name="a" id="a" value="<?php
                        echo $data['kode']; ?>">
                    </label></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="b" id="b" value="<?php
                    echo $data['kategori']; ?>" required></td>
            </tr>


        </table>


    </div>
    <div class="modal-footer">
        <input class="btn btn-primary" type="submit" name="simpan" id="button" value="Simpan">
        <input type="reset" name="reset" name="reset" value="reset" class="btn btn-danger">
    </div>
</form>