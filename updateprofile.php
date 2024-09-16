<?php
// Include the database connection file
include 'config.php';

// Start the session to access session variables
session_start();

// Check if the form was submitted to update the profile picture
if(isset($_POST['update_picture'])) {
    // Check if a file was uploaded without errors
    if(isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === 0) {
        $file_name = $_FILES['profile_image']['name'];
        $file_tmp = $_FILES['profile_image']['tmp_name'];

        // Move the uploaded file to the desired location (assuming 'images' directory)
        move_uploaded_file($file_tmp, "images/" . $file_name);

        // Update the user's profile picture in the database
        $username = $_SESSION['username'];
        $update_query = "UPDATE users SET image='$file_name' WHERE username='$username'";
        $result = mysqli_query($conn, $update_query);

        if($result) {
            // Profile picture updated successfully
            // Redirect back to the profile page with a success message
            header('Location: myprofile.php?update_picture=success');
            exit();
        } else {
            // Failed to update profile picture
            // Redirect back to the profile page with an error message
            header('Location: myprofile.php?update_picture=error');
            exit();
        }
    }
}

// Fetch user information from the database
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$name = $row['username'];
$email = $row['email'];
$mblno = $row['mblno'];
$dlno = $row['dl_no'];
$date = $row['date'];
$image = $row['image'];

// Set a default profile image if the user has not uploaded any
if(empty($image)) {
    $default_image = "images/home/logouser.png"; // Change this to the filename of your default image
    $image_path = "images/" . $default_image;
} else {
    $image_path = "images/" . $image;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Profile</div>
                    <div class="card-body">
                        <!-- Display user information -->
                        <img src="<?php echo $image_path; ?>" class="rounded-circle mb-3" style="width: 150px; height: 150px;" alt="User Profile Image">
                        <h2 class="font-weight-bold"><?php echo $name; ?></h2>
                        <p><strong>Email:</strong> <?php echo $email; ?></p>
                        <p><strong>Phone:</strong> <?php echo $mblno; ?></p>
                        <p><strong>Driving License Number:</strong> <?php echo $dlno; ?></p>
                        <p><strong>Date Of Registration:</strong> <?php echo $date; ?></p>

                        <!-- Form for updating profile picture -->
                        <form action="updateprofile.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="profile_image">Update Profile Picture:</label>
                                <input type="file" class="form-control-file" id="profile_image" name="profile_image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="update_picture">Update Picture</button>
                            <!-- Form for deleting profile -->
                            <?php if(!empty($image)): ?>
                                <button type="submit" class="btn btn-danger" name="delete_picture">Delete Picture</button>
                            <?php endif; ?>
    </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
