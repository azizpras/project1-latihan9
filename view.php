<?php include('config.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <div class="container">
    <h3>Data Buku</h3>   
        <br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>JUDUL</th>
                <th>PENGARANG</th>
                <th>PENERBIT</th>
                <th>TAHUN</th>
            </tr>
        <tbody>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM book");

                while($book = mysqli_fetch_array($query)){
                    ?>

                    <tr>
                    <td><?php echo $book['id_buku']?></td>
                    <td><?php echo $book['judul']?></td>
                    <td><?php echo $book['pengarang']?></td>
                    <td><?php echo $book['penerbit']?></td>
                    <td><?php echo $book['tahun']?></td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>