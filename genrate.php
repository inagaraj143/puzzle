

<?php 

$meta ="";
for($i=1; $i<=83;$i++){
    $meta.='<link rel="preload" as="image" href="./img/Layer-'.$i.'.png"><br>';
}

echo $meta;