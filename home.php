<?php
                            //iclude file koneksi ke database
                            include('koneksi.php');

                            $sql = "SELECT * FROM sys_users WHERE role_id = 3 ORDER BY id_user DESC";

                            $result = mysqli_query($koneksi, $sql);
                            ?>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="">
            <h3>Welcome <?php
                include('koneksi.php');

                $sql = "SELECT * FROM sys_users";

                $result = mysqli_query($koneksi, $sql);

                $data = mysqli_fetch_assoc($result);

                echo $data['name'];
                ?></h3>
        </div>
        <div class="card rounded bg-light">
            <div class="card-body">
                <div class="row">
                    <h3>Data Siswa</h3>
                </div>
                <div class="row d-flex">
                    <div class="col-12">
                        <a style="background-color: pink;" class="btn btn-sm btn-pink float-end" href="create.php">Tambah Data</a>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped table-striped-columns" cellpadding="5" cellspacing="0" border="1">
                            <tr bgcolor="#cc338b">
                                <th>No.</th>
                                <th>Image</th>
                                <th>Nama Lengkap</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                            <?php
                            if (!$result) { //gagal request data
                                die('Error: '.mysqli_error($koneksi));
                            ?>
                            <?php } else {?>
                                <?php
                                    if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <?php
                                        $index = 1;

                                        while($data = mysqli_fetch_assoc($result)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
                                    ?>
                                        <tr>
                                        <td><?= $index ?></td>
                                        <td><img style="width: 80px" src="./image/<?= $data['image']?>" alt="<?= $data['image']?>"/></td>
                                        <td><a href="detail.php?id=<?= $data['id_user']; ?>"><?= $data['name']; ?></a></td>	
                                        <td><?= $data['class']; ?></td>	
                                        <td><?= $data['major']; ?></td>	
                                        <td><a class="btn btn-sm btn-pink" href="update.php?id=<?= $data['id_user']; ?>">Edit</a></td>	
                                        <td><a class="btn btn-sm btn-danger ms-4" href="delete.php?id=<?= $data['id_user']; ?>" onclick="return confirm(\'Yakin?\')">Hapus</a></td>	
                                        </tr>   
                                    <?php
                                    $index++;
                                    }
                                    ?>
                                <?php
                                } else { 
                                ?> 
                                    <tr><td colspan="6">Tidak ada data!</td></tr>
                                <?php } ?>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

