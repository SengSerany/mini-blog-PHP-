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

    if ($_POST['title'] == '' || $_POST['body'] == '')
        {
            header('Location: new_articles.php');
        }

    elseif (isset($_POST['title']) && isset($_POST['body']))
        {
            $newPost = $bdd->prepare('INSERT INTO Posts(id_user, title, body) VALUES(:id_user, :title, :body)');
            $newPost->execute(array(
                'id_user' => strip_tags($_SESSION['id']),
                'title' => strip_tags($_POST['title']),
                'body' => strip_tags($_POST['body'])
            ));
            header('Location: blog.php');
        }
?>
