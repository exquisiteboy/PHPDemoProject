<?php
//$query = "select field1, fieldn from table [where clause][group by clause][order by clause][limit clause]";
class ShowRecords{


function ShowRecievedFiles(){

$connect=mysqli_connect('mysql8.000webhost.com','a3213381_b','123456','a3213381_a');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
$Received="Received";
 $stsmt=$connect->prepare("select * from FileRecord WHERE Status=?");
 $stsmt->bind_param('s',$Received);
 $stsmt->execute();
 $stsmt->bind_result($internalRecieving,$Department,$Departmenttype,$Organization,$Organizationtype,$FileNo,$Date,$Subject,$FileName,$Status);
 


 print '<table  class ="contaner table table-striped table-bordered table-hover table condensed "  border="1"';
 
 
 while($stsmt->fetch()){
	 
	 print '<tr>';
	 print '<td>'.$internalRecieving.'</td>';
	 print '<td>'.$Department.'</td>';
	 print '<td>'.$Departmenttype.'</td>';
	 print '<td>'.$Organization.'</td>';
	 print '<td>'.$Organizationtype.'</td>';
	 print '<td>'.$FileNo.'</td>';
	 print '<td>'.$Date.'</td>';
	 print '<td>'.$Subject.'</td>';
	 print '<td>'.$FileName.'</td>';
	 print '<td>'.$Status.'</td>';
	 print '</tr>';
	 
 }
 
 
 print '</table>';
 $stsmt->close();
 $connect->close();
}

function getClickedLink(){
	
	
	if($_GET['button1']){
		
		
	ShowRecievedFiles();	
		
	}
	
	
	
}

}
$obj=new ShowRecords;
$obj->getClickedLink(); 

 
 ?>
 
 <div class="container">
                                           
  <table class="table table-striped table-bordered table-hover table-condensed" style="border:2px solid black">
   
<?php echo '<table>'?>


   <thead>
      <tr>
        <td>Sr#</td>
        <td>
  internal Receiving		
		</td>
		
		<td>Date</td>
		<td>Departement</td>
		<td>D-type</td>
		<td>Organization</td><td>Org-type</td><td>FileNo#</td>
		<td>Subject</td>
		<td>File Name</td>
		<td>Status</td>
		<td>Action</td>
		  </tr>
	</thead>
    
	</tbody>
  </table>

 
 
 
 
 
 
 