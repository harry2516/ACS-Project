<?php
include_once 'header.php';
include('Includes/dbh.inc.php')
?>
<body>



    <div class="container">
    <h1>
    Log Into Your Account
    </h1>
        <form action="login.php" method="post">
        <?php include('errors.php'); ?>
            <div class="form-input">
                

                <p class=form-input-data>Userrname</p>
                <input type="text" name="username">

                <p class=form-input-data>Password </p>
                <input type="text" name="password">

                <div class="form-terms">
            
                </div>

                <div class="input-group">
                <input id="create-account-button" class = "btn" type = "submit" name="login_user" value="Login">
                <p class="have-account">Not yet a member? <a class="navy-blue" href="signup.php">Sign up</a></p>
                
            

                
            </div>
        </form>


<?php
include_once 'footer.php';
?>