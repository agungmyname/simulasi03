<html>
<head>  
    <title>Edit Data User</title>
</head>
 
<body>
    <?php
// include database connection file
include_once("../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $username = $_POST['username'];
    $pswd = $_POST['pswd'];
    $namalengkap = $_POST['namalengkap'];
    $nohp = $_POST['nohp'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE pendaftar SET username='$username', pswd='$pswd', namalengkap='$namalengkap', nohp='$nohp' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: simulasi_03_muhammad_agung/form.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE id=$id");
 
foreach ($result as $pendaftar):
?>
    <a href="../index.php">Home</a>
    <br/><br/>
    
    <form name="form" method="post" action="../controller/edit_data_input.php">
        <table border="3">
            <tr> 
                <td><input type="hidden" name="username" value=<?=$pendaftar['id'];?>>User Name</td>
                <td><input type="text" name="username" value=<?=$pendaftar['username'];?>></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="pswd" name="pswd" value=<?=$pendaftar['pswd'];?>></td>
            </tr>
            <tr> 
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap" value=<?=$pendaftar['namalengkap'];?>></td>
            </tr>
            <tr> 
                <td>nohp</td>
                <td><input type="text" name="nohp" value=<?=$pendaftar['nohp'];?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
            <<?php endforeach; ?>
        </table>
    </form>
</body>
</html>