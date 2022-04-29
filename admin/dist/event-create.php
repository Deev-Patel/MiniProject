<html>
<head>
<link rel="stylesheet" href="styling.css">
</head>
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myimage"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// if( isset($_POST['myimage'])){

//     $file_name = $_FILES['file']['name'];
//     $file_type = $_FILES['file']['type'];
//     $file_size = $_FILES['file']['size'];
//     $file_tem_loc = $_FILES['file']['tmp_name'];
//     $file_store = "upload/".$file_name;

//     if(move_uploaded_file($file_tem_loc, $file_store)){

//         echo("Files are Uploaded");

//     }   

// };
echo "Hey";
 



// Check if image file is a actual image or fake image
if(isset($_POST["myimage"])) {
    $check = getimagesize($_FILES["myimage"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
        echo "<center>File is not an image.</center>";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "<center>Sorry, file already exists.</center>";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["myimage"]["size"] > 500000000) {
    echo "<center>Sorry, your file is too large.</center>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<center>Sorry, your file was not uploaded.</center>";

    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["myimage"]["tmp_name"], $target_file)) {
        echo "<center><i><h4>The file ". basename( $_FILES["myimage"]["name"]). " has been uploaded.</h4></i></center>";
    } else {
        echo "<center>Sorry, there was an error uploading your file.</font></center>";
    }
}

// * adding to database
if(isset($_POST['button'])) {
    $server = "localhost";

    $username = "root";

    $password = "";

    $con = mysqli_connect($server, $username, $password);
    //echo $con;


    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";
    
    $image = $target_dir . basename( $_FILES["myimage"]["name"]);
    $name = $_POST['name'];
    $info = $_POST['info'];
    $lang = $_POST['lang'];
    $tenth = $_POST['tenth'];
    $diploma = $_POST['diploma'];
    $skills = $_POST['skills'];
    $hobbies = $_POST['hobbies'];

    $sql = "INSERT INTO `deev`.`admin` (`image_dir`, `name`, `info`, `tenth`, `diploma`, `skills`, `hobbies`) VALUES ('$image', $name', '$info', '$tenth', '$diploma', '$skills', '$hobbies');";
    
echo $sql;
    // $sql = "INSERT INTO `deev`.`events` (`Event_Name`, `Event_Image`, `Start_Date`, `Start_Time`, `End_Date`, `End_Time`, `City`, `Address`, `Description`) VALUES ('$event_name', '$event_image', '$start_date', '$start_time', '$end_date', '$end_time', '$event_city', '$event_address', '$event_desc');";
    // echo $sql;
    //INSERT INTO `newform` (`Sno`, `name`, `age`, `gender`, `email`, `phone`, `info`, `date`) VALUES ('1', 'umang', '22', 'male', 'nmhiji@gh.com', '68789379348', 'hidh', '2022-03-22'); 
    if($con->query($sql) == true) {
        $insert = true;
    }
    $con->close();
    // echo "<center><h3>City Added Successfully</h3></center>";

    // sleep(5);

    // header("Location: index1.html");
}

?>

</body>
</html>
