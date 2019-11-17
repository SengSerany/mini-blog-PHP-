<?php 
    include("_session.php");
    session_destroy();
    header('Location: blog.php');
?>