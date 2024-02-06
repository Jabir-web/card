<?php

include "conn.php";

if (isset($_POST['cbtn'])) {
    $cardname=$_POST['ct'];
    $cardprice=$_POST['cp'];
    $carddescription=$_POST['cd'];

    $sql="INSERT INTO `card_entry` (`card_id`, `card_title`, `card_price`, `card_desc`, `card_date`) VALUES (NULL, '{$cardname}', '{$cardprice}', '{$carddescription}', current_timestamp());";

    if (mysqli_query($connection,$sql)) {
        header("Location: http://localhost/car/");
    }else{
        echo"Your Data Has not Been Inserted";

    }

}


?>