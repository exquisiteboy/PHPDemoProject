<?php 	

class Registeration{

function InsertIntDb(){
$connect=mysqli_connect('mysql8.000webhost.com','a3213381_b','123456','a3213381_a');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}	
	
$stmt=$connect->prepare("insert into StudentRegistration Values(?,?,?,?,?)");	
$stmt->bind_param("ssssi",$Usernname,$Fullnaame,$userEmail,$userPass,$userAccessCode);	


$Usernname=$_POST["RUName"];
$Fullnaame=$_POST["FULLname"];
$userEmail=$_POST["EMAIL"];
$userPass=$_POST["passwrd"];
$userAccessCode=$_POST["accCode"];


$status=$stmt->execute();

if($stmt->affected_rows==1){

header('Location:http://myandroidprojectsite.netne.net/Registration.php?added=success');
exit;
	
}
if($stmt->affected_rows==-1){
	
header('Location:http://myandroidprojectsite.netne.net/Registration.php?added=nsuccess');
exit;	
	
}
$stmt->close();
$connect->close();	
	
}

}

$obj=new Registeration;

$obj->InsertIntDb();

//header('Location:http://myandroidprojectsite.netne.net/Registration.php?added="Success"');
//exit;


?>