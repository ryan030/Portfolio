<?php
include('./include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="css1/cv.css">
    <style>
        * {

        }
    </style>
</head>
<body>
<button class="backbtn"><a href="index.php">Exit</a></button>
<div class="container">
<?php
global $con;

// Check if the ID is equal to 1
$id_condition = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_condition = " WHERE id = 1";
}

// Fetch image filename from the database
$select_image = "SELECT pic FROM cv" . $id_condition;
$result_image = mysqli_query($con, $select_image);
$row_data = mysqli_fetch_assoc($result_image);

if ($row_data) {
    $image_filename = $row_data['pic'];
    $src = './admin/img/' . $image_filename;
    if (file_exists($src)) {
        echo '<div class="image-container">';
        echo '<img src="'.$src.'" alt="Profile Picture">';
        echo '</div>';
    } else {
        echo "<p>Image not found.</p>";
    }
} else {
    echo "<p>No image found.</p>";
}
?>

 <?php
    global $con;
    $select_name = "SELECT names FROM cv WHERE id = 1";
    $result_name = mysqli_query($con, $select_name);
    $row_data = mysqli_fetch_assoc($result_name);
    if ($row_data) {
        $names = $row_data['names'];
        echo "<h1>$names</h1>";
    } else {
        echo "<p>No names found.</p>";
    }
?>
          <?php
    global $con;
    $select_email = "SELECT email FROM cv";
    $result_email = mysqli_query($con, $select_email);
    $row_data = mysqli_fetch_assoc($result_email);
    if ($row_data) {
        $email = $row_data['email'];
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>No email found.</p>";
    }
?>
            <?php
    global $con;
    $select_phone = "SELECT phone FROM cv";
    $result_phone = mysqli_query($con, $select_phone);
    $row_data = mysqli_fetch_assoc($result_phone);
    if ($row_data) {
        $phone = $row_data['phone'];
        echo "<p>Phone: +63 $phone</p>";
    } else {
        echo "<p>No phone found.</p>";
    }
?>
        

        <div class="section">
            <h2>Personal Information</h2>
            <?php
    global $con;
    $select_bday = "SELECT bday FROM cv";
    $result_bday = mysqli_query($con, $select_bday);
    $row_data = mysqli_fetch_assoc($result_bday);
    if ($row_data) {
        $bday = $row_data['bday'];
        echo "<p>Date of Birth: $bday</p>";
    } else {
        echo "<p>No bday found.</p>";
    }
?>
<?php
    global $con;
    $select_address = "SELECT address FROM cv";
    $result_address = mysqli_query($con, $select_address);
    $row_data = mysqli_fetch_assoc($result_address);
    if ($row_data) {
        $address = $row_data['address'];
        echo "<p>Address: $address</p>";
    } else {
        echo "<p>No address found.</p>";
    }
?>
            
            
        </div>

        <div class="section">
            <h2>Education</h2>
            <?php
    global $con;
    $select_educ1 = "SELECT educ1 FROM cv";
    $result_educ1 = mysqli_query($con, $select_educ1);
    $row_data = mysqli_fetch_assoc($result_educ1);
    if ($row_data) {
        $educ1 = $row_data['educ1'];
        echo "<p>$educ1</p>";
    } else {
        echo "<p>No educ1 found.</p>";
    }
?>
             <?php
    global $con;
    $select_educ2 = "SELECT educ2 FROM cv";
    $result_educ2 = mysqli_query($con, $select_educ2);
    $row_data = mysqli_fetch_assoc($result_educ2);
    if ($row_data) {
        $educ2 = $row_data['educ2'];
        echo "<p>$educ2</p>";
    } else {
        echo "<p>No educ2 found.</p>";
    }
?>

        </div>

        <div class="section">
            <h2>Work Experience</h2>
            <?php
    global $con;
    $select_position = "SELECT position FROM cv";
    $result_position = mysqli_query($con, $select_position);
    $row_data = mysqli_fetch_assoc($result_position);
    if ($row_data) {
        $position = $row_data['position'];
        echo "<p>Position: $position</p>";
    } else {
        echo "<p>No position found.</p>";
    }
?>
 <?php
    global $con;
    $select_company = "SELECT company FROM cv";
    $result_company = mysqli_query($con, $select_company);
    $row_data = mysqli_fetch_assoc($result_company);
    if ($row_data) {
        $company = $row_data['company'];
        echo "<p>$company</p>";
    } else {
        echo "<p>No company found.</p>";
    }
?>
 
           
        </div>

        <div class="section">
            <h2>Skills</h2>
            <ul style="list-style: none;">
            <?php
    global $con;
    $select_skills = "SELECT skills FROM cv where id = 1";
    $result_skills = mysqli_query($con, $select_skills);
    while($row_data = mysqli_fetch_assoc($result_skills)) {
        $skills = $row_data['skills'];
        if (!empty($skills)) {
        echo "<li>$skills</li>";
    } 
}
?>

                
            </ul>
        </div>

        <div class="section">
            <h2>Languages</h2>
            <?php
    global $con;
    $select_languages = "SELECT languages FROM cv";
    $result_languages = mysqli_query($con, $select_languages);
    while($row_data = mysqli_fetch_assoc($result_languages)) {
        $languages = $row_data['languages'];
        if (!empty($languages)) {
            echo "<li>$languages</li>";
        }
    } 
?>

            
            
        </div>

        <div class="section">
            <h2>Interests</h2>
            <?php
    global $con;
    $select_interest = "SELECT interest FROM cv";
    $result_interest = mysqli_query($con, $select_interest);
    while($row_data = mysqli_fetch_assoc($result_interest)) {
        $interest = $row_data['interest'];
        if (!empty($interest)) {
        echo "<li>$interest</li>";
    } 
}   
?>
            
        </div>

        <div style="list-style: none;" class="section">
            <h2>References</h2>
            <?php
    global $con;
    $select_reference = "SELECT reference FROM cv";
    $result_reference = mysqli_query($con, $select_reference);
    while($row_data = mysqli_fetch_assoc($result_reference)) {
        $reference = $row_data['reference'];
        if (!empty($reference)) {
        echo "<li>Adviser:$reference</li>";
    } 
}   
?>
            
        </div>
    </div>";






</body>
</html>
