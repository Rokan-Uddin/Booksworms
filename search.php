<?php 

	include "config.php";
	$s=$_GET['usearch'];

	$sql="SELECT * FROM books WHERE Booksname like '$s%' ";

	$result =mysqli_query($con, $sql);
	if(mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row["Booksname"]; 
			echo "<br>";
			# code...
		}
	}
?>