<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!doctype html>
    <html lang="en">

    <head>
    </head>

    <body>
        <?php
        include("koneksi.php");
        $cari = mysqli_query($konek, "select * from mobil") or die(mysqli_error());
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>No Polisi</th>
                    <th>Merk</th>
                    <th>Tahun</th>
                    <th>Harga/Hari</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($cari)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $no; ?>
                        </th>
                        <td>
                            <?php echo $data['no_polisi']; ?>
                        </td>
                        <td>
                            <?php echo $data['merk']; ?>
                        </td>
                        <td>
                            <?php echo $data['tahun']; ?>
                        </td>
                        <td>
                            <?php echo $data['harga']; ?>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a href="crmobil.php" target="blank" class="btn btn-primary">Cetak</a>
    </body>

    </html>
</body>

</html>