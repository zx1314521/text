<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // //连接数据库
    $con = mysqli_connect("localhost","root","root");
    if (!$con){
        die('Could not connect:');
    }
    
    // 创建数据库
    // if (mysqli_query($con,"CREATE DATABASE tttttext")){
    //     echo "Database created";
    // }
    // else{
    //     echo "Error creating database: ";
    // }
    
    // //选择数据库
    mysqli_select_db($con, "Say");
    
    // //插入语句
    // $insert = "
    // INSERT INTO person (FirstName, LastName, Age) 
    // VALUES ('Peter', 'Griffin', '35')
    // ";
    // mysqli_query($con,$insert);
    
    // //从html中输入的值插入到数据库
    // $insert = "
    // INSERT INTO person (FirstName, LastName, Age)
    // VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[age]')
    // ";
    // if(!mysqli_query($con,$insert)){
    //     die("Erro");
    // }
    // echo "OK Accepted!";

    
    // //展示数据
    $show = "SELECT * FROM person";
    $result = mysqli_query($con, $show);
    while($row = mysqli_fetch_array($result)){
        echo $row['word'];
        echo "<br />";
    }
    
    // $show2 = "SELECT * FROM person";
    // $result = mysqli_query($con, $show2);
    // echo "<table border='1'>
    // <tr>
    // <th>Firstname</th>
    // <th>Lastname</th>
    // </tr>";
    // while($row = mysqli_fetch_array($result))
    // {
    // echo "<tr>";
    // echo "<td>" . $row['FirstName'] . "</td>";
    // echo "<td>" . $row['LastName'] . "</td>";
    // echo "</tr>";
    // }
    // echo "</table>";

    // //删除
    // $del = "DELETE FROM Person WHERE LastName='Griffin'";
    // mysqli_query($con, $del);

    // //改
    // $update = "
    // UPDATE Person SET Age = '36'
    // WHERE FirstName = 'zhu' AND LastName = 'xia'
    // ";
    // mysqli_query($con, $update);

    mysqli_close($con);
?>
</body>
</html>

