<?php 

/* ==================================================
 *  Обрезает длинные пути файлов до названия
 *   было: 
 *      C:\xampp\htdocs\TestToGit\models\welcome_model.php';
 *   стало:
 *      welcome_model.php
 * 
 */

function cutFunctionName($str1) {

    $res1 = strrpos($str1, '\\');
    $res = substr($str1, $res1 + 1);
    return $res;
}

/* ====================================================== */



/*
 * СОздание файла и добавление в файл
 */

function toFile(){

$fh = fopen("testfile.txt", 'a+') or die("Создать файл не удалось");
$text = <<<_END
\r
Строка 4
Строка 5
Строка 6
_END;
fwrite($fh, $text) or die("Сбой записи файла");
fclose($fh);
}
//echo "Файл 'testfile.txt' записан успешно ";

/*
 * Функции обезвреживания ввода
 */

function sanitizeString($var) {
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

function sanitizeMySQL($connection, $var) {
    $var = $connection->real_escape_string($var);
    $var = sanitizeString($var);
    return $var;
}
/*=============================================================*/



function translitToEng($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = trim($s); // убираем пробелы в начале и конце строки
  $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array( 'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d',
                        'е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i',
                        'й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n',
                        'о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t',
                        'у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch',
                        'ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu',
                        'я'=>'ya','ъ'=>'','ь'=>''));
  return $s; // возвращаем результат
}

function translitToRu($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = trim($s); // убираем пробелы в начале и конце строки
  $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array( "a"=>"а","b"=>"б","v"=>"в","g"=>"г",
                        "d"=>"д","e"=>"е","yo"=>"ё", "j"=>"ж",
                        "z"=>"з","i"=>"и","i"=>"й","k"=>"к",
                        "l"=>"л","m"=>"м","n"=>"н","o"=>"о",
                        "p"=>"п","r"=>"р","s"=>"с","t"=>"т",
                        "y"=>"у","f"=>"ф","h"=>"х","c"=>"ц",
                        "ch"=>"ч","sh"=>"ш","sh"=>"щ","i"=>"ы",
                        "e"=>"е","u"=>"у","ya"=>"я","A"=>"А",
                        "B"=>"Б", "V"=>"В","G"=>"Г","D"=>"Д", 
                        "E"=>"Е","Yo"=>"Ё","J"=>"Ж","Z"=>"З",
                        "I"=>"И","I"=>"Й","K"=>"К","L"=>"Л",
                        "M"=>"М", "N"=>"Н","O"=>"О","P"=>"П",
                        "R"=>"Р","S"=>"С","T"=>"Т","Y"=>"Ю",
                        "F"=>"Ф","H"=>"Х","C"=>"Ц","Ch"=>"Ч",
                        "Sh"=>"Ш", "Sh"=>"Щ","I"=>"Ы","E"=>"Е",
                        "U"=>"У","Ya"=>"Я","'"=>"ь","'"=>"Ь",
                        "''"=>"ъ","''"=>"Ъ","j"=>"ї","i"=>"и",
                        "g"=>"ґ", "ye"=>"є","J"=>"Ї","I"=>"І",
                        "G"=>"Ґ","YE"=>"Є"  ));
  return $s; // возвращаем результат
}

//echo translit("Получилось!");

//Уникальные значения массива============================================
//array_unique($input);
?>