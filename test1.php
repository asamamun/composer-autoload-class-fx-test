<?php

use App\Cart;
use App\User;

 require __DIR__.'/vendor/autoload.php';
 $conf = configuration();
 echo $conf['pagesize'];
 echo '<br>';
    echo $conf['company']['name'];
    echo '<br>';
    echo test1();
    echo '<br>';
    echo test2();
    echo '<br>';
    echo Cart::add('product');
    echo '<br>';
    echo User::getName();
?>
