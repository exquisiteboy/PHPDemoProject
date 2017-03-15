<?php

class myclass{
    var  $UName="";
    var  $UPassword="";
function setUName($name)
{
	
	$this->UName=$name;
	
}


function setUPassword($Pass)
{
	
	$this->UPassword=$pass;
	
}


function getUName()
{
	
	echo $this->UName ."<br/>";
	
}
function getUPassword()
{
	
echo $this->UPassword ."<br/>";
	
}

}

$obj=new myclass;



$Password=$_GET["pass"];



$userName=$_GET["UName"];

$obj->setUName($userName);

$obj->setUPassword($Password);

$obj->getUName();

$obj->getUPassword();

//echo $Password +"<br>"+$UserName;
//echo $userName; 

?>