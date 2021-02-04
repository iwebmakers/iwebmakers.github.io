<?php

class profile extends dbQueries {

   
    public function setting(){
        
        $userId = $_SESSION['userId'];
        if($this->Query("SELECT * FROM users WHERE id = ?", [$userId])){

            $row = $this->fetch();
            $image = $row->image;
            $job   = $row->job;
            $skills = $row->skills;
            $bio = $row->bio;

            if(empty($image)){
                echo '<span class="btn-section"><a href="uploadImage.php" class="btn-white">Add Picture <span class="icon">&#43;</span></a></span>';
            } else {
                echo '<span class="btn-section"><a href="uploadImage.php" class="btn-white">Update Picture <span class="icon">&rarr;</span></a></span>';
            }

            if(empty($job)){
                echo '<span class="btn-section"><a href="addJob.php" class="btn-white">Add Job <span class="icon">&#43;</span></a></span>';
            } else {
                echo '<span class="btn-section"><a href="addJob.php" class="btn-white">Update Job <span class="icon">&rarr;</span></a></span>';
            }

            if(empty($skills)){
                echo '<span class="btn-section"><a href="addSkills.php" class="btn-white">Add Skills <span class="icon">&#43;</span></a></span>';
            } else {
                echo '<span class="btn-section"><a href="addSkills.php" class="btn-white">Update Skills <span class="icon">&rarr;</span></a></span>';
            }

            if(empty($bio)){
                echo '<span class="btn-section"><a href="addBio.php" class="btn-white">Add Bio <span class="icon">&#43;</span></a></span>';
            } else {
                echo '<span class="btn-section"><a href="addBio.php" class="btn-white">Update Bio <span class="icon">&rarr;</span></a></span>';
            }

            echo '<span class="btn-section"><a href="updateName.php" class="btn-white">Update Name <span class="icon">&rarr;</span></a></span>';

            echo '<span class="btn-section"><a href="updatePassword.php" class="btn-white">Update Password <span class="icon">&rarr;</span></a></span>';



            

        }

    }

    public function imageHeading(){

        $userId = $_SESSION['userId'];
        if($this->Query("SELECT image FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $imageColumn = $row->image;
            if(empty($imageColumn)){
                echo '<h1 class="dashboard-heading">Add Picture.</h1>';
            } else {
                echo '<h1 class="dashboard-heading">Update Picture.</h1>';
            }

        }

    }

    public function showImage(){

        $userId = $_SESSION['userId'];

        if($this->Query("SELECT fullName, image FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $fullName = ucwords($row->fullName);
            $image    = $row->image;
            if(!empty($image)){
               
                echo ' <div class="card--image">
                <img src="assets/images/'. $image .'" alt="">
              </div>';

            } else {
                
                $fullName = explode(" ", $fullName);
                $twoCharacters = '';
                foreach($fullName as $key => $value):

                    if($key == 2):

                        break;
                        else :
                        $twoCharacters .= $value[0];
                        endif;

                endforeach;
                echo '<div class="card--image">
                  <span class="avator">'. $twoCharacters .'</span>
                </div>';

            }


        }

    }

    public function fullName(){

         $userId = $_SESSION['userId'];
         if($this->Query("SELECT fullName FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $fullName = ucwords($row->fullName);
            return $fullName;

         }

    }

    public function jobHeading(){

        $userId = $_SESSION['userId'];
        if($this->Query("SELECT job FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $job = $row->job;
            if(empty($job)){
                echo '<h1 class="dashboard-heading">Add Job.</h1>';
            } else {
                echo '<h1 class="dashboard-heading">Update Job.</h1>';
            }

        }
    }

    public function fetchJob(){

        $userId = $_SESSION['userId'];
        if($this->Query("SELECT job FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $job = ucwords($row->job);
            return $job;

        }

    }

    public function skillsHeading(){

        $userId = $_SESSION['userId'];
        if($this->Query("SELECT skills FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $skills = $row->skills;
            if(empty($skills)){
                echo '<h1 class="dashboard-heading">Add Skills.</h1>';
            } else {
                echo '<h1 class="dashboard-heading">Update Skills.</h1>';
            }

        }

    }

    public function fetchSkills(){
        $userId = $_SESSION['userId'];
        if($this->Query("SELECT skills FROM users WHERE id = ? ", [$userId])){
            $row = $this->fetch();
            $skills = $row->skills;
            return $skills;
        }
    }

    public function showSkills(){

        $userId = $_SESSION['userId'];
        if($this->Query("SELECT skills FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $skills = $row->skills;
            $skills = explode(",", $skills);
            foreach($skills as $skillsValue):
                if(!empty($skillsValue)):
              echo '<span class="skill">'. $skillsValue .'</span>';
                endif;
            endforeach;

        }

    }

    public function bioHeading(){

        $userId = $_SESSION['userId'];
        if($this->Query("SELECT bio FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $bio = $row->bio;
            if(empty($bio)){
                echo '<h1 class="dashboard-heading">Add Bio.</h1>';
            } else {
                echo '<h1 class="dashboard-heading">Update Bio.</h1>';
            }

        }

    }

    public function fetchBio(){
        $userId = $_SESSION['userId'];
        if($this->Query("SELECT bio FROM users WHERE id = ? ", [$userId])){

            $row = $this->fetch();
            $bio = $row->bio;
            return $bio;

        }
    }

}


?>