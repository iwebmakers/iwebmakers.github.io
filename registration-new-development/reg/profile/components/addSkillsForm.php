<div class="content-section">
         <?php $profile->skillsHeading(); ?>
         <div>
          <form method="post" action="">
            <div class="group">
                <label for="skills" class="form--label">Add Skills</label>
                <input
                  type="text"
                  name="skills"
                  id="skills"
                  class="<?php if($validations->errors['skills']): echo 'borderRed'; endif; ?> control"
                  placeholder="PHP, NodeJS, ReactJS"
                  maxlength="50"
                  value = "<?php if($validations->setValue('skills')): echo $validations->setValue('skills');  else: echo $profile->fetchSkills(); endif;  ?>"
                />
                <div class="error">
                    <?php if($validations->errors['skills']): echo $validations->errors['skills']; endif; ?>
                </div>
              </div>
              <!-- Close group -->
              <div class="group">
                <input
                  type="submit"
                  name="skillsBtn"
                  class="btn btn-sweet"
                  value="Save Skills"
                />
              </div>
              <!-- Close group -->
          </form>
          <!-- Close form -->

         </div>
        </div>
         <!-- Close content-section -->