<?php
$message = '';
$messageType = '';
$uploadedFilePath = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
    // Check for file upload errors
    if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
        $message = 'File upload error. Please try again.';
        $messageType = 'error';
    } else {
        // Check if file is uploaded and temporary file exists
        if (empty($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $message = 'File uploaded successfully.';
            $messageType = 'success';
        } else {
            // Validate the image file extension and MIME type
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileExtension = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
            if (!in_array($fileExtension, $allowedExtensions)) {
                $message = 'Only JPG, JPEG, PNG, and GIF images are allowed.';
                $messageType = 'error';
            } else {
                // Check if the file is a valid image
                $check = getimagesize($_FILES['photo']['tmp_name']);
                if ($check === false) {
                    $message = 'File is not a valid image.';
                    $messageType = 'error';
                } else {
                    // Full server path to store the file
                    $uploadDir = 'C:/xampp/htdocs/eeeclasses/eeeclasses.info/img/notice_board/';
                    $fileName = basename($_FILES['photo']['name']);
                    $targetFile = $uploadDir . $fileName;

                    // Move the uploaded file
                    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                        $message = 'Photo uploaded successfully!';
                        $messageType = 'success';

                        // Convert to relative web path for displaying the image
                        $uploadedFilePath = 'http://localhost/eeeclasses/eeeclasses.info/img/notice_board/' . $fileName;
                    } else {
                        $message = 'Error uploading the photo.';
                        $messageType = 'error';
                    }
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .text-coral {
            color: #F88379;
        }
        .sidebar {
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-left: 10px;
        }
        .form-container h4 {
            color: #333;
        }
        .form-container button {
            background-color: #FF7F50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #FF6347;
        }
        .message {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        .uploaded-image {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2">
            <div class="sidebar">
                <div class="text-center mb-2">
                    <a href="http://localhost/eeeclasses/eeeclasses.info/admin" class="btn w-100" style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379;" onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                        DASHBOARD
                    </a>
                </div>

                <h5 class="h5 text-coral">Students</h5>
                <nav class="navbar bg-white d-inline-block p-3 w-100 border border-1 navbar-light" style="border-radius: 20px;">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/students" class="nav-link">View Students</a></li>
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/add_student" class="nav-link">Add Student</a></li>
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/update_student" class="nav-link">Update Student Details</a></li>
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/delete_student" class="nav-link">Delete Student</a></li>
                    </ul>
                </nav>

                <h5 class="h5 text-coral mt-3">Teachers</h5>
                <nav class="navbar bg-white d-inline-block p-3 w-100 border border-1 navbar-light" style="border-radius: 20px;">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/teachers" class="nav-link">View Teachers</a></li>
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/add_teacher" class="nav-link">Add Teacher</a></li>
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/update_teacher" class="nav-link">Update Teacher's Detail</a></li>
                        <li class="nav-item"><a href="http://localhost/eeeclasses/eeeclasses.info/admin/delete_teacher" class="nav-link">Delete Teacher</a></li>
                    </ul>
                </nav>

                <div class="text-center mt-3 mb-2">
                    <a href="http://localhost/eeeclasses/eeeclasses.info/admin/feedback" class="btn w-100" style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379;" onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                        User's Feedback
                    </a>
                </div>
                <div class="text-center mb-2">
                    <a href="http://localhost/eeeclasses/eeeclasses.info/admin/question" class="btn w-100" style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379;" onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                        Questions
                    </a>
                </div>
                <div class="text-center mb-2">
                    <a href="http://localhost/eeeclasses/eeeclasses.info/admin/notice_board" class="btn w-100" style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379;" onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                        Notice Board
                    </a>
                </div>
                <div class="text-center mb-2">
                    <a href="http://localhost/eeeclasses/eeeclasses.info/admin/upload_photos" class="btn w-100" style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379;" onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                        Upload Photos
                    </a>
                </div>
                <div class="text-center">
                    <a href="http://localhost/eeeclasses/eeeclasses.info/admin_users/logout" class="btn w-100" style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379;" onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                        Logout
                    </a>
                </div>
            </div>
        </div>

        <!-- Upload Form -->
        <div class="col-md-10">
            <div class="form-container">
                <h4>Upload Photos</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="photo" class="col-sm-3 col-form-label">Choose Photo<sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="photo" name="photo" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 mx-auto">
                            <button type="submit" class="btn w-100">Upload Photo</button>
                        </div>
                    </div>
                </form>

                <?php if (!empty($message)): ?>
                    <div class="message <?php echo $messageType; ?>">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($uploadedFilePath)): ?>
                    <img src="<?php echo $uploadedFilePath; ?>" alt="Uploaded Image" class="uploaded-image">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
