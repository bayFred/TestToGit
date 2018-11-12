<?php require 'layers/header.php'; ?>
<div class="jumbotron text-center">
    <h1>Кабинет мастера</h1>
    <p>Все, что нужно профессионалу</p> 
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2" style="background-color: grey;">
            <h3>Column 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
		<section class="cls"></section>
        <div class="col-sm-10">


            <?php
            $query = "SELECT * FROM jobs";
            $result = $conn->query($query);
            if (!$result)
                die("Сбой при доступе к базе данных: " . $conn->error);
            ?>
            <div class="container">
                <form action="choose.php" method="post">           
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

            <?php
            //        $rows = $result->num_rows;
            //for ($j = 0 ; $j < $rows ; $j++)
            //{
            //        
            //        $row = $result->fetch_assoc(); 
            //echo <<<_END
            //        <ul>            
            //            <li>$row[job_name]</li>
            //        </ul>
            //_END;
            //}
            //$result->close();
            //$conn->close();
            ?>
				
          <div class="text-center">  <button class="btn-lg text-center"  type="submit"  name="submit" value="yes">ПРИКИНУТЬ ИНСТРУМЕНТ</button></div>
            </form>
            
        </div>
    </div>
</div>

</body>
</html>
