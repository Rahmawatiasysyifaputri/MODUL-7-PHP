<?php

include '../connect.php';

$id_dosen = $_GET['id_dosen'];

$query = "SELECT * FROM dosen WHERE id_dosen = $id_dosen";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<form action="update.php?id_dosen=<?php echo $_GET['id_dosen'];?>" method="post">
    <table>
    <tr>
       <td><label for="nama">Nama Dosen</label></td>
       <td>:</td>
       <td><input value="<?php echo $row['nama_dosen']; ?>" type="text" name="nama_dosen" id="nama"></td>
    </tr>
    <tr>
       <td><label for="no_telp">No. Telepon</label></td>
       <td>:</td>
       <td><input value="<?php echo $row['telp']; ?>" type="text" name="telp" id="no_telp"></td>
    </tr>
    <tr>
       <td></td>
       <td><input value="<?php echo $row['id_dosen']; ?>" type="hidden" name="id_dosen"></td>
       <td><input type="submit" value="Simpan" name="btnSimpan"></td>
    </tr>
    </table>
</form>

