 <?php
function buatkode($table,$inisial){

	$struktur=mysql_query("select * from $table");
	$field=mysql_field_name($struktur,0);
	$panjang=mysql_field_len($struktur,0);
	
	
	$sql=mysql_query("select max(".$field.") from ".$table);
	$row=mysql_fetch_array($sql);
	
		if ($row[0]==""){
			$angka="0";
		}else{
		
			$angka=substr($row[0],strlen($inisial));
		}
	
$angka++;
$angka=strval($angka);
$tmp="";
for ($i=1; $i<=($panjang-strlen($angka)-strlen($inisial));$i++){
	$tmp=$tmp."0";
	}
return $inisial.$tmp.$angka ;
}

?>