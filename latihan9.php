
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>By: ValCode</title>
</head>
<body>
<?php
echo "PERCABANGAN BERSARANG <br><br>"  ;
$umur = 17;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "Selamat datang pak!";
    } else {
        echo "Selamat datang wahai pemuda!";
    }
} else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
}
?>
</body>
</html>