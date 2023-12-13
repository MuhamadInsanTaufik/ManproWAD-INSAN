<?php 

$conn = mysqli_connect('localhost', 'root', '', 'manprosidb'); 
// Nanti diganti sesuai nama dbnya

if (!$conn) {
    die('koneksi gagal: '. mysqli_connect_error());
}
 
?>