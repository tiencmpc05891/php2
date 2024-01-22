<?php
namespace App;
class Home{
    public static function index():string{
    
    return 'Home';
    }

}
class Invoices {
    public static function index():string{

        return  'Invoices';
    }
    public static function create():string{

        return 'Create Invoice';

    }

}