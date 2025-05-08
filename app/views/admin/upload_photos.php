<?php
$message = '';
$messageType = '';
$uploadedFilePath = '';
$uploadDir = 'C:/xampp/htdocs/eeeclasses/eeeclasses.info/img/notice_board/';
$webPath = 'http://localhost/eeeclasses/eeeclasses.info/img/notice_board/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['photo'])) {
        $file = $_FILES['photo'];
        if ($file['error'] === UPLOAD_ERR_OK && is_uploaded_file($file['tmp_name'])) {
            $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array($fileExtension, $allowedExtensions) && getimagesize($file['tmp_name'])) {
                $targetFile = $uploadDir . basename($file['name']);
                if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                    $message = 'Photo uploaded successfully!';
                    $messageType = 'success';
                    $uploadedFilePath = $webPath . basename($file['name']);
                } else {
                    $message = 'Error uploading the photo.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.';
                $messageType = 'error';
            }
        } 
    }

    if (isset($_POST['delete'])) {
        $fileToDelete = $uploadDir . basename($_POST['delete']);
        if (file_exists($fileToDelete) && unlink($fileToDelete)) {
            $message = 'Photo deleted successfully!';
            $messageType = 'success';
        } else {
            $message = 'Error deleting the photo.';
            $messageType = 'error';
        }
    }
}

$uploadedImages = array_filter(
    array_diff(scandir($uploadDir), ['.', '..']),
    fn($file) => is_file($uploadDir . $file) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; }
        .text-coral { color: #F88379; }
        .sidebar, .form-container { background: white; border-radius: 20px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .form-container h4 { color: #333; }
        .form-container button { background-color: #F88379; color: white; border: none; border-radius: 5px; padding: 10px; transition: background-color 0.3s; }
        .form-container button:hover { background-color: #F88379; }
        .message { text-align: center; margin-top: 10px; font-weight: bold; }
        .success { color: green; }
        .error { color: red; }
        .uploaded-image { display: block; margin: 20px auto; max-width: 100%; border: 1px solid #ccc; border-radius: 10px; }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container-fluid mt-4">
    <?php include 'sidebar.php'; ?>
    <div class="col-md-10">
        <div class="form-container">
            <h4>Notice Board Photos</h4>
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
            <?php if ($message): ?>
                <div class="message <?= $messageType; ?>"><?= $message; ?></div>
            <?php endif; ?>
            <?php if ($uploadedFilePath): ?>
                <img src="<?= $uploadedFilePath; ?>" alt="Uploaded Image" class="uploaded-image">
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-10 mt-4"> <!-- Added margin-top for spacing -->
        <div class="form-container">
            <h4>Delete Photos</h4>
            <ul class="list-group">
            <?php foreach ($uploadedImages as $image): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $image; ?>
                <div>
                    <a href="<?= $webPath . $image; ?>" target="_blank" class="btn btn-primary btn-sm">View</a>
                    <form action="" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this image?');">
                    <input type="hidden" name="delete" value="<?= $image; ?>">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>