<div class="card">
      <?php $profile->showImage(); ?>
       <!-- Close card--image -->
       <div class="card--name">
           <p><?php echo $profile->fullName(); ?></p>
       </div>
       <!-- Close card--name -->
       <div class="card--job">
       <p><?php echo $profile->fetchJob(); ?></p>
       </div>
       <!-- Close card--job -->
       <div class="card--skills">
          <?php $profile->showSkills(); ?>
       </div>
       <!-- Close card--skills -->
       <div class="card--intro">
        <p><?php echo $profile->fetchBio(); ?></p>
       </div>
       <!-- Close card--intro -->
       <div class="card--setting">
       <a href="dashboard.php" class="btn btn-card">Setting <span class="icon">&rarr;</span></a>
       </div>
       <!-- Close card--setting -->
       </div>
       <!-- Close card -->