<?php require_once 'database.php'; ?>

<?php
//lekérjük a linkből a változókat
 $id=mysqli_real_escape_string($connection,$_GET['id']);
//Querry előkészitése
$query = "SELECT * FROM login WHERE id = '$id'";
//csatlakozás az adatbázisra és elmentjük a azt a sort ahol id='$id'!!
$result = mysqli_query($connection, $query);
//ellenörizük hogy a lekért változóba van e adat/sor
if (mysqli_num_rows($result) != 1) {
} else {
    //feldaraboljuk az adott $result nevü változot és bele rakjuk a  $user-be
    $user = mysqli_fetch_assoc($result);}
 ?>

 <?php  require_once 'footer.php' ?>