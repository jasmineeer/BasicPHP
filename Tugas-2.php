<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card-header bg-info">
            <h4 class="text-white">
                Form Input Data 
            </h4>
        </div>

        <div class="card-body">
            <form action="process-form.php" method="post" enctype="multipart/form-data">
                Nama
                <input type="text" name="nama"
                class="form-control mb-2" required>

                Jenis Kelamin
                <select name="jk" class="form-control mb-2"required>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                Agama
                <input type="text" name="agama"
                class="form-control mb-2" required>

                Alamat
                <input type="text" name="alamat"
                class="form-control mb-2" required>

                Tempat Lahir
                <input type="text" name="tl"
                class="form-control mb-2" required>

                Tanggal Lahir
                <input type="date" name="tgl" 
                class="form-control mb-2" required>

                Hobi
                <input type="text" name="hobi"
                class="form-control mb-2" required>

                Cita - Cita
                <input type="text" name="cita"
                class="form-control mb-2" required>

                Usia
                <input type="number" name="usia"
                class="form-control mb-2" required>

                Asal Sekolah
                <input type="text" name="sekolah"
                class="form-control mb-2" required>

                <button type="submit" class="btn btn-success btn-block"
                name="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
</body>
</html>