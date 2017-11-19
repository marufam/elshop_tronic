<?php
/**
 * Created by PhpStorm.
 * User: Maruf
 * Date: 21/12/2015
 * Time: 21:02
 */

if(isset($_GET['page'])){
    if(file_exists($_GET['page'].".php")) {
        include $_GET['page'] . ".php";
    }else{
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
}else{
    include "banner.php";
    include "produk.php";
}
?>