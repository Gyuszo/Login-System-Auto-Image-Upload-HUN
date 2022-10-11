<?php require_once('header.php'); ?>
<?php
while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-3">
                <div class="card" style="padding: 5% ";>
                   <img  src="uploadss/images/' . $row['image'] . '" class="card-img-top" alt=' . $row['title'] . ' style=width="400px" height="325px">

                    <h5 class="card-title">' . $row['title'] . '</h5>
                    <p class="card-text">' . $row['description'] . '</p>
                    <a href="card.php?id=' .$row['id']  .'" class="btn btn-primary" >Mutass Többet</a>
                </div>
            </div>';
        }
        ?>
<?php require_once('footer.php'); ?>