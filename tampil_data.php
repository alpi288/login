<?php
include('koneksi.php');
session_start();
if($_SESSION["login"] != true){
  header("location:index.php");
}

$data = "SELECT * FROM tb_regristration";

$q_data = mysqli_query($koneksi, $data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Navigasi -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">HELLOWS</span>
    </div>
  </nav>

  <!-- Konten -->
<div class="card mt-3 mb-3 ms-3 me-3">
    <div class="card-body">
    <h5 class="card-title">DATA HELLOWS</h5>
    <a href="sign_up">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach ($q_data as $dataRegister) {
                ?>
                <tr>
                <th scope="row"><?php echo $no;?></th>
                <td><?php echo $dataRegister['username'];?></td>
                <td><?php echo $dataRegister['email'];?></td>
                <td>
                  <?php
                    if ($dataRegister['image'] == "") {
                  ?>
                      <img src="img/" style="width: 100px; height: 100px;">
                  <?php
                    }else{
                  ?>
                        <img src="<?php echo $dataRegister['image']; ?>" style="width: 100px; height: 100px;">
                  <?php } ?>
                </td>
                <td>
                    <a href="detail.php?id=<?php echo $dataRegister['id'];?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="edit.php?id=<?php echo $dataRegister['id'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $dataRegister['id'];?>" class="btn btn-sm btn-danger"
                    onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                </td>
                </tr>
                <?php
                    $no++; }
                ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-primary btn-sm mt-3">LOGOUT</a>
    </div>
</div>

<!-- Footer -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Copyright &copy; ALFI </a>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>