<?php
class UpdateFileRecord{
	
function Mark_AS_Received(){	
$connect=mysqli_connect('mysql8.000webhost.com','a3213381_b','123456','a3213381_a');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}		
if($stmt= mysqli_prepare($connect,"update FileRecord SET Status='Received' where FileNo=?" ))
{	
 mysqli_stmt_bind_param($stmt,"i",$FileNo);

 $FileNo=$_GET["fileno"];
 
 echo $FileNo;
mysqli_stmt_execute($stmt);

if(mysqli_stmt_affected_rows($stmt)==1)
{
	
echo "<b align=center>"."file record Added Successfully"."</b>";
header("refresh:0,url=http://myandroidprojectsite.netne.net/ShowRecord.php?link=2");
exit();	
}
else{
	
echo "Error In saving File Record";	
	
}


}
}
}// end of  class

$obj=new UpdateFileRecord;

$obj->Mark_AS_Received();

?>