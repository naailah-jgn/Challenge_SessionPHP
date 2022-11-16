<?php require 'inc/head.php'; 
 session_start();?>
<section class="cookies container-fluid">
    <div class="row">
        <ul> 
        TODO : Display shopping cart items from $_SESSION here.
        <li><?php 
        print_r($_SESSION['catalog']);
        
        ?></li>
        </ul> 
    </div>
</section>
<?php require 'inc/foot.php'; ?>
