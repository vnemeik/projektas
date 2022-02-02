<?php

if(isset($_POST['submit1'])) {
        $vardas1 = trim($_POST['vardas1']);
        $email = trim($_POST['email']);
        $check = trim($_POST['check']);
    
        if(!empty($vardas1) && !empty($email) && !empty($check)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                include_once 'db-naujienos.php';
                $from = "$email";
                $to = "viktorijanemeiksiene@yahoo.com";
                $subject = "Nauja prenumerata";
                $autorius = 'Nuo:' . $vardas1 . ', ' . $email;
                mail($to, $subject, $autorius, $from);
                echo "<script>alert('Dėkojame! Laukite naujienų!');</script>";
            }
             
        }
    }