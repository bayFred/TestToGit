<?php

//class BayFunctions {
    
    /*
     *  Обрезает длинные пути файлов до названия
     *   было: 
     *      C:\xampp\htdocs\TestToGit\models\welcome_model.php';
     *   стало:
     *      welcome_model.php
     * 
     */
   function cutFunctionName($str1){
        
       $res1 = strrpos($str1, '\\');
       $res = substr($str1, $res1+1);
       return $res;
   // }
}

?>