<?php
    try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_blog;charset=utf8', 'root', '');
        }

    catch (Exception $e)
        {
            die('Erreur: ' . $e->getMessage());
        }
    
        $posts = $bdd->prepare('SELECT * FROM Posts');
        $posts->execute();

        while ($list_posts = $posts->fetch())
            {
                echo '<a href=\'articles.php?id='. $list_posts['id'] .' \'><h5> Article n°' . $list_posts['id'] . ': ' . $list_posts['title'] . '</h5></a>';
            }
?>