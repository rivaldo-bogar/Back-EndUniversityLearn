
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>By: ValCode</title>
</head>
<body>
<?php
echo "CONVERSI TIPE DATA"  ;
$foo = "1";  // mula-mual $foo dalam bentuk string (ASCII 49)
$foo *= 2;   // $foo sekarang adalah integer (2)
$foo = $foo * 1.3;  // $foo sekarang adalah float (2.6)
$foo = 5 * "10 Little Piggies"; // $foo sekarang adalah integer (50)
echo "foo : $foo";
$foo = 5 * "10 Small Pigs";     // $foo sekarang adalah integer (50)
echo "foo : $foo";
$a = "32";
$a = (int) $a; // ubah nilai a menjadi integer
$a = (float) $a; // ubah nilai a menjadi float
$a = (string) $a; // ubah nilai a menjadi string
?>
</body>
</html>