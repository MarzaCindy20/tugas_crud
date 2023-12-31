<?php
//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id

//include atau memasukkan file koneksi ke database
include('koneksi.php');

//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
$id = $_GET['id'];

//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
$sql = "SELECT * FROM sys_users WHERE id_user='$id'";
$result = mysqli_query($koneksi, $sql);

//cek apakah data dari hasil query ada atau tidak
if(mysqli_num_rows($result) == 0){

    //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
    echo '<script>window.history.back()</script>';

}else{

    //jika data ditemukan, maka membuat variabel $data
    $data = mysqli_fetch_assoc($result);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah

}
?>

    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="overflow: hidden">
    <div class="container">
        <div>
            <h3>Edit Data Siswa</h3>
        </div>
        <div class="row">
            <form action="update-proses.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <!-- membuat inputan hidden dan nilainya adalah siswa_id -->
                <div class="col-md-12 py-2" style="display: flex;">
                    <div class="col-md-6 me-1">
                        <label class="form-label">Nama Lengkap</label>
                        <input class="form-control form-control-sm" type="text" name="nama" size="30" value="<?php echo $data['name']; ?>" disabled>
                    </div>
                    <div class="col-md-6 ms-1">
                        <label class="form-label">Kelas</label>
                        <select class="form-select form-select-sm" name="kelas" disabled>
                            <option value="">Pilih Kelas</option>
                            <option value="X" <?php if($data['class'] == 'X'){ echo 'selected'; } ?>>X</option>
                            <option value="XI" <?php if($data['class'] == 'XI'){ echo 'selected'; } ?>>XI</option>
                            <option value="XII" <?php if($data['class'] == 'XII'){ echo 'selected'; } ?>>XII</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 py-2" style="display: flex;">
                    <div class="col-md-6 me-1">
                        <label class="form-label">Jurusan</label>
                        <select class="form-select form-select-sm" name="jurusan" disabled>
                            <option value="">Pilih Jurusan</option>
                            <option value="RPL" <?php if($data['major'] == 'RPL'){ echo 'selected'; } ?>>RPL</option>
                            <option value="Multimedia" <?php if($data['major'] == 'Multimedia'){ echo 'selected'; } ?>>Multimedia</option>
                            <option value="Akuntansi" <?php if($data['major'] == 'Akuntansi'){ echo 'selected'; } ?>>Akuntansi</option>
                            <option value="Perbankan" <?php if($data['major'] == 'Perbankan'){ echo 'selected'; } ?>>Perbankan</option>
                            <option value="Pemasaran" <?php if($data['major'] == 'Pemasaran'){ echo 'selected'; } ?>>Pemasaran</option>
                            <option value="Perhotelan" <?php if($data['major'] == 'Perhotelan'){ echo 'selected'; } ?>>Perhotelan</option>
                            <option value="Desain Komunikasi Visual" <?php if($data['major'] == 'Desain Komunikasi Visual'){ echo 'selected'; } ?>>Desain Komunikasi Visual</option>
                        </select>
                    </div>
                    <div class="col-md-6 ms-1">
                        <label class="form-label">Role</label>
                        <select class="form-select form-select-sm" name="role" disabled>
                            <option value="">Pilih Role</option>
                            <option value="1" <?php if($data['role_id'] == '1'){ echo 'selected'; } ?>>Admin</option>
                            <option value="2" <?php if($data['role_id'] == '2'){ echo 'selected'; } ?>>Teacher</option>
                            <option value="3" <?php if($data['role_id'] == '3'){ echo 'selected'; } ?>>Student</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="col-md-12">
                        <label class="form-label">Gambar</label>
                        <br>
                        <img src="image\<?= $data['image'] ?>" width="300" class="my-3">

                    </div>
                </div>
            </form>
        </div>
    </div>
    </body>