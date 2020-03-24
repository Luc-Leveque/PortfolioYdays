<?php

if (!isset($_GET['page']) || $_GET['page'] == "")
{
    $page = "accueil";
}
else
{
    if (!file_exists("src/Controller/" . $_GET['page'] . ".php"))
    {
        $page = "404";
    }
    else
    {
        $page = $_GET['page'];
    }
}

require('includes/config.php');


require "src/Controller/" . $page . ".php";

?>