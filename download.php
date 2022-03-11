<?php
// connect to database
$con1=mysqli_connect("localhost","root","","dblibrary");

// Downloads files
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // fetch file to download from database
    $query = "SELECT * FROM tbbook WHERE name=$name";
    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $row['file'];

    if (file_exists($filepath)) {
        
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        
        
        header('Content-Length: ' . filesize('upload/' . $row['file']));
        readfile('upload/' . $row['file']);

        exit;
    }
}
?>
