<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <div class="container">
        <div class="">
            <h3>Tambah Data Siswa</h3>
        </div>
        <div class="row">
            <form action="create-proses.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" size="30" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas" required>
                            <option value="">Pilih Kelas</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label class="form-label">Jurusan</label>
                        <select class="form-control" name="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="RPL">RPL</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Perbankan">Perbankan</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="Perhotelan">Perhotelan</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Role</label>
                        <select class="form-control" name="role" required>
                            <option value="">Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Teacher</option>
                            <option value="3">Student</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <label class="form-label">Gambar</label>
                        <input type="file" name="gambar" id="gambar" accept="image/*"></td>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" name="tambah" value="Tambah"></td>
                </div>
            </form>
        </div>
    </div>
</body>


</html>