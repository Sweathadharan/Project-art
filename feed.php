
    <?php
         $conn = mysqli_connect("localhost", "root", "", "ecom_store");
         
         // Check connection
         if($conn === false){
             die("ERROR: Could not connect. "
                 . mysqli_connect_error());
         }
          
         
         $first_name =  $_POST['firstname'];
         $last_name = $_POST['lastname'];
         $email = $_POST['mailid'];
         $art_name = $_POST['art_name'];
         $artist_name = $_POST['artist_name'];
         $art_category = $_POST['art_category'];
         $art_id = $_POST['art_id'];
         $sql = "INSERT INTO `certificate` (`first_name`, `last_name`, `email`, `art_name`, `artist_name`, `art_cat`, `art_id`) VALUES ('$first_name', '$last_name', '$email', '$art_name', '$artist_name', '$art_category', NULL)";
      
     if(mysqli_query($conn, $sql)){
         echo "<h3>data stored in a database successfully."
             . " Please browse your localhost php my admin"
             . " to view the updated data</h3>";

         echo nl2br("\n$first_name\n $last_name\n "
             . "$email");
     } else{
         echo "ERROR: Hush! Sorry $sql. "
             . mysqli_error($conn);
     }
      
     // Close connection
     mysqli_close($conn);
    ?>