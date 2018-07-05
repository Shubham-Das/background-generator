<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
            $host = "127.0.0.1";
            $user = "root";
            $pass = "";
            $database = "kolkata";
            $link = mysqli_connect($host, $user, $pass, $database);
            if(!$link){
                die("Connection Failded");
            }
?>