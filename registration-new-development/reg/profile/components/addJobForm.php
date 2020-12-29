<div class="content-section">
         <?php $profile->jobHeading(); ?>
         <div>
          <form method="POST" action="">
            <div class="group">
                <label for="job" class="form--label">Add Job</label>
                <input
                  type="text"
                  name="addJob"
                  id="job"
                  class="<?php if($validations->errors['addJob']): echo 'borderRed'; endif; ?> control"
                  placeholder="Add Job"
                  maxlength="25"
                  value = "<?php if($validations->setValue('addJob')): echo $validations->setValue('addJob'); else: echo $profile->fetchJob(); endif; ?>"
                />
                <div class="error">
                    <?php if($validations->errors['addJob']): echo $validations->errors['addJob']; endif; ?>
                </div>
              </div>
              <!-- Close group -->
              <div class="group">
                <input
                  type="submit"
                  name="addJobBtn"
                  class="btn btn-sweet"
                  value="Save"
                />
              </div>
              <!-- Close group -->
          </form>

         </div>
        </div>
         <!-- Close content-section -->