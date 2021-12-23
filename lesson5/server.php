<?php
include_once "config.php";

$pathSmall="smallImages/{$_FILES['photo']['name']}";
$pathBig="bigImages/{$_FILES['photo']['name']}";
$path= "{$_SERVER['DOCUMENT_ROOT']}/lesson4/bigImages";

function changeImage($h, $w, $src, $newsrc, $type){
    $newimg= imagecreatetruecolor($h,$w);
    switch($type){
        case "jpeg":
            $img= imagecreatefromjpeg($src);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0,$h,$w,imagesx($img),imagesy($img));
            imagejpeg($newimg, $newsrc);
            break;
        case 'png':
            $img= imagecreatefrompng($src);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0,$h,$w,imagesx($img),imagesy($img));
            imagepng($newimg, $newsrc);
            break;
        case 'gif':
                $img= imagecreatefromgif($src);
                imagecopyresampled($newimg, $img, 0, 0, 0, 0,$h,$w,imagesx($img),imagesy($img));
                imagegif($newimg, $newsrc);
                break;

    }
}
// if(move_uploaded_file($_FILES['photo']['tmp_name'],$pathBig)){
//     echo "{$_FILES['photo']['name']} Успешно загружен";
// }
$sql="INSERT INTO images (photo,size,count) VALUES ('{$_FILES['photo']['name']}','{$_FILES['photo']['size']}','0')";

if(copy($_FILES['photo']['tmp_name'],$pathBig)){
$type=explode('/',$_FILES['photo']['type'])[1];
changeImage(150,150,$_FILES['photo']['tmp_name'],$pathSmall,$type);
if(mysqli_query($connect,$sql)){
    header('Location: form.php');
}

}



