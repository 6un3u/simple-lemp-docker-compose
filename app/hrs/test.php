<?php

    // this won't work in reality as header() isn't vulnerable
    header("Set-Cookie: c=" . $_GET["c"] . ";");
    header("Set-Coookie: s=" . $secret . "; HttpOnly");

    echo "Welcome to this page!";

?>
