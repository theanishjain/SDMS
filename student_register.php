<?php
  session_start();
  if(isset($_SESSION['email'])){
  if(isset($_POST['register'])){
    include('includes/connection.php');
    $query = "insert into students values(null,$_POST[roll_no],'$_POST[fname]','$_POST[lname]','$_POST[mother_name]','$_POST[father_name]','$_POST[dob]','$_POST[gender]','$_POST[category]',$_POST[mobile],$_POST[class],'$_POST[address]','$_POST[status]')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Students Registered successfully...');
        window.location.href = 'dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Registeration failed...Plz try again.');
        window.location.href = 'student_register.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registeration</title>
    <script type="text/javascript">
      function resetData(){
        document.getElementById('fname').value = "";
        document.getElementById('lname').value = "";
        document.getElementById('father_name').value = "";
        document.getElementById('mother_name').value = "";
        document.getElementById('dob').value = "";
        document.getElementById('gender').value = "";
        document.getElementById('category').value = "";
        document.getElementById('mobile').value = "";
        document.getElementById('class').value = "";
        document.getElementById('address').value = "";
        document.getElementById('status').value = "";
        document.getElementById('roll_no').value = "";
      }
    </script>
  </head>
  <body>
    <?php include('includes/header.php');?><br>
    <center><h4><u>Student Registeration Form</u></h4><br></center>
    <div class="container">
    	<p style="color:red;">Attention:- * Mark input filed are mandatory.</p>
    	<form action="" method="POST">
    		<table class="table" style="">
    			<tr>
    				<td>
    					<div class="form-group">
    					    <label for="name">First Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="fname" placeholder="Enter Name" id="fname" required="">
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    					    <label>Last Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" id="lname" required="">
      					</div>
    				</td>
    				<td>
    					<div class="form-group">
    					    <label>Mather Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="mother_name" placeholder="Enter Mother Name" id="mother_name" required="">
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    					    <label for="name">Father Name:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="father_name" placeholder="Enter Father" id="father_name" required="">
      					</div>
    				</td>
    				<td>
    					<div class="form-group">
    					    <label>Date of Birth:-(<span style="color:red;">*</span>)</label>
    					    <input type="date" class="form-control" name="dob" id="dob" required="">
      					</div>
    				</td>
    			</tr>
    			<tr>
            <td>
    					<div class="form-group">
    						<label>Gender:-(<span style="color:red;">*</span>)</label>
    						<select class="form-control" name="gender" id="gender" required="">
    	  						<option>-Select-</option>
    	  						<option>Male</option>
    	  						<option>Female</option>
    	  						<option>Transgender</option>
    						</select>
    					</div>
    				</td>
    				<td>
    					<div class="form-group">
    						<label>Category:-(<span style="color:red;">*</span>)</label>
    						<select class="form-control" name="category" id="category" required="">
    	  						<option>-Select-</option>
    	  						<option>GEN</option>
    	  						<option>OBC</option>
    	  						<option>SC</option>
    	  						<option>ST</option>
    						</select>
    					</div>
    				</td>
    				<td>
    					<div class="form-group">
    					    <label>Mobile:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="mobile" placeholder="Mobile No" id="mobile" required="">
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    					    <label>Class:-(<span style="color:red;">*</span>)</label>
                  <select class="form-control" name="class" id="class" required="">
      	  						<option>-Select-</option>
      	  						<option>6</option>
      	  						<option>7</option>
      	  						<option>8</option>
      	  						<option>9</option>
                      <option>10</option>
      	  						<option>11</option>
      	  						<option>12</option>
      						</select>
      					</div>
    				</td>
            <td>
    					<div class="form-group">
    					    <label>Status:-(<span style="color:red;">*</span>)</label>
                  <select class="form-control" name="status" id="status" required="">
      	  						<option>-Select-</option>
      	  						<option>Active</option>
      	  						<option>In-Active</option>
      						</select>
      					</div>
    				</td>
          </tr>
          <tr>
            <td colspan="3">
              <div class="form-group">
    					    <label>Address:-(<span style="color:red;">*</span>)</label>
    					    <textarea name="address" rows="4" cols="80" placeholder="Enter Address Here..." id="address"></textarea>
      					</div>
            </td>
            <td>
              <div class="form-group">
    					    <label>Roll No:-(<span style="color:red;">*</span>)</label>
    					    <input type="text" class="form-control" name="roll_no" placeholder="Assign Roll No." id="roll_no" required="">
      					</div>
            </td>
            <td><br><br>
              <button type="submit" class="btn btn-primary" name="register">Register</button>&nbsp;&nbsp;
              <button type="button" class="btn btn-danger" name="reset" onclick="resetData()" >Reset</button>
            </td>
          </tr>
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
