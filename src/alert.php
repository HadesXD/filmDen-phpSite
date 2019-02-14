<?php

if (isset($_SESSION['alert']) )
{
    $message = $_SESSION['alert'];
    
    if( count($message) > 0 ) 
    {    
        for($i = 0; $i < count($message); $i ++) 
        {
            ?>
            <p class="alert">
                <?php echo $message[$i]; ?>
            </p>     
            <?php
        }
        $_SESSION['alert'] = [];
    } 
}

