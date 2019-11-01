<?php
include("./db.php");
// Obtener todas los nombre de las imagenes en base de datos
function getFilesFromDB() {
    global $connection;
    $query = "SELECT * FROM imagenes";
    return mysqli_query($connection, $query);
}

$images_data = getFilesFromDB();

// Creando un array de objectos
$arr = [];
foreach($images_data as $image_data) {
    $image_url = $image_data['image_file'];
    $file_object = (object) [
        'name' => $image_data['image_file'],
        'url' => $image_url,
     ];
    $arr[] = $file_object;
}

// Retorna el array como un json, luego lo recuperamos en el proyecto php-retrieve.
return json_encode($arr);