<?php
require_once("db.php");

$sql = 'SELECT * from photo';
$cursor = $dbh->query($sql);
$row = $cursor->fetch();
while ($row != false){
    print $row['nomphoto'].' - ';
    print $row['desphoto'].'<br>';
    $row = $cursor->fetch();
}
?>