<?php
$db = mysqli_connect('127.0.0.1', 'root','','redstoneshop');
if(mysqli_connect_error ()){
echo 'Database Connection failed with the following errors: '. mysqli_connect_error();
die();

}
