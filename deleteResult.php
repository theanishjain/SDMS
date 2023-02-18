<?php
session_start();
if(isset($_SESSION['email'])){
include('includes/connection.php');
if(isset($_POST['delete'])){
  $query = "delete from result where roll_no = '$_POST[roll_no]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Result Deleted successfully...');
      window.location.href = 'dashboard.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Cannot delete...Plz try again.');
      window.location.href = 'deleteResult.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include('includes/header.php'); ?>
    <title></title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4"><br>
        <h4>Delete Result of a student</h4><br><br>
        <form action="" method="post">
          <div class="form-group">
            Enter Roll No: <input type="text" name="roll_no" placeholder="Enter Roll No...">
            <input type="submit" name="delete" value="Delete">
          </div>
        </form>
      </div>
      <div class="col-md-4">

      </div>
      <div class="col-md-2"></div>
    </div>
  </body>
</html>
<?php
}
else{
  echo "<script type='text/javascript'>
    window.location.href = 'index.php';
  </script>";
}
?>
