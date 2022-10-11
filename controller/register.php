<?php
require ('database.php');
//ellenörizük hogy megnyomta-e a gombot.
if (isset($_POST['submit'])) {
    //Lekérjük Az Adatokat :)
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $repeat_password = mysqli_real_escape_string($connection, $_POST['repeat_password']);
    //lekérjük az adatotak az adatbázisból
    $check_query = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($connection, $check_query);
    //statementet előkészitjük
    $query = "INSERT INTO `login` (`email`, `password`) VALUES (?,?);";
    $stmt = mysqli_stmt_init($connection);
    //ellenörzés hogy minden megy-e
    if (empty($email) || empty($password)) {
    echo 'Empty input'; }
    //ellenörizzuk hogy foglalt-e az email az alapján hogy lekérdeztük az adatbázisból a táblázat sorait ahol az email=email
    else if (mysqli_num_rows($result) > 0) {
    echo 'The email is already in use';    } 
    //ellenőrizzük hogy a jelszó eggyezik e az újra bekért jelszóval!
    else if ($password != $repeat_password) {
    echo "Passwords Dosen't Match";
    } 
    else {
        //ha ezek közül eggyik se teljesűl akkor hasheljük a jelszót
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        //ellenőrizük hogy a statement képes e kapcsolatot létesíteni a szerverrel
        if (mysqli_stmt_prepare($stmt, $query) == false) 
        {}       
        else {
            //Feltölti az adatbázisba az adatokat
            mysqli_stmt_bind_param($stmt, 'ss', $email, $hash_password);
            mysqli_stmt_execute($stmt);
            //Vissza visz az oldarra
            header('location:../login_form.php');
        }
    }
} 
