<?php

class myclass{
 public  $status; 
function validate_User(){
	
	if(isset($_POST["close"])){
		
	header("Location:index.php,true");
exit();	
		
	}
	if(isset($_POST["submt"])){
$linkk=mysqli_connect('mysql8.000webhost.com','a3213381_b','123456','a3213381_a');

if(mysqli_connect_errno($linkk))
{
		echo 'Failed to connect';
}
else{

$stmt=mysqli_prepare($linkk,"select name,password from Admin where name=? && password=?");

$stmt->bind_param("ss",$Usernname,$userPass);

$Usernname=$_POST["UName"];
$userPass=$_POST["pass"];

$true="false";

$stmt->execute();
$stmt->bind_result($nnname,$Password);

while($stmt->fetch()){
	
	$true="true";
	
}

$stmt->close();

mysqli_close($linkk);

}
 return $true;
}
}
}

$obj=new myclass;
$istrue=$obj->validate_User();
if($istrue=="true"){
$status	="Login Successfull Redirecting.....";
header('refresh:0.00000000000000000000000000001,url=http://myandroidprojectsite.netne.net/AddFileRecord.php?');
exit;
}
if($istrue=="false"){
	
$status="<p style=color:red;>Invalid UserName AND/OR Password"."</p>";
}

?>



<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>


.ccontainer { margin: 29px auto; position: relative; width: 500px;height:235px;background-color:; }


</style>
 <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function Close(){
window.location.href="index.php";

 return false;
}
</script>

</head>

<body>

<div class="container ccontainer">

<div class="form-group">
<h4><b><strong>Login</strong></b> <span class="glyphicon glyphicon-remove" style="margin-left:400px; font-size:10px;"></span></h4> 
<hr>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<div class="form-group">
   
  <label class="control-label col-sm-2" for="UserNNme">UserName:</label>
    <div class="col-sm-10 ">
	
 <input type="text" class="form-control" id="login"  name ="UName" placeholder="Enter UserName">
  <i class="glyphicon glyphicon-option-horizontal  form-control-feedback" style="margin-right:10px;margin-bottom:18px; ">
  
  <i class="glyphicon glyphicon-question-sign form-control-feedback" style="margin-right:0px;margin-top:8px;">
  </i>
  </i>
  </div>
  
  
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" name ="pass" placeholder="Enter Password">
    
	  <i class="glyphicon glyphicon-option-horizontal  form-control-feedback" style="margin-right:10px;margin-bottom:18px; ">
  
  
  <i class="glyphicon glyphicon-question-sign form-control-feedback" style="margin-right:0px;margin-top:8px;">
  </i>
  </i>
</div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
   
   <button type="submit" class="btn glyphicon glyphicon-ok btn-success  " name="submt">Submit</button>
	<button type="reset" class="btn glyphicon glyphicon-refresh btn-danger  ">Reset</button>
	<?php echo "<p>".$status;?>  
  <hr>
  <div style="margin-left:400px; font-size:20px;">
  <button type="button" class="btn btn-default bt-sm" name="close" onclick="Close();">
  <span class="glyphicon glyphicon-remove"></span>Close
</button>
</div>
  </form>
</div>
</div>


</body>

</html>