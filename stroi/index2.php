<?php require 'layers/header.php'; 
		require 'db2.php'; 
			
$db = new DB();
echo $db->create_DB();
$db->getAll();
			

            
			
echo"<div class='container'>";
	
		if(!isset($_GET['submit'])){
echo"	<form action='index2.php' method='get'>           
		<table class='table table-striped'>";
			
while ($row = mysqli_fetch_array($db->result)) {

	echo"<tr>                                      
	<td>$row[job_name]</td>
	<td><input type='checkbox' name='$row[job_name_eng]' value='$row[job_name]'></td>
	</tr>";
}

echo <<<END_TABLE1
		
</table>
		
		
</div>

				

	
	<div class="text-center">  
		<button class="btn-lg text-center"  type="submit"  name="submit" value="yes">Рассчет инструмента</button>
	</div>
            
	</form>
            
</div>
</div>
END_TABLE1;
 } 

  
    $arr = [];
if(isset($_GET['submit'])){

    echo("<h3>Нам потребуется:</h3>");
    foreach ($_GET as $key => $value) {    

    $query = $db->getTools("$key");
    
    $result = $db->conn->query($query);

while ($row = mysqli_fetch_array($result)) {

	$arr[] = $row['tool_name'];

}
}

   // else die("Не нажата кнопка отправить");


       echo"<table class='table table-striped'>";


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
	
echo <<<END_TABLE2
	</table>
	<div class="text-center">  <a href="index2.php" class="btn-lg btn btn-danger text-center"  type="submit"  name="submit" value="yes">OK</a></div>
END_TABLE2;
			
		
    }
    

			
echo"</div></body></html>";

?>
