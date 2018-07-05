<html>
    <head>
    </head>
    <body>
        <?php
            $c = 10;
            function printdata(){
                $GLOBALS['c'] = 20;
                $GLOBALS['d'] = 30;
            }
            printdata();
            echo $c;
            echo $d;
            echo "SERVER";
            foreach($_SERVER as $key => $value)
                echo "<br>".$key." : ".$value;
        ?>
    </body>>
</html>