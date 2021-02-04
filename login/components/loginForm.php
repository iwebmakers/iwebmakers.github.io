<div id="form-section" class="form-section vertical-center">
       <div class="form--header">
       <h2 class="home__subtitle">Sign In to CodeCraks</h2>
       <p>Enter your details</p>
       </div>
       
       <!-- Close form--header -->
       <div class="form--body">
       <form action="" method="POST">
           <div class="group">
            <label for="email" class="form--label">Email</label>
            <input type="email" name="email" id="email" class="<?php if($validations->errors['email']): echo 'borderRed'; endif; ?> control" placeholder="Enter Email"
            value = "<?php if($validations->setValue('email')): echo $validations->setValue('email'); endif; ?>"
            />
            <div class="error">
                <?php if($validations->errors['email']): ?>
                <?php echo $validations->errors['email']; ?>
                <?php endif; ?>
            </div>
           </div>
           <!-- Close group -->
           <div class="group">
            <label for="password" class="form--label">Password
                <span class="forgotPassword">
                    <a href="requestPassword.php">Forgot password ? </a>
                </span>
            </label>
            <input type="password" name="password" id="password" class="<?php if($validations->errors['password']): echo 'borderRed'; endif; ?> control" placeholder="Enter Password"
            value = "<?php if($validations->setValue('password')): echo $validations->setValue('password'); endif; ?>"
            />
            <div class="error">
                <?php if($validations->errors['password']): ?>
                <?php echo $validations->errors['password']; ?>
                <?php endif; ?>
            </div>
           </div>
           <!-- Close group -->
           <div class="group">
            <input type="submit" name="loginBtn" class="btn btn-sweet" value="SIGN IN">
           </div>
            <span class="createAcc" href="">Don't Have an Account <a href="./index.php"> Create an Account</a></span>
           <!-- Close group -->
           
       </form>   
       
       <!-- Close form--body -->
       </div>
       
       <!-- Close form-section -->