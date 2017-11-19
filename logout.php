<?php
/**
 * Created by PhpStorm.
 * User: Maruf
 * Date: 25/12/2015
 * Time: 13:34
 */
error_reporting(0);
session_start();
session_destroy();
echo '<meta http-equiv="refresh" content="0; url=index.php">';
?>