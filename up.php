<?php
$host='localhost';
$user='root';
$pass='';
$db='student_profile';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['SID'];
$sna=$_POST['SNAME'];
$sno=$_POST['SNUM'];
$sa=$_POST['SADR'];


$sql="update stu_pro set SNAME='$sna',SNUM='$sno',SADR='$sa' where SID='$id'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>