<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('includes/header.php');
  include('includes/connection.php');
  $hindi1 = "";
  $hindi2 = "";
  $hindi3 = "";
  $english1 = "";
  $english2 = "";
  $english3 = "";
  $maths1 = "";
  $maths2 = "";
  $maths3 = "";
  $science1 = "";
  $science2 = "";
  $science3 = "";
  $social_sec1 = "";
  $social_sec2 = "";
  $social_sec3 = "";
  if(isset($_POST['search_by_roll_no'])){
    $query = "select * from result where roll_no = '$_POST[roll_no]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      $roll_no = $row['roll_no'];
      $hindi1 = $row['hindi1'];
      $hindi2 = $row['hindi2'];
      $hindi3 = $row['hindi3'];
      $english1 = $row['english1'];
      $english2 = $row['english2'];
      $english3 = $row['english3'];
      $maths1 = $row['maths1'];
      $maths2 = $row['maths2'];
      $maths3 = $row['maths3'];
      $science1 = $row['science1'];
      $science2 = $row['science2'];
      $science3 = $row['science3'];
      $social_sec1 = $row['social_sec1'];
      $social_sec2 = $row['social_sec2'];
      $social_sec3 = $row['social_sec3'];
    }
  }
  if(isset($_POST['update'])){
    $query = "update result set hindi1=$_POST[hindi1],hindi2=$_POST[hindi2],hindi3=$_POST[hindi3],english1=$_POST[english1],english2=$_POST[english2],english3=$_POST[english3],maths1=$_POST[maths1],maths2=$_POST[maths2],maths3=$_POST[maths3],science1=$_POST[science1],science2=$_POST[science2],science3=$_POST[science3],social_sec1=$_POST[social_sec1],social_sec2=$_POST[social_sec2],social_sec3=$_POST[social_sec3] where roll_no = $_POST[roll_no]";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Result updated successfully...');
        window.location.href = 'dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Cannot update...Plz try again.');
        window.location.href = 'editResult.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Result</title>
  </head>
  <body>
    <br>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <form action="" method="post">
          <div class="form-group">
            Roll No: <input type="text" name="roll_no" placeholder="Enter Roll No...">
            <input type="submit" name="search_by_roll_no" value="Search">
          </div>
        </form>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-2"></div>
    </div>
    <hr>
    <center><h4><u>Edit Result</u></h4><br>
    <form action="" method="post">
      <table>
        <tr>
          <th>Subject</th>
          <th>Test1</th>
          <th>Test2</th>
          <th>Test3</th>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label><b>Hindi</b></label>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="hindi1" value="<?php echo $hindi1; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="hindi2" value="<?php echo $hindi2; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="hindi3" value="<?php echo $hindi3; ?>" size="3" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label><b>English</b></label>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="english1" value="<?php echo $english1; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="english2" value="<?php echo $english2; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="english3" value="<?php echo $english3; ?>" size="3" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label><b>Maths</b></label>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="maths1" value="<?php echo $maths1; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="maths2" value="<?php echo $maths2; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="maths3" value="<?php echo $maths3; ?>" size="3" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label><b>Science</b></label>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="science1" value="<?php echo $science1; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="science2" value="<?php echo $science2; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="science3" value="<?php echo $science3; ?>" size="3" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label><b>Social Sec.</b></label>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="social_sec1" value="<?php echo $social_sec1; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="social_sec2" value="<?php echo $social_sec2; ?>" size="3" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <input type="text" name="social_sec3" value="<?php echo $social_sec3; ?>" size="3" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label><b>Roll No.</b></label>
            </div>
          </td>
          <td colspan="4">
            <div class="form-group">
              <input type="text" name="roll_no" value="<?php echo $roll_no; ?>" required>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <div class="form-group">
              <input type="submit" name="update" value="Update Result">
            </div>
          </td>
        </tr>
      </table>
    </form>
    </center>
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
