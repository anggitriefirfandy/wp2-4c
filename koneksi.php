<?php
$conn_str = "host=hansken.db.elephantsql.com " .
"port=5432 " .
"user=mlvgkndg " .
"dbname=mlvgkndg ". 
"password=ubsNFYJ9XUfpC76O0N9kkYVkGO7Wt7FG ";
$conn = pg_connect($conn_str);

if($conn){
    echo "<h3>Koneksi berhasil</h3>";
}else{
    echo"<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>