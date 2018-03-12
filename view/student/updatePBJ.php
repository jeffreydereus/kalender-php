<?php
$id = $_GET['id'];
$bdd = $_POST['birthday'];
$bdm = $_POST['Birthmonth'];
$bdy = $_POST['Birthyear'];


$db = openDatabaseConnection();
$sql = "UPDATE birthdays SET `day` = :bday, `month`  = :bmonth, `year` = :byear WHERE id = :id";
$query = $db->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->bindParam(':bday', $bdd, PDO::PARAM_INT);
$query->bindParam(':bmonth', $bdm, PDO::PARAM_INT);
$query->bindParam(':byear', $bdy, PDO::PARAM_INT);
$query->execute();
$db = null;
header('Location:' . URL .  'home/index');

return;