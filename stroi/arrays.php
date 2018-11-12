<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $jobs = array(
            "штукатурка" => array(
                "шпатель",
                "правило",
                "уровень",
                "ведро",
                "нож малярный",
            ),
            "шпаклевка" => array(
                "шпатель",
                "правило",
                "уровень",
                "ведро",
                "нож малярный",
            ),
            "грунтовка" => array(
                "шпатель",
                "маклавица",
                "ведро",
                "нож малярный",
            ),
            "поклейка обоев" => array(
                "шпатель",
                "правило",
                "уровень",
                "ведро",
                "нож малярный",
                "валик"
            ),
            "покраска потолка"
        );
        $tools = array(
            "шпатель",
            "правило",
            "уровень",
            "ведро",
            "нож малярный",
            "валик"
        );
//        $job = "job";
//        $j = 0;
        ?>
        <div class="container">
            <form action="arrays.php" method="post">           
                <table class="table table-striped">



                    <?php
//                    foreach ($jobs as $key => $value) {
//                        //for ($i = 0; $i < count($jobs); $i++) {
//                        //$j += 1;
//                        echo "$key"."<br>";
                        
                        for ($i = 0; $i < count($jobs); $i++) {
                            echo $jobs[$i]."<br>";
                        }
                        //for ($k = 0; $k < count($value); $k++) {
//                        foreach ($value as $k=>$v) {
//                            echo"<tr>                                      
//                    <td>$v</td>
//                    <td><input type='checkbox' name='asdasd' value='asdasda'></td>
//                </tr>";
//                        }
                    
                    ?>

                </table>
                <button type="submit" name="submit" value="yes">SUBMIT</button>
            </form>

            <?php
//            if (isset($_POST['submit'])) {
//
//                echo "<pre>";
//                print_r($_POST);
//
//                echo "</pre>";
//            }
            ?>
        </div>
    </body>
</html>
