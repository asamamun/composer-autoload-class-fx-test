<?php
namespace App;
class Cart{
    public static function add($product){
        echo 'Cart::add';
    }
    public static function getTotal(){
        echo 'Cart::getTotal';
    }
    public static function getCount(){
        echo 'Cart::getCount';
    }
    public static function getProducts(){
        echo 'Cart::getProducts';
    }
    public static function remove($product){
        echo 'Cart::remove';
    }
    

}