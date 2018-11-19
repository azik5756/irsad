<?php
 $h='sql112.epizy.com';
 $u='epiz_22695826';
 $pass='29j48J50A2W7X';
 $dtbase='epiz_22695826_azik';
 $azik=new mysqli($h,$u,$pass,$dtbase);
 $rio=$azik->query("SELECT * FROM `pronet_products`");
 $pama=$rio->fetch_assoc();
 echo $pama['price'];
?>