<?php
    
    require_once __DIR__ . '/../app/src/app-naujienos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andriaus bitutes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">
    <script src="https://kit.fontawesome.com/0d56679de6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="../app/js/custom.js"></script>
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
    include_once '../app/views/hero.php';
    include_once '../app/views/about.php';
    include_once '../app/views/testimonials.php';
    include_once '../app/views/naujienlaiskis.php';
    include_once '../app/views/footer.php';
    
    ?>
    <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script src="../app/js/karusele.js"></script>
   
   
</body>

</html>