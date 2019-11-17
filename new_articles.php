<?php 
    include("_session.php");

    if(!isset($_SESSION['id']))
        {
            header('Location: sign_in.php');
        }
?>

<!DOCTYPE html>

<html>
    
    <?php include("_head.php"); ?>

    <body>

    <?php include("_header.php"); ?>
    
    <div class="container">
        <h1>Créer un article</h1>

        <form action="new_article_controller.php" method="POST">
            <p><label>Title : <input type="text" name="title" /></label></p>
            <p><label>Your article : <input type="text" name="body" /></label></p>
            <p><input type="submit" /></p>
        </form>

    </div>
    
    <?php include("_footer.php"); ?>

    </body>
</html>