<?php

function Logout()
{
    session_start();
    session_destroy();
    header('location:connect.php');
    exit();
}

