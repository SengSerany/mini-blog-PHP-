<?php
    include("_session.php");
    
    try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_blog;charset=utf8','root', '');
        }

    catch (Exception $e)
        {
            die('Erreur: ' .$e->getMessage());
        }
    
    if ($_POST['body'] == '')
        {
            header('Location: articles.php');
        }

    elseif (isset($_POST['body']))
        {
            $newPost = $bdd->prepare('INSERT INTO Comments(id_user, id_post, body) VALUES(:id_user, :id_post, :body)');
            $newPost->execute(array(
                'id_user' => (int)$_SESSION['id'],
                'id_post' => (int)$_POST['id_post'],
                'body' => strip_tags($_POST['body'])
            ));
            header('Location: articles.php?id=' . $_POST['id_post']);
        }
?>