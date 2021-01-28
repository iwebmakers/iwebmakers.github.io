<div class="form-section">
        <div class="form--header">
          <h2>Get started absolutely free</h2>
          <p>free forever. No cradit card needed</p>
        </div>
        <!-- Close form--header -->
        <div class="form--body">
          <form action="" method="POST">
            <div class="group">
              <label for="name" class="form--label">Full Name</label>
              <input
                type="text"
                name="fullName"
                id="name"
                class="<?php if($validations->errors['fullName']): echo 'borderRed'; endif; ?> control"
                placeholder="Name"
                value = "<?php if($validations->setValue('fullName')): echo $validations->setValue('fullName'); endif; ?>"
              />

              <div class="error">
                <?php if($validations->errors['fullName']): ?>
                <?php echo $validations->errors['fullName']; ?>
                <?php endif;?>
              </div>
             
            </div>
            <!-- Close group -->
            <div class="group">
              <label for="email" class="form--label">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="<?php if($validations->errors['email']): echo 'borderRed'; endif; ?> control"
                placeholder="Email"
                value = "<?php if($validations->setValue('email')): echo $validations->setValue('email'); endif; ?>"
              />
              <div class="error">
                <?php if($validations->errors['email']): ?>
                <?php echo $validations->errors['email']; ?>
                <?php endif;?>
              </div>
            </div>
            <!-- Close group -->
            <div class="group">
              <label for="password" class="form--label">Password</label>
              <input
                type="password"
                name="password"
                id="password"
                class="<?php if($validations->errors['password']): echo 'borderRed'; endif; ?> control"
                placeholder="New Password"
                value = "<?php if($validations->setValue('password')): echo $validations->setValue('password'); endif; ?>"
              />
              <div class="error">
                <?php if($validations->errors['password']): ?>
                <?php echo $validations->errors['password']; ?>
                <?php endif;?>
              </div>
            </div>
            <!-- Close group -->
            <div class="group">
              <input
                type="submit"
                name="signup"
                class="btn btn-sweet"
                value="Sign Up"
              />
            </div>
            <!-- Close group -->
          </form>
        </div>
        <!-- Close form--body -->
      </div>