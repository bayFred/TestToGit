<?php require '../functions.php'; ?>
<?php require 'layers/header.php'; ?>
        
<?php
    echo "<h2>";
    echo "Это файл " . cutFunctionName(__FILE__);
    echo "</h2>";


    $arr = [];
if($_POST['submit']){
    
    foreach ($_POST as $key => $value) {    

    $query = getTools("$key");
    
    $result = $conn->query($query);

    while ($row = mysqli_fetch_array($result)) {

        $arr[] = $row['tool_name'];

    }
    }
}
    else die("Не нажата кнопка отправить");
    

    /*
    $query = getTools('schpaklevka');
    $result = $conn->query($query);

    while ($row = mysqli_fetch_array($result)) {

        echo"<tr>                                      
                <td>$row[tool_name]</td>
            </tr>";
    }*/
?>
        <table class="table table-striped">

<?php
$res = array_unique($arr);
    for($i = 0; $i < count($res); $i++){
        //echo $res[$i];
echo <<<TABLE
        <tr>                                      
                <td>$res[$i]</td>
        </tr>
TABLE;
        echo "<br>";
    }
    
?>
        </table>
        <a href="result.php">ПРИКИНУТЬ ИНСТРУМЕНТ</a>
    </body>
</html>
