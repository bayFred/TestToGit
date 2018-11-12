<?php require 'controllers/WelcomeController.php'; 
      require 'models/welcome_model.php';
      require 'classes.php';
      
      
/*
|Сделать функцию которая бы обрезала встроенную функцию __FILE__
|до названия функции. Например
|        C:\xampp\htdocs\TestToGit\controllers\WelcomeController.php
|        до
вввввввввввввввввввввввввввввввввввввв
|                        WelcomeController.php
*/

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title></title>
    </head>
    <body>
		<p>Hello</p>
        Если значение равно Х то ключи записываются в отдельный массив
        <div class="col-sm-6">
            
          <?php //require 'sqlTest.php'; ?>  
            
        </div>
            <?php
		
		
		$username = 'admin';
$password = 'letmein';
if (isset($_SERVER['PHP_AUTH_USER']) &&
isset($_SERVER['PHP_AUTH_PW']))
{
if ($_SERVER['PHP_AUTH_USER'] == $username &&
$_SERVER['PHP_AUTH_PW'] == $password)
echo "Регистрация прошла успешно";
else die("Неверная комбинация имя пользователя — пароль");
}
else
{
header('WWW-Authenticate: Basic realm="Restricted Section"');
header('HTTP/1.0 401 Unauthorized');
die ("Пожалуйста, введите имя пользователя и пароль");
}
        
        
//echo <<<_END
//<html><head><title>PHP-форма для загрузки файлов на сервер</title></head><body>
//<form method='post' action='index.php' enctype='multipart/form-data'>
//Выберите файл: <input type='file' name='filename' size='10'>
//<input type='submit' value='Загрузить'>
//</form>
//_END;
//if ($_FILES)
//{
//$name = $_FILES['filename']['name'];
//move_uploaded_file($_FILES['filename']['tmp_name'], $name);
//echo "Загружаемое изображение '$name'<br><img src='$name'>";
//}
//echo "</body></html>";
        
        
        
        //echo file_get_contents("http://oreilly.com");
       
//            if (!rename('testfile.txt', 'testfile.new'))
//            echo "Переименование невозможно";
//            else echo "Файл успешно переименован в 'testfile2.new'";

        //echo 'kjhjhkj';
       // echo "<pre>";
        //print_r($_POST);
        //echo "</pre>";
//        $products = array(
//            "one"=>"book",
//            "two"=>"PC",
//            "three"=>"sofa",
//            "four"=>"clock",
//            "five"=>"guitar",
//            "six"=>"dog",
//            "seven"=>"cat",
//        );
//        $result[]="abc";
//        $result[]="sql";
//        
//         echo "<pre>";
//            print_r($result);
//             echo "</pre";
//             
//             while(list($key, $value) = each($products))
//                 echo "<br><b>Новый способ</b><br>$key =>$value<br>";
//           
//
//            echo '<br>====================<br>';
//        
//        foreach ($products as $key => $value) {
//            if($value == "PC")$result[]=$key;
//            
//        }
//          echo "<pre>";
//            print_r($result);
//             echo "</pre";
//        
        ?>
        
        
        
        <?php
        
            $a = ["a","b","c"];
            $e = ["U","G","K"];
            $b = array(["d","e","g"],["f","h","i"]);
            $c = $a+$e;
             echo "<pre>";
            print_r($e);
             echo "</pre";
            //echo phpversion();

            echo '<br>====================<br>';

            $app1 = new App1();
           
            $app1->view();
           
        ?>
        <?php
//            class App1{
//    public function view(){
//        echo __FILE__;
//    }
//}
        ?>
        
        
    </body>
</html>
