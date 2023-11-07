<?php
    include("config.php");

    if( !isset($_GET['id']) ){
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan...");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="./src/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/style.css">
</head>
<body>
    <div class="d-flex align-items-center justify-content-center">
        <div class="main-cont d-flex flex-column rounded-3 justify-content-start" style="gap: 35px;">
            <div class="text-center">
                <h1 class="text-dark">Formulir Pendaftaran Siswa Baru</h1>
                <h3 class="text-dark">SMK Coding</h3>
            </div>

            <form action="proses-edit.php" method="POST">
            
                <fieldset class="d-flex flex-column gap-1">
                
                    <div>
                        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                    </div>

                    <div>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
                    </div>
                    
                    <div>
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat"><?php echo $siswa['alamat']?></textarea>
                    </div>

                    <div>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?> >Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?> >Perempuan</label>
                    </div>

                    <div>
                        <label for="agama">Agama: </label>
                        <?php $agama = $siswa['agama']; ?>
                        <select name="agama">
                            <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                        </select>
                    </div>

                    <div>
                        <label for="sekolah_asal">Sekolah Asal: </label>
			            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                    </div>

                    
                    <input class="btn b3 mt-5" type="submit" name="simpan" value="Simpan">
                    
                </fieldset>
        
            </form>
        </div>
    </div>
</body>

