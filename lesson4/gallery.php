<style>
    div{
        margin-top:100px;
        display:grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        grid-gap:20px;
    }
    img{
        border:2px solid black;
        border-radius:5px;
        

    }
    h1{
        margin-top:20px;
        text-align:center;
    }
</style>

<?php

$images = scandir("smallImages");
echo "<h1>Gallery</h1>";
echo "<div>";
for($i=2;$i<count($images);$i++){?>

<a  href="bigImages.php?img=<?= $images[$i]?>"><img src="smallImages/<?= $images[$i]?>" alt=""></a>

<?php
}
echo "</div>";