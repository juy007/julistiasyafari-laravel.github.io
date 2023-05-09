<?php 
    //include 'config.php';
    include 'config/class.php';

    $db = new setdata();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php echo $db->tampil_data('siswa','id_siswa','DESC'); ?>
        <table border="1">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Tahun Masuk</td>
            </tr>
            <?php 
                //function tampil_data($filter, $where, $isiwhere, $tabel, $sort, $by)
                $no = 1;
                //foreach ($db->tampil_data('id_siswa','2','siswa','id_siswa','DESC') as $x)
                foreach ($db->tampil_data('siswa','id_siswa','DESC') as $x) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['id_siswa']; ?></td>
                    <td><?php echo $x['nama']; ?></td>
                    <td><?php echo $x['jenis_kelamin']; ?></td>
                    <td><?php echo $x['tahun_masuk']; ?></td>
                </tr>
            <?php 
                }
            ?>
        </table>

        <?php 
            if (isset($_GET['id'])) {
                if (!empty($_GET['id'])) {
                    echo "ada";
        ?>
        <h2>Filter</h2>

        <table border="1">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Tahun Masuk</td>
            </tr>
            <?php 
                //function tampil_data($filter, $where, $isiwhere, $tabel, $sort, $by)
                $no = 1;
                foreach ($db->tampil_data_filter('id_siswa','1','siswa','id_siswa','DESC') as $x) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['id_siswa']; ?></td>
                    <td><?php echo $x['nama']; ?></td>
                    <td><?php echo $x['jenis_kelamin']; ?></td>
                    <td><?php echo $x['tahun_masuk']; ?></td>
                </tr>
            <?php 
                }
            ?>
        </table>

        <?php
                }
            }
        ?>
    </body>
</html>