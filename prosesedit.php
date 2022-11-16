<?php
include("koneksi.php");

if(!isset($_POST['tambah'])) {
    $kode=$_POST['id'];
    $No_Seri=$_POST['No_Seri'];
    $Merek=$_POST['Merek'];
    $Jumlah=$_POST['Jumlah'];

    $sql="UPDATE tb_pendataan SET No_Seri='$No_Seri', Merek='$Merek', Jumlah='$Jumlah' WHERE id=$kode";
    $query=mysqli_query($koneksi,$sql);
    
    if($query){
        header('location:tampil.php');
    } else{
        die("gagal mengedit");
    }
}
?>