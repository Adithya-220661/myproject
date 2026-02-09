<?php
if (isset($_FILES['upfile']))
{
    $filename=$_FILES['upfile']['name'];
    $tempname=$_FILES['upfile']['tmp_name'];
    $uploadDir="upload/";
    $filePath=$uploadDir . $filename;
    if(move_uploaded_file($tempname,$filePath))
    {
        echo "file uploaded successfully";
        echo "<a href='download.php?file=$filename'>
        <button>Download</button>
        </a>";
    }
    else
    {
        echo "file not uploaded";
    }

    
}
?>