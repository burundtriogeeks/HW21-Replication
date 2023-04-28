<?php

$mysql = mysqli_connect("host.docker.internal","root","root_password","test","8001");



do {

    $res = mysqli_query($mysql,"INSERT INTO `users` SET `name` = 'test2', `age` = ".mt_rand(1,99));

} while (true);