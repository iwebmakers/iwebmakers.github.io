<?php if(isset($_SESSION['imageUploaded'])): ?>

<div class="alert alert-success">
            <div class="alert-heading">
            <span class="alert-icon">&check;</span>
            <span class="alert-heading-text"><strong>Success</strong></span>
            </div>
            <!-- Close alert-heading -->
            <div class="alert-body">'
            <?php echo $_SESSION['imageUploaded']; ?>
            </div>
            <!-- Close alert-body -->
           </div>
           <!-- Close alert -->

<?php endif; unset($_SESSION['imageUploaded']); ?>

<!-- Name has been updated -->
<?php if(isset($_SESSION['nameUpdated'])): ?>

<div class="alert alert-success">
            <div class="alert-heading">
            <span class="alert-icon">&check;</span>
            <span class="alert-heading-text"><strong>Success</strong></span>
            </div>
            <!-- Close alert-heading -->
            <div class="alert-body">'
            <?php echo $_SESSION['nameUpdated']; ?>
            </div>
            <!-- Close alert-body -->
           </div>
           <!-- Close alert -->

<?php endif; unset($_SESSION['nameUpdated']); ?>

<!-- Job has been added/updated  -->
<?php if(isset($_SESSION['jobAdded'])): ?>

<div class="alert alert-success">
            <div class="alert-heading">
            <span class="alert-icon">&check;</span>
            <span class="alert-heading-text"><strong>Success</strong></span>
            </div>
            <!-- Close alert-heading -->
            <div class="alert-body">'
            <?php echo $_SESSION['jobAdded']; ?>
            </div>
            <!-- Close alert-body -->
           </div>
           <!-- Close alert -->

<?php endif; unset($_SESSION['jobAdded']); ?>

<!-- Skills added/updated -->
<?php if(isset($_SESSION['skillsSaved'])): ?>

<div class="alert alert-success">
            <div class="alert-heading">
            <span class="alert-icon">&check;</span>
            <span class="alert-heading-text"><strong>Success</strong></span>
            </div>
            <!-- Close alert-heading -->
            <div class="alert-body">'
            <?php echo $_SESSION['skillsSaved']; ?>
            </div>
            <!-- Close alert-body -->
           </div>
           <!-- Close alert -->

<?php endif; unset($_SESSION['skillsSaved']); ?>

<?php if(isset($_SESSION['bioSaved'])): ?>

<div class="alert alert-success">
            <div class="alert-heading">
            <span class="alert-icon">&check;</span>
            <span class="alert-heading-text"><strong>Success</strong></span>
            </div>
            <!-- Close alert-heading -->
            <div class="alert-body">
            <?php echo $_SESSION['bioSaved']; ?>
            </div>
            <!-- Close alert-body -->
           </div>
           <!-- Close alert -->

<?php endif; unset($_SESSION['bioSaved']); ?>

<!-- Password has been updated -->

<?php if(isset($_SESSION['newPasswordUpdated'])): ?>

<div class="alert alert-success">
            <div class="alert-heading">
            <span class="alert-icon">&check;</span>
            <span class="alert-heading-text"><strong>Success</strong></span>
            </div>
            <!-- Close alert-heading -->
            <div class="alert-body">
            <?php echo $_SESSION['newPasswordUpdated']; ?>
            </div>
            <!-- Close alert-body -->
           </div>
           <!-- Close alert -->

<?php endif; unset($_SESSION['newPasswordUpdated']); ?>
