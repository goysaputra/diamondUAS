<?php
include "koneksi.php";
include "fungsi.php";
?>
<table border="1" width="800px" align="center">
    <thead>
        <tr>
            <th colspan="6"><h3>Data pembeli</h3></th>
        </tr>
        <tr>
             <th>No telepon</th>
             <th>Nama</th>
             <th>email</th>
             <th>id</th>
             <th>password</th>
        </tr>
    </thead> 
    <tbody>
    <?php
    $data = mysqli_query($conect, "select * from tbl_pembeli");
    while($row = mysqli_fetch_array($data)){
    ?>
         <tr>
            <td><?= $row['idPembeli'];?></td>
            <td><?= strtoupper($row['namaPembeli']);?></td>
            <td><?= $row['noHp'];?></td>
            <td><?= $row['emailPembeli'];?></td>
            <td><?= $row['password'];?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>  
</body>
</html>
