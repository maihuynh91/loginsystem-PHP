<?php
    include_once "header.php"
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Signup</h2>
            <form class="signup-form" action="includes/signup.inc.php" method="POST" >
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="email" placeholder="E-mail"> 
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>

        <?php
            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if(strpos($fullUrl, "signup=empty") == true){
                echo " <p class='error'>You did not fill in all fields!</p>";
            }
            elseif(strpos($fullUrl, "signup=invalid") == true){
                echo " <p class='error'>You used invalid character </p>";
            }
            elseif(strpos($fullUrl, "signup=email") == true){
                echo " <p class='error'>You used invalid Email!</p>";
            }
            elseif(strpos($fullUrl, "signup=usertaken") == true){
                echo " <p class='error'>Email is already taken!</p>";
            }
            elseif(strpos($fullUrl, "signup=success") == true){
                echo " <p class='error'>Sign up successfully!</p>";
            }
        ?>
    </section>

<?php
    include_once "footer.php"
?>

