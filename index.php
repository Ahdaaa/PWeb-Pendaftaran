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
    <div class="d-flex align-items-center justify-content-center h-100">
        <div class="main-cont d-flex flex-column rounded-3 justify-content-start" style="gap: 35px;">
            <div class="text-center">
                <h1 class="text-dark">Pendaftaran Siswa Baru</h1>
                <h3 class="text-dark">SMK Coding</h3>
            </div>
        
            <h5 class="text-dark">Menu</h5>

            <a href="form-daftar.php">
                <button class="btn py-auto">
                    <h6>Daftar Siswa Baru</h6>
                </button>
            </a>
            
            <a href="list-siswa.php">
                <button class="btn py-auto">
                    <h6>List Siswa</h6>
                </button>
            </a>

            <?php if (isset($_GET['status'])): ?>
    
                <p>
                    <?php
                        if($_GET['status'] == 'sukses'){
                            echo "Pendaftaran siswa baru berhasil";
                        } else {
                            echo "Pendaftaran gagal";
                        }
                    ?>
                </p>

            <?php endif; ?>

        </div>
    </div>
    
    

</body>
</html>