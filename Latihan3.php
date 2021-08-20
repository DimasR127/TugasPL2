<h1>Update Mahasiswa</h2>
<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query ($koneksi,"SELECT * FROM tbl_mhs WHERE id='$id'");
    while($d=mysqli_fetch_array($data)){ ?>
        <form method = "post" action = "Latihan3-1.php">
        <table>
            <tr>
                <td>npm</td>
                <td>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="number" name="npm" value="<?php echo $d['npm']; ?>">
                </td>
            </tr>
            <tr>
                <td>nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
        <Input type='hidden' name='id' value='<?php echo $d['id']; ?>'></Input>
    </form>
    <?php
    }
    ?>

<br><button><a href="Latihan1.php?id=<?php ?>">KEMBALI</a></button>