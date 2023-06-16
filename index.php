<?php

    if(isset($_GET['url'])){
        if(file_exists($url)){
            include($url.'.html');
        }else{
            include('404.html');
        }
    }else{
        include('home.html');
    }

    
    
    

?>
