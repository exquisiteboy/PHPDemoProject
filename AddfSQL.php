<?php
class ADDFileTODB{
	
function AddRecord(){	
$connect=mysqli_connect('mysql8.000webhost.com','a3213381_b','123456','a3213381_a');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}		
if($stmt= mysqli_prepare($connect,"insert into FileRecord Values(?,?,?,?,?,?,?,?,?,?)" ))
{	
 mysqli_stmt_bind_param($stmt,"sssssissss",$IR,$Department,$Department_Type,$Org,$ORG_Type,$FileNo,$Date,$subj,$FileName,$FileStaus);

$IR=$_POST["IR"];
$Department=$_POST["dp"];
$Department_Type=$_POST["dpt"];
$Org=$_POST["org"];
$ORG_Type=$_POST["orgt"];
$FileNo=$_POST["fileNo"];
$Date=$_POST["Date"];
$subj=$_POST["Subject"];
$FileName=$_POST["fileName"];
$FileStaus=$_POST["Fstat"];
mysqli_stmt_execute($stmt);

if(mysqli_stmt_affected_rows($stmt)==1)
{
	
//echo "<b align=center>"."file record Added Successfully"."</b>";
header("refresh:0.1,url=AddFileRecord.php?sucess=true");
exit();
}
if(mysqli_stmt_affected_rows($stmt)==-1){
	
header("refresh:0.0000000000000000000000001,url=AddFileRecord.php?sucess=false");
exit();	
}


}

}
}   // end of  class

$obj=new ADDFileTODB;

$obj->AddRecord();

?>