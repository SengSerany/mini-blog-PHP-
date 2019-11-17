<?php 
    include("_session.php");
?>

<!DOCTYPE html>

<html>
    
    <?php include("_head.php") ?>

    <body>

    <?php include("_header.php") ?>
    
    <div class="container">
    <?php
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=bdd_blog;charset=utf8','root', '');
            }
    
        catch (Exception $e)
            {
                die('Erreur: ' .$e->getMessage());
            }

        $post = $bdd->prepare('SELECT * FROM Posts WHERE id = :id');
        $post->execute(array(
            'id' => $_GET['id']
        ));
        $infos_post = $post->fetch()

    ?>
        <br />
        <h1>Article n°<?php echo $_GET['id']; ?></h1>
        <h5><?php echo $infos_post['title']; ?></h5><br />
        <p><?php echo $infos_post['body']; ?></p><br /><br /><br />

        <h4>Commentaires</h4>
        <form action="new_comment_controller.php" method="POST">
            <p><label>Ajouter un commentaire :</label><br/><input type="text" name="body" class="form-control" /></p>
            <input type="hidden" name="id_post" class="form-control" value="<?php echo $_GET['id'] ?>"/>
            <p><input type="submit" class="btn btn-secondary"/></p>
        </form>

        <?php
            $comments = $bdd->prepare('SELECT Users.username, Comments.body, Comments.created_at FROM Comments INNER JOIN Users ON Comments.id_user = Users.id WHERE id_post = :id');
            $comments ->execute(array(
                'id' => $_GET['id']
            ));
            while($comment = $comments->fetch())
                {
                    echo '<h6> Par <strong>' . $comment['username'] . '</strong> le <em>' . $comment['created_at'] . '</em></h6><p>' . $comment['body'] . '</p>';
                }
        ?>
    </div>
    
    <?php include("_footer.php") ?>

    </body>
</html>