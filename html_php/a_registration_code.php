
<?php
require_once('connection.php');
      
      if(isset($_POST['submit'])){
         
         $artist_name = $_POST['artist_name'];
         $dob=$_POST['dob'];
          $gender = $_POST['gender'];
           $birthplace = $_POST['birthplace'];
            $education = $_POST['education'];
             $contact = $_POST['contact'];
             $email = $_POST['email'];
             $pwd = $_POST['password'];
             $password = MD5($pwd);
           

                $files = $_FILES['file'];

               
                        

            $filename = $files['name'];
            $fileerror = $files['error'];
            $filetmp = $files['tmp_name'];

            $fileext = explode('.', $filename);
            $filecheck = strtolower(end($fileext));

        $fileextstored = array('png','jpg','jpeg');

        if(in_array($filecheck,$fileextstored)){

      $destinationfile = 'upload/'.$filename;
     move_uploaded_file($filetmp,$destinationfile);

    $q= "INSERT INTO `artists`(`artist_name`,`dob`, `gender`, `birthplace`, `education`, `contact`, `artist_img`,`email`, `password`) 
        VALUES ('$artist_name','$dob','$gender','$birthplace','$education','$contact','$destinationfile','$email','$password')";

    $query = mysqli_query($conn,$q);
        }
    }

if($query)
{
	header("Location: login2.php");
}
else
{
	echo "Error :".$q;
}

?>