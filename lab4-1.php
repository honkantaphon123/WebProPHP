<html>
<head><title>การก าหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = 200;
$z = 300;
$add = $x + $y;
$sub = $z - $x ;
$mul = $y * $z;
$div = $mul / $z ;
echo("ผลบวก ".$x." + ".$y." = ".$add);
echo("ผลลบ ".$z." - ".$x." = ".$sub);
echo("ผลคูณ ".$y." x ".$z." = ".$mul);
echo("ผลหาร ".$mul." / ".$z." = ".$div);
?>
</body>
</html>