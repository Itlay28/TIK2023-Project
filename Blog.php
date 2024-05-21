<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sweetly web pribadi</title>
        <link rel="stylesheet" href="styles 1.css ">
        <script src="script 1.js"></script>
    </head>

    <body>


            <h1>Korean pop</h1>      
            <a href="index.html" target="situs pertama">
                <button class="button">🏠</button>
            </a>
            <a href="Gallery.html" target="situs kedua">
                <button class="button">🖼</button>
            </a>
            <a href="Blog.html" target="situs kedua">
            <button class="button">📝</button>
            </a>
            <a href="Contact.html" target="situs kedua">
            <button class="button">☎</button>
            </a>
            <h1>Blog</h1>

                 <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
        <h2><?= $row["judul"] ?></h2>
        <div>
           <?= $row["deskripsi"] ?>
        </div>
  <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>
        
    </body>
</html>