<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    include("koneksi.php");
    $cari = mysqli_query($konek, "select * from mobil,sewa where mobil.id_mobil=sewa.id_mobil")
        or die(mysqli_error());
    ?>
    <h3>Laporan Data Order</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NO.</th>
                <th>No Polisi</th>
                <th>Merk</th>
                <th>Nama Peminjam</th>
                <th>Tujuan Pinjam</th>
                <th>Tgl Order</th>
                <th>Tgl Kembali</th>
                <th>Lama Sewa</th>
                <th>Total</th>
                <th>Aksi</th>
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
                        <?php echo $data['nama_sewa']; ?>
                    </td>
                    <td>
                        <?php echo $data['tujuan']; ?>
                    </td>
                    <td>
                        <?php echo $data['tgl_sewa']; ?>
                    </td>
                    <td>
                        <?php echo $data['tgl_kembali']; ?>
                    </td>
                    <td>
                        <?php echo $data['lama']; ?>
                    </td>
                    <td>
                        <?php echo $data['harga_total']; ?>
                    </td>
                    <td>
                        <a href="?x=horder&id=<?php echo $data['id_sewa']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <a href="?x=torder" class="btn btn-primary">Tambah</a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>

</html>