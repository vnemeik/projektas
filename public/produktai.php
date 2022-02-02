<?php
    require_once __DIR__ . '/../app/src/app-klientai.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andriaus bitutes | Produktai</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">
    
    <script src="https://kit.fontawesome.com/0d56679de6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
    function myMenu() {
        var x = document.getElementById("mMenu");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    };
    </script>
</head>

<body>
    <?php 
    include_once '../app/views/header.php';
    include_once '../app/views/products.php';
    include_once '../app/views/footer.php';
    
    ?>
    <script src="../app/js/karusele.js"></script>
    <srcipt src="../app/js/custom.js"></srcipt>
   
</body>

</html>