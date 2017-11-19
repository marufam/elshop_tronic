<?php
/**
 * Created by PhpStorm.
 * User: Maruf
 * Date: 04/12/2015
 * Time: 16:42
 */
if(isset($_GET['page'])){

    $id = 1;
    $sql=mysql_query("select * from informasi where kdinformasi='$id'") or die (mysql_error());
    $data=mysql_fetch_array($sql);


    if(isset($_POST['simpan'])){
        $a = addslashes(strip_tags($_POST['a']));
        $b = addslashes(strip_tags($_POST['b']));
        $c = addslashes(strip_tags($_POST['c']));
        $d=$_FILES['d']['name'];
        if(!empty($d)){

            $sd="update informasi set favicon='$d' WHERE kdinformasi='1'";
            $da1=mysql_query($sd) or die(mysql_error());
            move_uploaded_file($_FILES['d']['tmp_name'], $d);
        }

        $sqls="update informasi set nama='$a', meta_desk='$b', meta_key='$c' where kdinformasi='1'";
        $masuk=mysql_query($sqls) or die(mysql_error());
        if($masuk){
            echo "<meta http-equiv='refresh' content='0; url=?page=informasi'>";
        }else{
            echo "Data Gagal Di Simpan";
        }
    }
}
?>
<div class="row">

    <div class="md-card-content">
        <h3 class="heading_a">Informasi Website</h3>
        <hr>
        <form action="" method="post"enctype="multipart/form-data">
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium">
                    <label>Nama</label>
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><input type="text" name="a" value="<?php echo $data['nama']; ?>"
                                                             class="form-control" required><span
                                class="md-input-bar"></span></div>

                    </div>
                    <label>Meta Desk</label>
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><textarea class="form-control" required  name="b"><?php echo $data['meta_desk']; ?>
                                                             </textarea><span
                                class="md-input-bar"></span></div>

                    </div>
                    <label>Meta Key</label>
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><textarea  name="c"class="form-control" required> <?php echo $data['meta_key']; ?></textarea><span
                                class="md-input-bar"></span></div>

                    </div>
                    <label>Favicon</label>
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><input type="file" name="d" value="<?php echo $data['favicon']; ?>"
                                                             class="form-control"><span
                                class="md-input-bar"></span></div>

                    </div>
                    <label>Favicon</label>
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><img src="<?php echo $data['favicon']; ?>"><span
                                class="md-input-bar"></span></div>

                    </div>

                </div>
            </div>
            <br>
            <input type="submit" class="md-btn md-btn-primary" name="simpan" value="Simpan">
        </form>
    </div>
</div>
