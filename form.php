<?php
    $server = "localhost";
    $fName = "fName";
    $lName = "lName";
    $email = "email";
    $address = "address";
    $dbname = "data_collection";

    $a = mysqli_connect ($server, $fName, $lname, $email, $address, $dbname);

    if (isset ($_POST ['submit'])) {
        if (!empty ($_POST ['fName']) && !empty ($_POST ['lName']) && !empty ($_POST ['email']) && !empty ($_POST ['address'])) {
            $fName = $_POST ['fName'];
            $lName = $_POST ['lName'];
            $email = $_POST ['email'];
            $address = $_POST ['address'];

            $b = "data_collection into persnal (fName, lName, email, address) value ('$fName', '$lName', '$email', '$address',)";

            $c = mysqli_b ($a, $b) or die (mysqli_error ()); 

            if ($c) {
                echo "Form submitted successfully"
            } 
            else {
                echo "Form not submitted";
            }
            
        }else {
            echo "ZONKE FEILDS ARE REQUIRED FAM!!!" ; 
        }
    }


?>