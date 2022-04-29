<?php
include_once 'config.php';
if(isset($_POST['submit']))

{    
    
        $iamge = rand(10000,9999999).$_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];   
     $folder = getcwd()."/myimage/".$iamge;
    
     if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
      
        
        
        
   
     $name = $_POST['name'];
     $about = $_POST['about'];
     $language = $_POST['language'];
     $ten_10 = $_POST['ten_10'];
     $diploma = $_POST['diploma'];
     $skills = $_POST['skills'];
     $hobby = $_POST['hobby'];
	 
	 
     $sql = "INSERT INTO myusers (image,name,about,language,ten_10,diploma,skills,hobby)
     VALUES ('$iamge','$name','$about','$language','$ten_10','$diploma','$skills','$hobby')";
     
     if (mysqli_query($conn, $sql)) {
         
         //header("location:https://webcreaters.com/dev/myphp/index2.php");
         
echo "New record has been added successfully !";
		?>
		
		<script type="text/javascript">
window.location = "http://localhost/myphp/index2.php";
</script>
		
		<?php
		
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     
     
     mysqli_close($conn);
}
?>