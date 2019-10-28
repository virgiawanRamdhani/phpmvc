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
       <div class="col-7">
         <h3>Form tambah data mahasiswa</h3>
         <form method= "post" action="<?= base_url('mahasiswa/tambah'); ?>">

            <div class="form-group">
              <label for="nama">Nama</label>
               <input type="text" class="form-control" id="nama"
               name="nama" >
               <?= form_error('nama'); ?>
            </div>

            <div class="form-group">
              <label for="nrp">NRP</label>
               <input type="text" class="form-control" id="nrp"
               name="nrp" >
            </div>

            <div class="form-group">
              <label for="email">Email</label>
               <input type="text" class="form-control" id="email"
               name="email" >
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
               <input type="text" class="form-control" id="jurusan"
               nama="jurusan" >
            </div>

            <button type="submit" class="btn btn-primary">Tambah data</button>




         </form>
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