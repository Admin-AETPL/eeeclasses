<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            background-color: #FF7F50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
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
    <script>
        function showPopup(message) {
            alert(message);
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Upload Photos</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="photo">Choose a photo to upload:</label>
            <input type="file" name="photo" id="photo" required>
            <button type="submit">Upload Photo</button>
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
</body>
</html>

<?php
// filepath: c:\xampp\htdocs\eeeclasses\app\views\admin\upload_photos.php

$message = ''; // Initialize message variable
$messageType = ''; // Message type for styling (success or error)
$uploadedFilePath = ''; // Path to the uploaded file for display

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $uploadDir = 'uploads/'; // Directory to store uploaded files
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Allowed file types
        $maxFileSize = 2 * 1024 * 1024; // Maximum file size (2 MB)

        $fileType = $_FILES['photo']['type'];
        $fileSize = $_FILES['photo']['size'];
        $fileName = basename($_FILES['photo']['name']);
        $targetFile = $uploadDir . $fileName;

        // Check if the file type is allowed
        if (!in_array($fileType, $allowedTypes)) {
            $message = "Invalid file type. Only JPEG, PNG, and GIF are allowed.";
            $messageType = 'error';
        } elseif ($fileSize > $maxFileSize) {
            $message = "File size exceeds the 2 MB limit.";
            $messageType = 'error';
        } else {
            // Check if the upload directory exists, create it if not
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                $message = "Photo uploaded successfully: $fileName";
                $messageType = 'success';
                $uploadedFilePath = $targetFile; // Set the path for displaying the uploaded image
            } else {
                $message = "Error uploading the photo.";
                $messageType = 'error';
            }
        }
    } else {
        $message = "No file uploaded or an error occurred.";
        $messageType = 'error';
    }
}
?>