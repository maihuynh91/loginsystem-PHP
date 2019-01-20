<?php
   include_once "header.php"
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Home</h2>
            <p>This is the login system project!</p>
            <?php
                if(isset($_SESSION['u_id'])) {
                    echo "You are loged in :) ";
                }
            ?>
        </div>
    </section>

<?php
    include_once "footer.php"
?>

