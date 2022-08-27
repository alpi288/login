<?php
include('koneksi.php');

$id=$_GET['id'];

$sql_edit="SELECT * FROM tb_regristration WHERE id='$id'";

$q_edit=mysqli_query($koneksi, $sql_edit);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  </head>
  <body>
  <!-- Navigasi -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">HELLOWS</span>
    </div>
  </nav>

<!-- Konten -->
<div class="card mt-3 ms-3 me-3">
    <div class="card-body">
    <h5 class="card-title">EDIT</h5>
    <?php
    foreach ($q_edit as $dataEdit) {
    ?>
        <form action="proses_edit.php" method="post" class="form" enctype="multipart/form-data">
            <input type="text" name="id" value="<?php echo $dataEdit['id'];?>" hidden>

            <label for="user-name" style="padding-top: 5px">&nbsp;Username</label>
            <input type="text" class="form-content" id="user-name" name="username" value="<?php echo $dataEdit['username'];?>" required/>
            <div class="form-border"></div>

            <label for="user-email" style="padding-top: 5px">&nbsp;Email Address</label>
            <input type="email" class="form-content" id="user-email" name="email" value="<?php echo $dataEdit['email'];?>" required/>
            <div class="form-border"></div>

            <label for="user-password" style="padding-top: 5px">&nbsp;Password</label>
            <input type="password" class="form-content" id="user-password" name="password" value="<?php echo $dataEdit['password'];?>" required/>
            <div class="form-border"></div>

            <label for="user-image" style="padding-top: 5px">&nbsp;Image</label>
                    <input type="file" class="form-control" id="user-image" name="image" value="<?php echo $dataEdit['image'];?>" required/>

            <input id="submit-btn" type="submit" name="submit" value="SAVE">
            <a href="tampil_data.php" class="btn btn-primary btn-sm mt-3">BACK</a>
        </form>    
    <?php } ?>    
    </div>
</div>

  <!-- Footer -->
<nav class="navbar fixed-bottom navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Copyright &copy; ALFI </a>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>


