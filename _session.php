<?php
    if(session_id() == '' || !isset($_SESSION))
        {
            session_start();

            if(isset($_COOKIE['id']) && $_COOKIE['id'] != $_SESSION['id'])
            {
                setcookie('id', $_SESSION['id'], time() + 365*24*3600, null, null, false, true);
                setcookie('username', $_SESSION['username'], time() + 365*24*3600, null, null, false, true);
                setcookie('age', $_SESSION['age'], time() + 365*24*3600, null, null, false, true);
                setcookie('city', $_SESSION['city'], time() + 365*24*3600, null, null, false, true);
            }
        }
?>