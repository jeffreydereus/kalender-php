<?php

function getAllBirthdays()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month, day";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function aaddbd()
{
    $name = $_POST['Name'];
    $bdd = $_POST['birthday'];
    $bdm = $_POST['Birthmonth'];
    $bdy = $_POST['Birthyear'];

        $db = openDatabaseConnection();

        $sql = "INSERT INTO birthdays (person, `day`, `month`, `year`) VALUES(:person, :bday, :bmonth, :byear)";
        $query = $db->prepare($sql);
        $query->bindParam(':person', $name, PDO::PARAM_STR);
        $query->bindParam(':bday', $bdd, PDO::PARAM_INT);
        $query->bindParam(':bmonth', $bdm, PDO::PARAM_INT);
        $query->bindParam(':byear', $bdy, PDO::PARAM_INT);
        $query->execute();

        $db = null;
    header('Location:' . URL .  'home/index');

    return;
}

function deleteR($id)
{
        $db = openDatabaseConnection();

        $sql = "DELETE FROM birthdays WHERE id= '$id'";
        $query = $db->prepare($sql);
        $query->execute();

        $db = null;
        header('Location:' . URL .  'home/index');

}

function updateP()
{
        $id = $_GET['id'];

        $db = openDatabaseConnection();

        $sql = "SELECT * FROM birthdays WHERE id = '$id'";
        $query = $db->prepare($sql);
        $query->execute();

        $db = null;

        return $query->fetchAll();
}
