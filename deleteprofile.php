<?php
// Include the database connection file
include 'config.php';

// Start the session to access session variables
session_start();

// Check if the form was submitted to delete the profile picture
if(isset($_POST['delete_picture'])) {
    // Fetch user information from the database
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $image = $row['image'];
    
    // Delete the profile picture file from the server
    if($image) {
        unlink("images/" . $image);
    }
    
    // Update the user's profile picture field in the database to NULL
    $update_query = "UPDATE users SET image=NULL WHERE username='$username'";
    $result = mysqli_query($conn, $update_query);

    if($result) {
        // Profile picture deleted successfully
        // Redirect back to the profile page with a success message
        header('Location: myprofile.php?delete_picture=success');
        exit();
    } else {
        // Failed to delete profile picture
        // Redirect back to the profile page with an error message
        header('Location: myprofile.php?delete_picture=error');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your HTML head content here -->
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Profile</div>
                    <div class="card-body">
                        <!-- Display user information -->
                        <?php if($image): ?>
                            <!-- Show a default user logo if no profile picture is set -->
                            <img src="images/home/logouser.png" class="rounded-circle mb-3" style="width: 150px; height: 150px;" alt="User Profile Image">
                            <?php else: ?>
                        <h2 class="font-weight-bold"><?php echo $name; ?></h2>
                        <!-- Display other user information -->
                        <!-- Add other user details display here -->
                        <form action="updateprofile.php" method="POST">
                            <button type="submit" class="btn btn-danger" name="delete_picture">Delete Picture</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.inc.php';?>
</body>
</html>