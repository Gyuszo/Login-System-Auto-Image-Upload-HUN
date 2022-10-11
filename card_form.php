<?php require_once('header.php'); ?>
<?php require_once 'controller/database.php';

$querry = "SELECT * from cards where 1";
$result = mysqli_query($connection, $querry);
echo '<div class="row">';
while ($row = mysqli_fetch_assoc($result)) {

    echo '<div class="card float col-4 " style="padding: 5% ">
          <img  src="upload/images/' . $row['kep'] . '" class="card-img-top"  style=width="400px" height="325px">
          <h5 class="card-title">' . $row['nev'] . '</h5>
          <p class="card-text">' . $row['leiras'] . '</p>
          <a href="card_zoomed.php?id=' . $row['id'] . '" class="btn btn-primary" >Mutass Többet</a>
          </div>
                
            ';
}
echo'</div>';
if (isset($_SESSION['user'])) {
    

?> <a href="card.php"> <button class="w-100 btn btn-lg btn-dark">Jeletkezzé</button> </a><?php
}
require_once('footer.php'); ?>