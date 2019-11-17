<?php 
    include("_session.php");
?>

<!DOCTYPE html>

<html>
    
    <?php include("_head.php") ?>

    <body>

    <?php include("_header.php") ?>
    
    <div class="container">
        <h1>Profil de <?php echo $_SESSION['username']; ?></h1>
    </div>
    
    <?php include("_footer.php") ?>

    </body>
</html>