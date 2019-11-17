<!DOCTYPE html>

<html>
    
    <?php include("_head.php") ?>

    <body>

    <?php include("_header.php") ?>
    
    <div class="container">
        <h1>S'inscrire</h1>

        <form action="sign_up_controller.php" method="POST">
            <p><label>Username : <input type="text" name="username" /></label></p>
            <p><label>Age : <input type="number" name="age" /></label></p>
            <p><label>Ville de naissance : <input type="text" name="city" /></label></p>
            <p><label>Mot de passe : <input type="text" name="password" /></label></p>
            <p><label>Confirmation de mot de passe : <input type="text" name="confirmPassword" /></label></p>
            <p><input type="submit" /></p>
        </form>

    </div>

    <?php include("_footer.php") ?>

    </body>
</html>