<?php require_once 'controller/database.php'; 
require_once'header.php';

?>

<?php
//lekérjük a linkből a változókat
 $id=mysqli_real_escape_string($connection,$_GET['id']);
//Querry előkészitése
$query = "SELECT * FROM cards WHERE id = '$id'";
//csatlakozás az adatbázisra és elmentjük a azt a sort ahol id='$id'!!
$result = mysqli_query($connection, $query);
//ellenörizük hogy a lekért változóba van e adat/sor
$row = mysqli_fetch_assoc($result);
echo '<div class="container">';'
    

echo '

                <div class="card" style="padding: 5% ";>
                   <img  src="upload/images/' . $row['kep'] . '" class="card-img-top"  style=width="400px" height="325px">

                    <h5 class="card-title">' . $row['nev'] . '</h5>
                    <p class="card-text">' . $row['leiras'] . '</p>
                </div>';
 ?>
echo '</div>;

 <?php  require_once 'footer.php' ?>