<?php

include 'database.php';
$statusMsg = '';


$nev = mysqli_real_escape_string($connection, $_POST['nev']);
$leiras = mysqli_real_escape_string($connection, $_POST['leiras']);
$targetDir = "../uploads/images/";
$fileName = basename($_FILES["file"]["name"]);
$move = "../upload/images/".$_FILES['file']['name'];
$fileType = pathinfo($move, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');



    if (in_array($fileType, $allowTypes)) {

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $move)) 
        {
            $query = "INSERT INTO `cards` (`nev`, `leiras`,`kep`) VALUES (?,?,?);";
            $stmt = mysqli_stmt_init($connection);
            if (mysqli_stmt_prepare($stmt, $query) == false) {
                $statusMsg = "Rohadj meg";
            } 
            else {

                mysqli_stmt_bind_param($stmt, 'sss', $nev, $leiras, $fileName);
                mysqli_stmt_execute($stmt);

                header('location:../card_form.php');
            }
        } 
        else 
        {
            $statusMsg = "beszoptad mert mér felkur";
        }
    } else {
        $statusMsg = 'Bocsi, only JPG, JPEG, PNG, GIF';
    }
} else {
    $statusMsg = 'Bocsi, Kérlek Add meg újra a filet mivel nem találtuk az elérést';
}


echo $statusMsg;
