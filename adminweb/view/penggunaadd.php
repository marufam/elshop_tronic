<?php


if ($_GET) {
    if (isset($_POST['simpan'])) {
        $a = buatkode('admin', 'AD');
        $b = $_POST['b'];
        $c = $_POST['c'];

        if ($a <> "" and $b <> "" and $c <> "") {

            $sql = "insert into admin(id, username, password)  values('$a','$b','$c')";
            $masuk = mysql_query($sql) or die (mysql_error());
            echo '<meta http-equiv="refresh" content="0; url=?page=pengguna">';
        } else {
            echo "isi data dengan lengkap";
        }
    }
}

?>
