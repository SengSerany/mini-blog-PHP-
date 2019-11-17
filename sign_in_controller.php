<?php
    try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_blog;charset=utf8', 'root', '');
        }

    catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

        if ($_POST['username'] == "" || $_POST['password'] == "")
            {
                header('Location: sign_in.php');
            }
        
        elseif (isset($_POST['username']) && isset($_POST['password']))
            {
                $users = $bdd->prepare('SELECT * FROM Users WHERE username = :username AND password = :password');
                $users->execute(array(
                    'username' => strip_tags($_POST['username']),
                    'password' => strip_tags($_POST['password'])
                ));
                $nbRow = $users->rowCount();
                $userInfos = $users->fetch(PDO::FETCH_ASSOC);
                
                if ($nbRow == 1)
                    {
                        session_start();
                        $_SESSION['id'] = $userInfos['id'];
                        $_SESSION['username'] = $userInfos['username'];
                        $_SESSION['age'] = $userInfos['age'];
                        $_SESSION['city'] = $userInfos['city'];

                        header('Location: blog.php');
                    }
                else
                    {
                        header('Location: sign_in.php');
                    }

            }
?>