<?php
  session_start();
  if(isset($_SESSION['email']))
  {
    if(isset($_POST['addResult'])){
      include('includes/connection.php');
      $query = "insert into result values(null,$_POST[roll_no],$_POST[hindi1],$_POST[hindi2],$_POST[hindi3],$_POST[english1],$_POST[english2],$_POST[english3],$_POST[maths1],$_POST[maths2],$_POST[maths3],$_POST[science1],$_POST[science2],$_POST[science3],$_POST[social_sec1],$_POST[social_sec2],$_POST[social_sec3])";
      $query_run = mysqli_query($connection,$query);
      if($query_run){
        echo "<script type='text/javascript'>
          alert('Result added successfully...');
          window.location.href = 'dashboard.php';
        </script>";
      }
      else{
        echo "<script type='text/javascript'>
          alert('Cannot add Result...Plz try again.');
          window.location.href = 'addResult.php';
        </script>";
      }
    }
  ?>
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Result</title>
    <?php include('includes/header.php');?>
  </head>
  <body>
    <div class="row">
      <div class="col-md-6 m-auto block" style="text-align:center;"><br>
        <h3>Enter Marks of the Student</h3><br>
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
                  <input type="text" name="hindi1" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="hindi2" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="hindi3" size="3" required>
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
                  <input type="text" name="english1" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="english2" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="english3" size="3" required>
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
                  <input type="text" name="maths1" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="maths2" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="maths3" size="3" required>
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
                  <input type="text" name="science1" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="science2" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="science3" size="3" required>
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
                  <input type="text" name="social_sec1" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="social_sec2" size="3" required>
                </div>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" name="social_sec3" size="3" required>
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
                  <input type="text" name="roll_no" placeholder="Enter Roll No." required>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="4">
                <div class="form-group">
                  <input type="submit" name="addResult" value="Add Result">
                </div>
              </td>
            </tr>
          </table>
        </form>
      </div>
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
