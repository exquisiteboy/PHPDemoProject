<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>


.ccontainer { margin: 29px auto; position: relative; width: 530px;height:450px;background-color:white; }

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
<h4><b><strong>Registration</strong></b> <span class="glyphicon glyphicon-remove" style="margin-left:400px; font-size:10px;"></span></h4> 


<hr>
<form class="form-horizontal" action="Register.php" method="post">


  <div class="form-group">
   
  <label class="control-label col-sm-2" for="UName">USerName:</label>
    <div class="col-sm-10 ">
	
 <input type="text" name ="RUName" class="form-control" id="UName" placeholder="Enter Full Name" required="true">
  <i class="glyphicon glyphicon-option-horizontal  form-control-feedback" style="margin-right:10px;margin-bottom:18px; ">
  
  
  <i class="glyphicon glyphicon-question-sign form-control-feedback" style="margin-right:0px;margin-top:8px;">
  </i>
  </i>
  </div>
  
  
  </div>









  <div class="form-group">
   
  <label class="control-label col-sm-2" for="Name">FullName:</label>
    <div class="col-sm-10 ">
	
 <input type="text" name ="FULLname" class="form-control" id="Name" placeholder="Enter Full Name" required="true">
  <i class="glyphicon glyphicon-option-horizontal  form-control-feedback" style="margin-right:10px;margin-bottom:18px; ">
  
  
  <i class="glyphicon glyphicon-question-sign form-control-feedback" style="margin-right:0px;margin-top:8px;">
  </i>
  </i>
  </div>
  
  
  </div>
  
  
  <div class="form-group">
   
  <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10 ">
	
 <input type="email"  name= "EMAIL" class="form-control" id="email" placeholder="Enter Email Address" required="true">
  <i class="glyphicon glyphicon-option-horizontal  form-control-feedback" style="margin-right:10px;margin-bottom:18px; ">
  
  
  <i class="glyphicon glyphicon-question-sign form-control-feedback" style="margin-right:0px;margin-top:8px;">
  </i>
  </i>
  </div>
  
  
  </div>
  
  
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password"  name ="passwrd" class="form-control" id="pwd" placeholder="Enter Password" required="true">
    
	  <i class="glyphicon glyphicon-option-horizontal  form-control-feedback" style="margin-right:10px;margin-bottom:18px; ">
  
  
  <i class="glyphicon glyphicon-question-sign form-control-feedback" style="margin-right:0px;margin-top:8px;">
  </i>
  </i>
	
</div>
</div>	
<div class="form-group">
   
  <label class="control-label col-sm-2" for="access">Access Code:</label>
    <div class="col-sm-10 ">
	
 <input type="text"  name ="accCode" class="form-control" id="access" placeholder="Enter Access Code" required="true">
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
<?php 
if(isset($_GET["added"])){
	
$status=$_GET["added"];
if($status=="success")	
{
echo "<p style=color:green>"."Registration Successful"."</p>";	
	
}

if ($status=="nsucess"){
	
echo "<p style=color:red>"."Registration UnSuccessful"."</p>";	
	
}	
	
}
?>
    </div>
  </div>
  
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