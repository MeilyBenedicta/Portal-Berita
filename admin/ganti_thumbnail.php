<?php require"admin_c.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
    $a = $_GET['a'];
    
    $t2 = "img/";
    $thumbnail = $t2 . basename($_FILES["fileToUpload"]["name"]);

    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && 
       $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF" )

    {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            
          $inputartikel="UPDATE artikel SET thumbnail='$thumbnail' WHERE id_artikel='$a'";
          $hasilartikel = mysqli_query($koneksi,$inputartikel);

          if($hasilartikel)
          {
             header("location: edit_artikel.php?a=$a#tothumbnail");
         }
         else
         {
          echo "ERROR";
      }
      
      
  } else {
    echo "Sorry, there was an error uploading your file.";
}
}



}
?>