<h1>Daftar Mahasiswa</h2>
<table border = "1">
    <tr>
        <th>id</th>
        <th>npm</th>
        <th>nama</th>
    </tr>
<?php
    include 'koneksi.php';    
    $data = mysqli_query ($koneksi,"SELECT * FROM tbl_mhs");
    while($d=mysqli_fetch_array($data)){ ?>
        <tr>
            <td><?php echo $d['id']; ?></td>
            <td><?php echo $d['npm']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><a href="Latihan3.php?id=<?php echo $d['id']?>">Update</a>
            <a href="Latihan4.php?id=<?php echo $d['id']?>">Delete</a>
            </td>
        </tr>
     
    <?php
    }
?>
<button><a href="Latihan2.php?id=<?php ?>">TAMBAH DATA</a></button>
</table> 