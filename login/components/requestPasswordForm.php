<div class="form-section">
       <div class="form--header">
       <h2>Forgot Your Password ?</h2>
       <p>Enter your email address below and we'll get you back on track.</p>
       </div>
       <!-- Close form--header -->
       <div class="form--body">
       <form action="" method="post">
           <div class="group">
            <label for="email" class="form--label">Email Address</label>
            <input type="email" name="email" id="email" class="<?php if($validations->errors['email']): echo 'borderRed'; endif;?> control" placeholder="Email"
            value = "<?php if($validations->setValue('email')): echo $validations->setValue('email'); endif; ?>"
            >
            <div class="error">
                <?php if($validations->errors['email']):
                    
                    echo $validations->errors['email'];

                endif;?>
            </div>
           </div>
           <!-- Close group -->
           <div class="group">
            <input type="submit" name="requestPassword" class="btn btn-sweet" value="Request Reset Link">
           </div>
           <!-- Close group -->
       </form>
       </div>
       <!-- Close form--body -->
       </div>
       <!-- Close form-section -->