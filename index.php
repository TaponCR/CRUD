<?php
//Included database & display page;
include('db.php');
include('display.php');
//fetch th record to be updated;
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($dbcon, "SELECT * FROM `table` WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$roll = $record['roll'];
	$email =$record['email'];
	$gender =$record['gender'];
	$phone =$record['phone'];
	$id = $record['id'];
	}
?>
<script type="text/javascript">

     function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
    oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
    };
</script>
<!DOCTYPE html>
<html>
<head>
<title>A Simple Crud</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<body style="background-color:  #6B8E23">
  <div class="page-header">
    <div id="rcorners">
    <?php 
	     if (isset($_SESSION['message'])){
		    echo $_SESSION['message']; 
		    }
    ?>
    </div>
  </div>
  <div class="grid-container">
      <div class="item1">
  	   <h4>DISPLAY DATA</h4><br>
  	   <table>
          <tr>
     		      <th>ID</th>
				      <th>NAME</th>
				      <th>ROLL</th>
				      <th>E-MAIL</th>
				      <th>GENDER</th>
				      <th>PHONE</th>
				      <th>PHOTO</th>
				      <th colspan="2">ACTION</th>
            </tr>
          <?php
			     $count = 0;
			     while ($data= mysqli_fetch_array($query)) {
				    $count++;
			    ?>
   	
			   <tr>
				    <td><?php echo $count;?></td>
				    <td><?php echo $data['name']?></td>
				    <td><?php echo $data['roll']?></td>
				    <td><?php echo $data['email']?></td>
				    <td><?php echo $data['gender']?></td>
				    <td><?php echo $data['phone']?></td>
				    <td><img src="./image/<?php echo $data['photos']?>" height="80px" width="80px"></td>
				    <td>
              <a href="index.php?edit=<?php echo $data['id']; ?>" class="btn btn-primary">Update</a>
            </td>
				    <td>
              <a href="display.php?del=<?php echo $data['id'];?>" class="btn btn-danger">Delete<a/>
              </td>
			   </tr>
			   <?php
		        }
		      ?>
     
        </table>
      </div>
      <div class="item2">
  	   <h4>REGISTRATION & UPDATE</h4><br>
        <form action="" method="POST" enctype="multipart/form-data">
   	        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="firstname" class="float-left">Name </label>
                      <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Name.." required="name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="lastname" class="float-left">Roll </label>
                      <input type="text" name="roll" class="form-control" value="<?php echo $roll; ?>" placeholder="Enter Roll.." required="roll">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="email" class="float-left">E-Mail</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter Email.." required="email">
            </div>

            <div class="form-group">
                <label for="gender" class="float-left">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option><?php echo $gender; ?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                  <label for="phone" class="float-left">Phone</label>
                  <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" placeholder="Enter Phone Number.." required="phone">
            </div>

            <div class="form-group">
                <label for="photo" class="float-left">Photos</label>
                <img id="uploadPreview" src="image/avatar.png" class="float-left" width="100px" height="100px"><br>
                <input type="file" class="form-control" id="imglink" name="photos" accept=".jpg,.jpeg,.png" width="100px"height="80px" onchange="PreviewImage();">
            </div>

            <?php if($edit_state == false):?>
        
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>

              <?php else:?>

        	  <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>

        	  <?php endif ?>

        </form>
    </div> 
</div>   
<div class="pagination">
    <?php
      if($id > 1){
     ?>
    <a href="?id=<?php echo ($id-1);?>">PREVIOUS</a><?php } ?>
      <?php
      for($i=1;$i <= $page;$i++)
      {
      ?>
    <a href="?id=<?php echo $i;?>"><?php echo $i;?></a>
      <?php
      }
      ?>
     <?php if($id != $page)
      {
      ?>
    <a href="?id=<?php echo ($id+1);?>">NEXT</a>
      <?php }?>
</div>
</body>
</html>