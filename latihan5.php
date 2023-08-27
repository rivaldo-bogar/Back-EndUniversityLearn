
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>By: ValCode</title>
</head>
<body>
<?php
echo "MENGHAPUS VARIABEL DARI MEMORY <br>"  ;
// membuat variabel $tmp
$tmp = 2901;
echo "save memory : $tmp";
// menghapus variabel $tmp
unset($tmp);

// mencoba mengakses variabel $tmp
echo $tmp;
?>
</body>
</html>