<?php

$link = mysql_connect("Matalistdb.cbhzd1fnevha.us-east-2.rds.amazonaws.com", "matalist", "csunmatalist");
$target_dir = "img/gallery";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
/*$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
    {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
    else 
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} */


//allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
{
	echo "Image needs to be JPG, JPEG, or PNG";
	$uploadOk = 0;
}

if ($uploadOK == 0)
{
	echo "Sorry, your file was not uploaded";
}
//if all checks out then uploads
else
{
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
	{
		echo "The file" . basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
	}
	else
	{
		echo "There was an error with uploading your file";
	}
}
mysql_close($link);
?>