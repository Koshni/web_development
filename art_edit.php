
<?php 

session_start();
require "art_connect.php";
require('signup.php');


$art_id = $_GET['art_id'];

$sql = "SELECT * FROM `post` WHERE `art_id`='$art_id'";

$result = mysqli_query($conn,$sql);

$sql = "SELECT * FROM `post` WHERE `art_id`='$art_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$title = $row['title'];
$entry = nl2br($row['entry']);


?>


<html>
<head>
<div class="container">

  <center><h1>Edit Article</h1></center>
  
  <form name="edit_arti" class="form-horizontal" action="editing_art.php" method="post" enctype="multipart/form-data" onSubmit="return confirm('are you sure you want to submit ? ')">
   

	<div class="col-sm-9" >
		<div class="form-group" style="margin-left: 350px">
		 <label>Article Title:</label>
		<input type="title" class="form-control" id="title" style="width:600px;margin:0px auto;" value="<?php echo $title ?>" name="title">
		<br />
    </div>
	
	<br />
	
	<div class="form-group" style="margin-left: 350px">
      <label>Article:</label>
      <textarea name="entry" rows="50" style="width:600px;margin:0px auto;"><?php echo $entry?></textarea>
	  <br/>  
	  <input type="hidden" name="art_id" value="<?php echo $art_id ?>">
	  <button id="update_btn" type="submit" class="btn btn-success" name="update_btn">Update</button>
	 
    </div>  
	
   
  </div>
   
</form>
</div>

</body>
</html>






























