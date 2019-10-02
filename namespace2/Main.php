<?php

//namespace namespace2;
//use namespace2;
require_once 'App2.php';
//require_once '/../namespace1/namespace1.php';


class Main{
    public function index() {
        
        echo "<h2>Hello from ".__FILE__."</h2><br>";
       $app2 = new App2();
       $app2->index();
        
    }
}

$main = new Main();
$main->index();
$main->index();
$main->index();

