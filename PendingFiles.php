<html>

<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<?php
//$query = "select field1, fieldn from table [where clause][group by clause][order by clause][limit clause]";


$connect=mysqli_connect('mysql8.000webhost.com','a3213381_b','123456','a3213381_a');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
$Pending="Pending";
 $stsmt=$connect->prepare("select * from FileRecord WHERE Status=?");
 $stsmt->bind_param('s',$Pending);
 $stsmt->execute();
 $stsmt->bind_result($internalRecieving,$Department,$Departmenttype,$Organization,$Organizationtype,$FileNo,$Date,$Subject,$FileName,$Status);
 
 print '<table  class ="container table table-striped table-bordered table-hover table condensed "  border="8px solid black"';
 print '<thead>';
 print '<tr>';
 print '<td>'."Sr#".'</td>';
 print '<td>'."internal Receiving".'</td>';
 print '<td>'."Date".'</td>';
 print '<td>'."Departement".'</td>';
 print '<td>'."D-type".'</td>';
 print '<td>'."Organization".'</td>';
 print '<td>'."Org-type".'</td>';
 print '<td>'."FileNo#".'</td>';
print '<td>'."Subject".'</td>';
print'<td>'."FileName".'</td>';
print '<td>'."Status".'</td>';
print	'<td>'."Action".'</td>';
print '</tr>';
print '	</thead>';
print '</tbody>';
 $sno=1;
 $filno=1;
 while($stsmt->fetch()){
	 
	 print '<tr>';
	 print '<td>'.$sno.'</td>';
	 print '<td>'.$internalRecieving.'</td>';
	 print '<td>'.$Date .'</td>';
	 print '<td>'.$Department.'</td>';
	 print '<td>'.$Departmenttype .'</td>';
	 print '<td>'.$Organization .'</td>';
	 print '<td>'.$Organizationtype .'</td>';
	 print '<td>'. $FileNo. '</td>';
	 print '<td>'.$Subject.'</td>';
	 print '<td>'.$FileName.'</td>';
	 print '<td>'.$Status.'</td>';
	 print '<td>';	
 
	echo "<a href=fff.php?fileno={$FileNo}><input type=button class='btn btn-primary' value='Mark Recieved'></a>";
	
	 print '</td>';
	 
	 $sno++;
	 print '</tr>';
	 
 }
 
 
 print '</table>';
 $stsmt->close();
 $connect->close();

 
 ?>
 