<?php
include("./db.php");

// Para Almacenar => nombre de las imagenes en base de datos y archivo en carpeta 'images'
if (isset($_POST{'create_image'})) {
    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];

    move_uploaded_file($post_image_temp, "images/$post_image");

    $query = "INSERT INTO imagenes(image_file) VALUES ('{$post_image}') ";

    mysqli_query($connection, $query);

    header("Location: /php-display/index.php");
}
?>

<h1>Storage an Image!</h1>

<form action="" method="post" enctype="multipart/form-data">
    <div>
        <label for="post_image">Post Image</label>
        <input type="file" name="post_image">
    </div>
    <input type="submit" name="create_image" value="Publish Post">
</form>

