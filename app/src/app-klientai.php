<?php 
    if(isset($_POST['submit'])) {
        $vardas = trim($_POST['vardas']);
        $tel = trim($_POST['tel']);
        $message = trim($_POST['message']);
    
        if(!empty($vardas) && !empty($tel) && !empty($message)) {
            if(filter_var($tel, FILTER_SANITIZE_NUMBER_INT)) {
                include_once 'db-klientai.php';
                $from = "$tel";
                $to = "viktorijanemeiksiene@yahoo.com";
                $subject = "Nauja žinutė";
                $autorius = 'Nuo:' . $vardas . ', ' . $tel;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $autorius, $zinute, $from);
                echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime.');</script>";
            }
             
        }
    }


