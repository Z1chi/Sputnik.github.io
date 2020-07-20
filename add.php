<?php
/*if (isset ($_POST['submit']))
{
    if(!empty($_POST["callBackA"]))
    {
        echo '<h3>dsdsdssdds</h3>'
        foreach ($_POST ['callBackA'] as $callBackA)
        {
            echo '<p>' .$callBackA. '</p>';
        }
else{
    echo 'plsea';
    }
    }

*/

if ( isset($_POST['callbackA']) == true ) {
    $chek = 1;
}
else {
    $chek = 0;
}

$pdo = new PDO("mysql:host=localhost; dbname=teh_sputnik", "root", "");

$sql = "INSERT INTO technical_records (`address`, `sector`, `repair`, `description`, `name_c`, `phone`, `callback`, `personal_account`,`date`)
VALUES ('".$_POST["address"]."',".$_POST["sectorA"].",".$_POST["repairA"].",'". $_POST["descriptionA"]."','". $_POST["name_cA"]."','".$_POST["phone"]."', ".$chek.",'". $_POST["personal_accountA"]."',now())";
/*$sql = 'INSERT INTO technical_records (address, sector, repair, description, name_c, phone, callback, personal_account)
VALUES ( :address, :sectorA, :repairA, :descriptionA, :name_cA, :phone, :callbackA, :personal_accountA)';*/
$statement = $pdo->prepare($sql);

$statement->execute(); //true || false



header("Location: /"); exit;

