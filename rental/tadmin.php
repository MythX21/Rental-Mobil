<!doctype html>
<html lang="en">

<head>

</head>

<body>
    <div class="card">
        <h5 class="card-header">Tambah admin</h5>
        <div class="card-body">
            <form method="post" action="?x=sadmin">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNama">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="kelamin" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="txtUsername">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="txtPassword">
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Ketua">Ketua</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" text="">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>