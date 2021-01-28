<div class="content-section">
         <h1 class="dashboard-heading">Update Password.</h1>
         <div>
          <form method="POST" action="">
            <div class="group">
                <label for="cpassword" class="form--label">Current Password</label>
                <input
                  type="password"
                  name="currentPassword"
                  id="cpassword"
                  class="<?php if($validations->errors['currentPassword']): echo 'borderRed'; endif; ?> control"
                  placeholder="Current Password"
                  value = "<?php if($validations->setValue('currentPassword')): echo $validations->setValue('currentPassword'); endif; ?>"
                />
                <div class="error">
                    <?php if($validations->errors['currentPassword']): echo $validations->errors['currentPassword']; endif; ?>
                </div>
              </div>
              <!-- Close group -->

              <div class="group">
                <label for="npassword" class="form--label">New Password</label>
                <input
                  type="password"
                  name="newPassword"
                  id="npassword"
                  class="<?php if($validations->errors['newPassword']): echo 'borderRed'; endif; ?> control"
                  placeholder="New Password"
                  value = "<?php if($validations->setValue('newPassword')): echo $validations->setValue('newPassword'); endif; ?>"
                />
                <div class="error">
                    <?php if($validations->errors['newPassword']): echo $validations->errors['newPassword']; endif; ?>
                </div>
              </div>
              <!-- Close group -->

              <div class="group">
                <label for="npassword" class="form--label">Confirm Password</label>
                <input
                  type="password"
                  name="confirmPassword"
                  id="npassword"
                  class="<?php if($validations->errors['confirmPassword']): echo 'borderRed'; endif; ?> control"
                  placeholder="Confirm Password"
                  value = "<?php if($validations->setValue('confirmPassword')): echo $validations->setValue('confirmPassword'); endif; ?>"
                />
                <div class="error">
                    <?php if($validations->errors['confirmPassword']): echo $validations->errors['confirmPassword']; endif; ?>
                </div>
              </div>
              <!-- Close group -->
              <div class="group">
                <input
                  type="submit"
                  name="updatePasswordBtn"
                  class="btn btn-sweet"
                  value="Update Password"
                />
              </div>
              <!-- Close group -->
          </form>

         </div>
        </div>
         <!-- Close content-section -->