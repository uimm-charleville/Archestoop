<?php
    session_start();
    session_destroy();
    header("Location: /archestop/index.php");
    ?>