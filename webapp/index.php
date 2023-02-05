<?php

$db_connection = pg_connect("host=postgress_host dbname=webapp_db user_nano");

if($db_connection){

    echo "Koneksi ke service database postgre berhasil";
} 
else {
	echo "Koneksi ke service postgre gagal ";
}

?> 