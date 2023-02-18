<?php
session_start();
if(isset($_SESSION['email'])){
if(isset($_POST['update_fee'])){
  include('includes/connection.php');
  $query = "update students set fee_status = 'Paid' where roll_no = $_POST[roll_no]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Fee Status updated successfully...');
      window.location.href = 'dashboard.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Cannot update...Plz try again.');
      window.location.href = 'payFee.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pay Fee</title>
    <?php include('includes/header.php'); ?>
  </head>
  <body>
    <br>
    <div class="row">
      <div class="col-md-4 m-auto block">
        <form action="" method="post">
          <div class="form-group">
            Roll No: <input type="text" name="roll_no" placeholder="Enter Roll No...">
            <input type="submit" name="update_fee" value="Click if fee paid">
          </div>
        </form>
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
