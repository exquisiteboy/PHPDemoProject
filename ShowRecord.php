<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShowRecords</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function ShoWRecieved(){
$.get("ShowPendin.php");
 return false;
}
</script>
 <style>
.ccontainer {width:650px;height:auto;border:2px solid  black; }  
  </style>
  </head>

<body>
<form action="" method="POST">
<nav class="navbar navbar-inverse nav-tabs">
  <div class="container-fluid">
    <div class="navbar-header" style="margin-top:50px;">
      <a class="navbar-brand" href="#"><span><img src="logo.png" height="40px;"></span></a>
    </div>
    <ul class="nav navbar-nav" style="margin-top:50px;">
      <li><a href="AddFileRecord.php">Add File Record</a></li>
      <li class="active"><a href="#">Show File Record</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
    <li><a href="index.php" style=" margin-left:240px;float;right">
	<span class="glyphicon glyphicon-log-out" style="font-size:20px;"></span>Logout</a></li>
	
	
	</ul>
  </div>
</nav>
  
<div class="container">
  <h2 style="text-align:center; margin-top:150px;" >Show File Record</h2> 
  <div id="" style="margin-top:0px;">
<a href="?link=1"  class="btn btn-link" style="float :right;margin-right:400px;">Recieved</a>
<span  style="width:0px;height:400px;border:1px solid black; margin-top:405px;"></span> 
<a href="?link=2" class="btn btn-link" style="float:left;margin-left:370px;">Pending</a></a></div>
  
</div>

<div class="container">
                                           
   
	<?php 
	
	if(isset($_GET['link'])){
		$link=$_GET['link'];
	if($link=='1')	
	{
	print '<div class=container ccontainer style=border:3';	
	include 'RecievedFiles.php';	
	print '</div>';	
	}
if($link=='2')
{
	
	include 'PendingFiles.php';
	
}	
	}
	
	
	
	
	?> 
	  
  </table>

  
  
  
  

</form>

</body>
</html>
