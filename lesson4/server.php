<?php

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
if(copy($_FILES['photo']['tmp_name'],$pathBig)){
$type=explode('/',$_FILES['photo']['type'])[1];
changeImage(150,150,$_FILES['photo']['tmp_name'],$pathSmall,$type);
header('Location: form.php');
}



