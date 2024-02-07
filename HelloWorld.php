<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System</title>
</head>
<body>
    <h1>File Management System</h1>

    <!-- File Upload Form -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select File to Upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>

    <!-- File Listing -->
    <h2>Uploaded Files:</h2>
    <ul>
        <?php
        // Directory where files are uploaded
        $uploadDirectory = "uploads/";

        // Get all files in the upload directory
        $files = glob($uploadDirectory . "*");

        // Output each file as a list item
        foreach ($files as $file) {
            if (is_file($file)) {
                echo "<li><a href='$file' target='_blank'>" . basename($file) . "</a> 
                <a href='delete.php?file=" . urlencode($file) . "'>Delete</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
