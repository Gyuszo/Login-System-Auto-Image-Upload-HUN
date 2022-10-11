<?php
//elinditja a sessiont
session_start();
//database.php kapcsolása
require_once 'database.php';
//ellenörizzük hogy a gomb meg lett e nyomva
if (isset($_POST['submit'])) {
    //feltöltjük a változókat az elöző oldalrol kapott értékekkel 
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    // Adatbázis előkészités
    $query = "SELECT * FROM login WHERE email = '$email'";
    //adatbázis lekérdezés
    $result = mysqli_query($connection, $query);
    //megnézzük hogy van e bekért email cím az adat bázisban!
    if (mysqli_num_rows($result) != 1) {
        
    }
     else {
        //Ha van ilyen akkor feldaraboljuk az adatbázisból lekért sort 
        $user = mysqli_fetch_assoc($result);
        //ellenőrizük hogy a bekért jelszó eggyezik az adatbázisban lévővel de elötte decryptáljuk
        if (password_verify($password, $user['password']) == true) {
            
        //sessionba bele rakjuk user néven a $user-ben lévő adatokat!  
            $_SESSION['user'] = $user;
        //Vissza irányitunk a kezdőképernyőre    
            header('Location: ../index.php?loggedIn=true');
        } else {
          //ha nem eggyezik a jelszó
        }
    }
}
