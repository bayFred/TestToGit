<?php require 'layers/header.php'; ?>

<?php
$query = "SELECT * FROM jobs";
$result = $conn->query($query);
if (!$result)
    die("Сбой при доступе к базе данных: " . $conn->error);
?>


<div class="container">
    <?php if (!$_GET) { ?>



        <form action="index2.php" method="get">           

            <table class="table table-striped">

                <?php
                while ($row = mysqli_fetch_array($result)) {


                    echo"<tr>                                      
                <td>$row[job_name]</td>
                <td><input type='checkbox' name='$row[job_name_eng]' value='$row[job_name]'></td>
                </tr>";
                }
                ?>

            </table>


    </div>





    <div class="text-center">  <button class="btn-lg text-center"  type="submit"  name="submit" value="yes">Рассчет инструмента</button></div>


    </form>

    </div>
    </div>

<?php } ?>

<?php
//$_GET['submit'] = null;
$arr = [];
if ($_GET) {
    ?>


    <?php
    echo("<h3>Нам потребуется:</h3>");
    foreach ($_GET as $key => $value) {

        $query = getTools("$key");

        $result = $conn->query($query);

        while ($row = mysqli_fetch_array($result)) {

            $arr[] = $row['tool_name'];
        }
    }

    // else die("Не нажата кнопка отправить");
    ?>
    <table class="table table-striped">

        <?php
        $res = array_unique($arr);
        for ($i = 0; $i < count($res); $i++) {
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
    <div class="text-center">  <a href="index2.php" class="btn-lg btn btn-danger text-center"  type="submit"  name="submit" value="yes">OK</a></div>		

    <?php
}
?>

</div>

</body>
</html>
