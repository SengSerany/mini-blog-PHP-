<!DOCTYPE html>

<html>
    
    <?php include("_head.php") ?>

    <body>

    <?php include("_header.php") ?>
    
    <div class="container">
        <h1>Se connecter</h1>

        <form action="sign_in_controller.php" method="POST">
            <p><label>Username : <input type="text" name="username" /></label></p>
            <p><label>Mot de passe : <input type="text" name="password" /></label></p>
            <p><input type="submit" /></p>
        </form>

    </div>

    <?php include("_footer.php") ?>

    </body>
</html>