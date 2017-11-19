<?php
/**
 * Created by PhpStorm.
 * User: Maruf
 * Date: 23/12/2015
 * Time: 20:09
 */
function paging_kategori($tabel, $dataPerPage, $noPage, $link, $kategori)
{

    $query = "SELECT COUNT(*) AS jumData FROM $tabel where kategori='$kategori'";
    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $jumData = $data['jumData'];
    if($dataPerPage==1){
        $dataPerPage=$jumData;
    }

    $jumPage = ceil($jumData / $dataPerPage);

    // menampilkan link previous

    if ($noPage > 1)
        echo "<li><a href='" . $link . "hal=" . ($noPage - 1) . "'>&lt;&lt; Prev</a></li>";

    // memunculkan nomor halaman dan linknya

    for ($page = 1; $page <= $jumPage; $page++)
    {
        if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
        {
            $showPage = $page;
            if (($showPage == 1) && ($page != 2))
                echo "";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                echo "";
            if ($page == $noPage)
                echo "<li> <a href=''>" . $page . "</a> </li>";
            else
                echo "<li> <a href='" . $link . "hal=" . $page . "'>" . $page . "</a> </li>";

        }
    }

    // menampilkan link next

    if ($noPage < $jumPage)
        echo "<li><a href='" . $link . "hal=" . ($noPage + 1) . "'>Next &gt;&gt;</a></li>";

}
function pagingall($tabel, $dataPerPage, $noPage, $link)
{

    $query = "SELECT COUNT(*) AS jumData FROM $tabel";
    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $jumData = $data['jumData'];
    if($dataPerPage==1){
        $dataPerPage=$jumData;
    }

    $jumPage = ceil($jumData / $dataPerPage);

    // menampilkan link previous

    if ($noPage > 1)
        echo "<li><a href='" . $link . "hal=" . ($noPage - 1) . "'>&lt;&lt; Prev</a></li>";

    // memunculkan nomor halaman dan linknya

    for ($page = 1; $page <= $jumPage; $page++)
    {
        if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
        {
            $showPage = $page;
            if (($showPage == 1) && ($page != 2))
                echo "";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                echo "";
            if ($page == $noPage)
                echo "<li> <a href=''>" . $page . "</a> </li>";
            else
                echo "<li> <a href='" . $link . "hal=" . $page . "'>" . $page . "</a> </li>";

        }
    }

    // menampilkan link next

    if ($noPage < $jumPage)
        echo "<li><a href='" . $link . "hal=" . ($noPage + 1) . "'>Next &gt;&gt;</a></li>";

}

function paging_cari($tabel, $dataPerPage, $noPage, $link, $cari)
{

    $query = "SELECT COUNT(*) AS jumData FROM $tabel where kategori REGEXP '$cari' or nama REGEXP '$cari' or ket REGEXP '$cari' ";
    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $jumData = $data['jumData'];
    if($dataPerPage==1){
        $dataPerPage=$jumData;
    }

    $jumPage = ceil($jumData / $dataPerPage);

    // menampilkan link previous

    if ($noPage > 1)
        echo "<li><a href='" . $link . "hal=" . ($noPage - 1) . "'>&lt;&lt; Prev</a></li>";

    // memunculkan nomor halaman dan linknya

    for ($page = 1; $page <= $jumPage; $page++)
    {
        if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
        {
            $showPage = $page;
            if (($showPage == 1) && ($page != 2))
                echo "";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                echo "";
            if ($page == $noPage)
                echo "<li> <a href=''>" . $page . "</a> </li>";
            else
                echo "<li> <a href='" . $link . "hal=" . $page . "'>" . $page . "</a> </li>";

        }
    }

    // menampilkan link next

    if ($noPage < $jumPage)
        echo "<li><a href='" . $link . "hal=" . ($noPage + 1) . "'>Next &gt;&gt;</a></li>";

}


function paging_berita($tabel, $dataPerPage, $noPage, $link)
{

    $query = "SELECT COUNT(*) AS jumData FROM $tabel";
    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $jumData = $data['jumData'];
    if($dataPerPage==1){
        $dataPerPage=$jumData;
    }

    $jumPage = ceil($jumData / $dataPerPage);

    // menampilkan link previous

    if ($noPage > 1)
        echo "<li><a href='" . $link . "hal=" . ($noPage - 1) . "'>&lt;&lt; Prev</a></li>";

    // memunculkan nomor halaman dan linknya

    for ($page = 1; $page <= $jumPage; $page++)
    {
        if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
        {
            $showPage = $page;
            if (($showPage == 1) && ($page != 2))
                echo "";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                echo "";
            if ($page == $noPage)
                echo "<li> <a href=''>" . $page . "</a> </li>";
            else
                echo "<li> <a href='" . $link . "hal=" . $page . "'>" . $page . "</a> </li>";

        }
    }

    // menampilkan link next

    if ($noPage < $jumPage)
        echo "<li><a href='" . $link . "hal=" . ($noPage + 1) . "'>Next &gt;&gt;</a></li>";

}
function paging_admin($tabel, $dataPerPage, $noPage, $link)
{

    $query = "SELECT COUNT(*) AS jumData FROM $tabel";
    $hasil = mysql_query($query);
    $data = mysql_fetch_array($hasil);
    $jumData = $data['jumData'];
    if($dataPerPage==1){
        $dataPerPage=$jumData;
    }

    $jumPage = ceil($jumData / $dataPerPage);

    // menampilkan link previous

    if ($noPage > 1)
        echo "<li><a href='" . $link . "hal=" . ($noPage - 1) . "'>&lt;&lt; Prev</a></li>";

    // memunculkan nomor halaman dan linknya

    for ($page = 1; $page <= $jumPage; $page++)
    {
        if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
        {
            $showPage = $page;
            if (($showPage == 1) && ($page != 2))
                echo "";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
                echo "";
            if ($page == $noPage)
                echo "<li> <a href=''>" . $page . "</a> </li>";
            else
                echo "<li> <a href='" . $link . "hal=" . $page . "'>" . $page . "</a> </li>";

        }
    }

    // menampilkan link next

    if ($noPage < $jumPage)
        echo "<li><a href='" . $link . "hal=" . ($noPage + 1) . "'>Next &gt;&gt;</a></li>";

}

?>