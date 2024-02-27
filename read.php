<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: gold;
        }

        #hd {
            background-color: green;
            color:red ;
        }
    </style>
</head>
<body>
    <div id="hd">
    <h2 align='center'> Student Details </h2><br>
        <hr>
        <div id="nav">
            <a href="home.html">Home</a>
            <a href="New Student.html">New Student</a>
            <a href="modify">Modify</a>
            <a href="remove.html">Remove</a>
            <a href="read.php">View</a>
        </div>
    </div>
    <br><br>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student_profile';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from stu_pro";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['SID'].'</td>';
      echo '<td>'.$row['SNAME'].'</td>';
      echo '<td>'.$row['SNUM'].'</td>';
      echo '<td>'.$row['SADR'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>