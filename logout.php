<?php
    session_start(); 
    unset($_SESSION['USERNAME']);
    unset($_SESSION['PASSWORD']);
    ?>
    <div class='center'><?php
    echo '<meta http-equiv="refresh" content="2;url=index.php">';
    echo '<progress max=100><strong>Progress: 60%;
        done.</strong></progress><br>';
    echo '<span class="itext">Logging out please wait!...</span>';?>
    </div>
    

