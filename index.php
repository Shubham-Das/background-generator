<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //include_once './include/functions.php';
            include 'Database.php';
            $roll = '120';
            $name = "Ganesh";
            $result = mysqli_query($link, "insert into `student` values(101, '$name')");
            if($result){
               echo "Record Inserted";
            }
            mysqli_close($link);
        ?>
    </body>
</html>
