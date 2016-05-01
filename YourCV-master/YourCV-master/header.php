<?php
include "functions/url.php";
switch (url())
{
    case '/cvLocal/index.php':
         include "header/index_header.php";
        break;
    default:
        include "header/header.php";
        break;
}


?>
