<?php 
    include("_session.php");
?>

<!DOCTYPE html>

<html>
    
    <?php include("_head.php") ?>

    <body>

    <?php include("_header.php") ?>
    
    <div class="container">
        <h1>Mini blog !</h1>
        <a href="new_articles.php" class="btn btn-secondary">Créer un article</a><br/><br/>
        <br/><h3>Les articles</h3><br/>
        <?php include("_posts_list.php") ?>
    </div>

    <?php include("_footer.php") ?>

    </body>
</html>