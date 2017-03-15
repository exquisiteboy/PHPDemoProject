

<!DOCTYPE html>
<html lang="en">
<head>
  <title>AddFileRecord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="AddfSQL.php" method="POST">
<nav class="navbar navbar-inverse nav-tabs">
  <div class="container-fluid">
    <div class="navbar-header" style="margin-top:50px;">
      <a class="navbar-brand" href="#"><span><img src="logo.png" height="40px;"></span></a>
    </div>
    <ul class="nav navbar-nav" style="margin-top:50px;">
      <li class="active"><a href="#">Add File Record</a></li>
      <li><a href="ShowRecord.php">Show File Record</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
    <li><a href="index.php" style=" margin-left:240px;float;right">
	<span class="glyphicon glyphicon-log-out" style="font-size:20px;"></span>Logout</a></li>
	
	
	</ul>
  </div>
</nav>
  
<div class="container">
  <h2 style="text-align:center">Add File Record</h2>                                         
  <table class="table table-striped table-bordered table-hover table-condensed" style="border:2px solid black">
    <thead>
      <tr>
        <td>Internal Receiving</td>
        <td>	
		<select name ="IR" class="selectpicker Multiple" style="margin-left:9px;font-size:20px;width:220px;">
		<option  slected="" value="">Select Option</option>
		<option  value ="DS">DS</option>
	    <option  value ="SSS">SSS</option>
		</select>
	
	</td>
      </tr>
    
	</thead>
    
	<tbody>
      <tr>
	  
        
		
		<td>
	Depapartemt
		
		</td>
        <td><select name ="dp" class="selectpicker Multiple" style="margin-left:9px;font-size:20px;width:220px;">
		<option slected="">Select Option</option>
		<option  value ="P&D">P&D</option>
	    <option  value ="PPRA">PPRA</option>
		</select></td>
      </tr>
      <tr>
        <td>Depapartemt Type</td>
        <td><select name="dpt" class="selectpicker Multiple" style="margin-left:9px;font-size:20px;width:220px;">
		<option slected="">Select Option</option>
		<option  value ="Chairman">Chairman</option>
	    <option  value ="Cheif()">Cheif</option>
		</select></td>
      </tr>
      <tr>
        <td>Organization</td>
        <td>
		<select name="org" class="selectpicker Multiple" style="margin-left:9px;font-size:20px;width:220px;">
		<option slected="">Select Option</option>
		<option  value ="DPSS/EE">DPSS/EE</option>
       <option   value ="CEO">CEO</option> 	
		<option name=-"org" value ="DC">DC</option>
		</select></td>
      </tr>
    
	<tr>
        <td>Organization Type</td>
        <td><select  name ="orgt" class="selectpicker Multiple" style="margin-left:9px;font-size:20px;width:220px;">
	<option   value="bwp" slected="">BWP</option>
	<option   value ="Gujrat">Gujrat</option>
	<option   value ="Gujranwala">Gujranwala</option>	
		
		</select></td>
      </tr>
	  
	  
	  
	  <tr>
        <td>File No#</td>
        <td>
		<input type="text" name="fileNo" value="" style="margin-left:9px;width:220px;" required="true">
		</td>
      </tr>
	  
	  
	  <tr>
        <td>Date</td>
        <td>
		
		<input type="text" name="Date" value="" style="margin-left:9px;width:220px;" placeholder="Eg. Ymd" required="true">
				
		</td>
      </tr>
	  
	  <tr>
        <td>Subject</td>
        <td>
		<input type="text" name="Subject" value="" style="margin-left:9px;width:220px;" >
		
		
		</td>
      </tr>
	  <tr>
        <td>File Name</td>
        <td>
		
		<input type="text" name="fileName" value="" style="margin-left:9px;width:220px;" required="true">
		
		</td>
      </tr>
	  <tr>
        <td>Status</td>
        <td>
		<select name ="Fstat" class="selectpicker Multiple" style="margin-left:9px;font-size:20px;width:220px;">
		<option  value="" slected="">Status</option>
		<option  value ="Pending">Pending</option>
	    <option  value ="Received">Received</option>
		</select></td>
      </tr>
	  
	  <tr>
        <td></td>
        <td>
		<input type="submit"  class="btn btn-primary " name="submitFile" value="submit" style=""></td>
      </tr>
	  
	</tbody>
  </table>

</form>

 <p >
	  <?php 
	  
	 if(isset($_GET["sucess"]))
	 {		 
	$sucss=$_GET["sucess"];
 if($sucss=="true"){	
	echo "<p align='center' style='color:green;'>"."File Record Added Sucesully"."</p>";
 }
	 
	 if($sucss=="false"){
		 
		 echo "<p align='center' style='color:red;'>"."<b>"."Unbable to Save File Record "."</b>"."</p>";
		 
	 }
	 }
	 ?>
	  </p>



</body>
</html>
