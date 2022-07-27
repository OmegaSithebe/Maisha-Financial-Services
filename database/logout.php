<?php 
    session_start();

    //remove data out
    session_unset();

    //destroy  
    session_destroy();
?>