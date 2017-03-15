<?php

class DeleteFileRecord{
	
function DeleteFile(){	

$connect=mysqli_connect('mysql8.000webhost.com','a3213381_b','123456','a3213381_a');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}		
if($stmt= mysqli_prepare($connect,"Delete from FileRecord  where FileNo=?" ))
{	
 mysqli_stmt_bind_param($stmt,"i",$FileNo);

 $FileNo=$_GET["fileno"];
 

mysqli_stmt_execute($stmt);

if(mysqli_stmt_affected_rows($stmt)==1)
{
	
echo "<h1 align='center'>"."File NO".$FileNo." Deleted Successfully"."</h1>";

header("refresh:2,Url=ShowRecord.php");
exit();	
}
else{
	
echo "<h1>Error : ocuured While Deleting FileRecord of File NO".$FileNo."<p>Either File is missing or has been deleted</p></h1>";	
	
}


}
}
} // end of  class

$obj=new DeleteFileRecord;
$obj->DeleteFile();

?>