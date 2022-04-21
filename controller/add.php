<?php
 
	// Check If form submitted, insert form data into users table.
	include_once("../config/config.php");
		$username = $_POST['username'];
		$pswd = $_POST['pswd'];
		$namalengkap = $_POST['namalengkap'];
		$nohp = $_POST['nohp'];
		
		// include database connection file
		
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO pendaftar VALUES('', '$username','$pswd','$namalengkap', '$nohp')");
		
		// Show message when user added
		echo "User added successfully. <a href='../form.php'>View Users</a>";
	
	?>