
<?php 
    $pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); // get file name from url and strip extension
?>
<header class="site-header">
    <div class="container flex-container">
        <nav class="main-nav">
            <ul class="flex-container">
                <li><a class="<?php if($pg=='index'){?>active<?php }?>" href="../public/index.php">Pradžia</a></li>
                <li><a class="<?php if($pg=='produktai'){?>active<?php }?>" href="../public/produktai.php">Produktai</a></li>
                <li><a href="#">D.U.K.</a></li>
                <li><a href="#">Blog'as</a></li>
                <li><a class="<?php if($pg=='kontaktai'){?>active<?php }?>" href="../public/kontaktai.php">Kontaktai</a></li>
            </ul>
        </nav>
        <nav class="mobile-nav">
            <ul id="mMenu" class="flex-container">
                <li><a href="../public/index.php">Pradžia</a></li>
                <li><a href="../public/produktai.php">Produktai</a></li>
                <li><a href="#">D.U.K.</a></li>
                <li><a href="#">Blog'as</a></li>
                <li><a href="../public/kontaktai.php">Kontaktai</a></li>
            </ul>
            <a href="javascript:void(0);" class="icon" onclick="myMenu()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
        <div class="logo">
            <a href="../public/index.php"><img src="../app/images/logo.png" alt="logotipas"></a>
        </div>

    </div>
</header>

