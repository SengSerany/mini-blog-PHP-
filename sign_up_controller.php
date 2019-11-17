<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_blog;charset=utf8', 'root', '');

    if ($_POST['username'] == "" || $_POST['password'] == "" || $_POST['confirmPassword'] == "")
        {
            header('Location: sign_up.php');
        }
    
    elseif ($_POST['password'] != $_POST['confirmPassword'])
        {
            header('Location: sign_up.php');
        }

    elseif(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword']))
        {
            $request = $bdd->prepare('INSERT INTO Users(username, password, age, city) VALUES(:username, :password, :age, :city)');
            $request->execute(array(
                'username' => strip_tags($_POST['username']),
                'password' => strip_tags($_POST['password']),
                'age' => strip_tags($_POST['age']),
                'city' => strip_tags($_POST['city'])
            ));
            header('Location: sign_in.php');
        }

?>