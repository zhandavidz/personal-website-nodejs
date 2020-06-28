<?php 




require $_SERVER['DOCUMENT_ROOT'].'/site-parts/db-credentials.php';





try 
{
    $conn = new PDO("mysql:host=$servername;dbname=best_buy", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 

    $sql = "
    CREATE TABLE `swimmerLap`(
      `id` INT NOT NULL ,
      `name` VARCHAR(255),
      `start` INT,
      `finish` INT
    );";

    $conn->exec($sql);

}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

 
 ?>