<?php
   require "header.php" ;
?>
    <body>
    <main>
        <h1>Message</h1>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }
                else if ($_GET['error'] == "invaliduidmail") { 
                    echo '<p class="signuperror">Invalid username and e-mail!</p>';    
                }
                else if ($_GET['error'] == "invaliduid") { 
                    echo '<p class="signuperror">Invalid Username!</p>';    
                }
                else if ($_GET['error'] == "invalidmail") { 
                    echo '<p class="signuperror">Invalid e-mail!</p>';    
                }
                else if ($_GET['error'] == "usertaken") { 
                    echo '<p class="signuperror">Username is already taken!</p>';    
                }
            }
            else if ($_GET["signup"] == "success") {
                echo '<p class="signupsuccess">Message Sent!</P>';
            }
        ?>
        <form action="includes/contac.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="text" name="pwd" placeholder="Subject">
            <input type="text" name="pwd-repeat" placeholder="Message">
            <button type="submit" name="signup-submit">Send</button>
        </form>
    </main>
</body>