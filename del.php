<?php
$host='localhost';
$user='root';
$pass='';
$db='student_profile';


//connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['SID'];

$sql="delete from stu_pro where SID='$id'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();

?>