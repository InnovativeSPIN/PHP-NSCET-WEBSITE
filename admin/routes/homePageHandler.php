<?php require_once("../../resources/connection.php")?>

<!-- marquee Section Delete button-->
<?php

if(isset($_GET["marqueeDeleteButton"])){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='marquee'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = "content";

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    if(empty($originaldata)){
        $jsonString = str_replace("[", "{", str_replace("]", "}", json_encode($originaldata)));
    }
    else
    {
        $jsonString = json_encode($originaldata);
    }

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 1"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>

<!-- marquee Section Update button-->
<?php

    if(isset($_POST["marqueeButton"]) && $_POST["content"]){

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='marquee'"));
    $originaldata = json_decode($jsondata['content'],true);

    $content = $_POST["content"];

    $originaldata = [
        "content" => $content,
    ];

    $jsonString = json_encode($originaldata);
    
    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 1"; 

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;

    }
?>

<!-- Hero Section Add button-->
<?php
if (isset($_POST['heroButton'])) {

    $subHeading = $_POST['subHeading'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];
    $url = $_POST['url'];
    $btn = $_POST['btn'];
    
    if ($_FILES["image"]) {

    $path = dirname(__DIR__);
    $targetDirectory = $path. "\\media\\heroSection\\";

    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    $file = $_FILES["image"]; 
    $targetPath = $targetDirectory . basename($file["name"]); 

    // Check if the file was uploaded successfully

    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: File upload failed.";
    }
    }

    $image = "./media/heroSection/".basename($file["name"]);

    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='heroSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $data = [
        "subHeading" => $subHeading,
        "heading" => $heading,
        "paragraph" => $paragraph,
        "btn" => $btn,
        "image" => $image,
        "url" => $url
    ];

    array_push($originaldata, $data);

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 2"; // ID = 2

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    
    exit;
}
?>

<!-- Hero Section Delete button-->

<?php 

if(isset($_GET["heroDeleteButton"])){

    echo $_GET["key"];
    $jsondata = mysqli_fetch_array(mysqli_query($conn, "SELECT `content` FROM `home_page` WHERE `sectionName`='heroSection'"));
    $originaldata = json_decode($jsondata['content'],true);

    $key = (int)$_GET["key"];

    if (array_key_exists($key, $originaldata )) {
        unset($originaldata [$key]);
        $originaldata = array_values($originaldata ); // Re-index the array
        print_r($originaldata);
    } else {
        echo "Index not found in the array.";
    }

    $jsonString = json_encode($originaldata);

    // Prepare the update query with a parameter for content
    $sql = "UPDATE home_page SET content = ? WHERE id = 2"; // ID = 2

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $jsonString);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }

    header("Location: " . "../home.php");
    exit;
}
?>
