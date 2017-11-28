
<?php 

session_start();
require "sales_connect.php";
require('signup.php');

$id = $_GET['id'];

$sql = "SELECT * FROM `sell` WHERE `id`='$id'";

$result = mysqli_query($conn,$sql);

$sql = "SELECT * FROM `sell` WHERE `id`='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$sales_title = $row['sales_title'];
$descrip = $row['descrip'];
$contact_num = nl2br($row['contact_num']);
?>


<html>
<head>
<div class="container">

  <center><h1>Edit Sales</h1></center>
  
  <form name="edit_sale" class="form-horizontal" action="editing_sales.php" method="post" enctype="multipart/form-data" onSubmit="return confirm('are you sure you want to submit ? ')">
   

	<div class="col-sm-9" >
		<div class="form-group" style="margin-left: 350px">
		 <label for="sales_title">Title:</label>
		 <input type="sales_title" class="form-control" id="sales_title" style="width:600px;margin:0px auto;" value="<?php echo $sales_title ?>" name="sales_title">
		<br />
		</div>
	
		<br />
	
		<div class="form-group" style="margin-left: 350px">
		  <label>Description:</label>
		  <textarea name="descrip" rows="30" style="width:600px;margin:0px auto;"><?php echo $descrip?></textarea>
		  <br/>  
		  </div>  
		
		<div class="form-group" style="margin-left: 350px">
		 <label for="contact_num">Contact Number:</label>
		 <input type="contact_num" class="form-control" id="contact_num" value="<?php echo $contact_num ?>" name="contact_num">
		 <br/> 
		 <input type="hidden" name="id" value="<?php echo $id ?>">
		 <button id="update_btn" type="submit" class="btn btn-success" name="update_btn">Update</button>
		 <br />
		</div>
	
   
  </div>
   
</form>
</div>

</body>
</html>






























