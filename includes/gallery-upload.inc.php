<?php
  session_start();

if (isset($_POST['submit'])) {
  $newFileName = "gallery";
  $imageTitle = $_POST['filetitle'];
  $tag = $_POST['tag'];
  $imageDesc = $_POST['filedesc'];
  $file = $_FILES['file'];
  $email = $_SESSION["email"];////////////////////
  $fileName = $file["name"];
  $fileType = $file["type"];
  $fileTempName = $file["tmp_name"];
  $fileError = $file["error"];
  $fileSize = $file["size"];
  $details = $_POST["details"];

  $fileExt = explode(".", $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array("jpg", "jpeg", "png");

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 2000000) {
        $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
        $fileDestination = "../img/" . $imageFullName;
        include_once "/spook/dbh.inc.php";

        if (empty($imageTitle) || empty($imageDesc)) {
          header("Location: ../gallery.php?upload=empty");
          exit();
        } else {
          $sql = "SELECT * FROM gallery;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);
            $setImageOrder = $rowCount + 1;

            $sql = "INSERT INTO gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery, users_email, tag, details) VALUES (?, ?, ?, ?, ?, ?, ?);";
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_bind_param($stmt, "sssssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder, $email, $tag, $details);
              mysqli_stmt_execute($stmt);

              move_uploaded_file($fileTempName, $fileDestination);

              header("Location: ../gallery.php?upload=success");
            }
          }
        }
      } else {
        echo "File size is too big!";
        exit();
      }
    } else {
      echo "You had an error!";
      exit();
    }
  } else {
    echo "You need to upload a proper file type!";
    exit();
  }

}
