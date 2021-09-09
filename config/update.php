<?php require "db.php"; ?>
<?php

// Get type from header
$type = $_GET['type'];
$urlId = $_GET['id'];
$urlImage = $_GET['img'];

if ($conn) {

    if (isset($_POST["update"])) {

        switch ($type) {
            case "article":

                function slugify($text, $divider)
                {
                    // replace non letter or digits by divider
                    $text = preg_replace('/\s+/', $divider, $text);
                    // remove unwanted characters
                    $text = preg_replace('~[^-\w]+~', '', $text);
                    // transliterate
                    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                    // trim
                    $text = trim($text, $divider);
                    // remove duplicate divider
                    $text = preg_replace('~-+~', $divider, $text);
                    // lowercase
                    $text = strtolower($text);
                    if (empty($text)) {
                        return 'n-a';
                    }
                    return $text;
                }

                $slug=slugify(test_input($_POST["arTitle"]), '-');
                
                // Update DataBase
                $title = test_input($_POST["arTitle"]);
                $visibletitle = test_input($_POST["arVisibletitle"]);
                $description = $_POST["arDescription"];
                $content = $_POST["arContent"];
                $categorie = test_input($_POST["arCategory"]);
                $author = test_input($_POST["arAuthor"]);
                $imageName = test_input($_FILES["arImage"]["name"]);
                $keyword = test_input($_POST["arKeyword"]);

                // Upload Image
                if ($_FILES["arImage"]['error'] === 0) {
                    uploadImage2("arImage", "../img/article/");
                } else {
                    $imageName = $urlImage;
                }

                try {
                    $sql = "UPDATE `article`
                        SET `article_title`= ?, `article_visibletitle`=?, `article_description`= ?, `article_content`= ?, `article_image`=?, `article_keyword`=?, `article_slug`=?, `id_categorie`=?, `id_author`= ?
                        WHERE `article_id` = ?";

                    $stmt = $conn->prepare($sql);

                    $stmt->execute([$title, $visibletitle, $description, $content, $imageName, $keyword, $slug, $categorie, $author, $urlId]);

                    // echo a message to say the UPDATE succeeded
                    echo "Article UPDATED successfully";
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                header("Location: ../dasbor.php", true, 301);
                exit;
                break;

            case "category":

                // Update DataBase
                $name = test_input($_POST["catName"]);
                $color = test_input($_POST["catColor"]);

                try {

                    $sql = "UPDATE `category`
                        SET `category_name`= ?,`category_color`=?
                        WHERE `category_id` = ?";

                    $stmt = $conn->prepare($sql);

                    $stmt->execute([$name, $color, $urlId]);

                    // echo a message to say the UPDATE succeeded
                    echo "Category UPDATED successfully";
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                // Go to show.php
                // header("refresh:1; url=../allCategories.php");
                header("Location: ../categories.php", true, 301);
                exit;

                break;
            case "author":
                // Update DataBase
                $fullName = test_input($_POST["authName"]);

                try {
                    $sql = "UPDATE `author`
                        SET `author_fullname`= ?
                        WHERE `author_id` = ?";

                    $stmt = $conn->prepare($sql);

                    $stmt->execute([$fullName, $urlId]);

                    // echo a message to say the UPDATE succeeded
                    echo "author UPDATED successfully";
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                // Go to show.php
                header("Location: ../author.php", true, 301);
                exit;
                break;

            default:
                break;
        }
    }
} else {
    echo 'Error: ' . $e->getMessage();
}

function uploadImage2($name, $dest)
{

    $target_dir = $dest;
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES[$name]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES[$name]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES[$name]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
