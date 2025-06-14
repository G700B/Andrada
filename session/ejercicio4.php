<?php

session_start();

if (isset($_SESSION['usuario'] )) {
    echo "esto es ultra secreto";
}
else{
header ('location:https://www.google.com');

}

