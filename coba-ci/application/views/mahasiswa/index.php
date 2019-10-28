<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>data mahasiswa</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Daftar Mahasiswa</h3>
                  
                  <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
                  <table class="table">
  
    <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">E-mail</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>

  <tbody>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>    
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $mhs ['nama']; ?></td>
      <td><?= $mhs ['nrp']; ?></td>
      <td><?= $mhs ['email']; ?></td>
      <td><?= $mhs ['jurusan']; ?></td>
      <td>
        <a href="" class="badge badge-success">ubah</a>
         <a href="" class="badge badge-success">Hapus</a>
      </td>

    </tr>
          <?php endforeach ; ?>
  </tbody>
</table>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html