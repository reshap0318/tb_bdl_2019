<?php
include ('../inc/connect.php');


$id	= $_POST['id'];
$nama_ustad = $_POST['nama_ustad'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql  = "update ustad set name='$nama_ustad', cp='$no_hp', address='$alamat' where id=$id";
$update = mysqli_query($conn,$sql);

if ($update){
	echo "<script>
		alert (' Data Successfully Change');
		eval(\"parent.location='../?page=listustad'\");
		</script>";
}else{
	echo 'error';
}
?>