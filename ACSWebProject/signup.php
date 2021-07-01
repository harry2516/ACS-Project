<?php
include_once 'header.php';
include('Includes/dbh.inc.php')
?>
<body>


    <div class="container">

    <h1>
        Create Your Account
    </h1>
        <form action="signup.php" method="post">
        <?php include('Includes/errors.php'); ?>
            <div class="form-input" >
                <p class=form-input-data>First name</p>
                <input type="text" name="name" >

                <p class=form-input-data>Last name</p>
                <input type="text" name="lastname" >

                <p class=form-input-data>Username</p>
                <input type="text" name="username"  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">

                <p class=form-input-data>Email</p>
                <input type="text" name="email" placeholder="abc@gmail.com" >

                <p class=form-input-data>Password (6 or more characters)</p>
                <input type="text" name="password_1" placeholder="Password..." >

                <p class=form-input-data>Repeat Password </p>
                <input type="text" name="password_2" placeholder="Repeat Password..." >

                <div class="form-terms">
                    <input type="checkbox" id="terms" name="terms"
                    required>
                    <label for="terms">
                        I agree to all <span class="navy-blue">Terms of Use</span> and <span class="navy-blue">Privacy Statement</span> 
                    </label>
                </div>

                <input id="create-account-button" name="submit" type="submit" value="Create account">
                
            

                
            </div>
        </form>

        
    <p class="have-account">Already have an account? <a class="navy-blue" href='login.php'>Log in</a></p>

    </div>

<?php
include_once 'footer.php';
?>