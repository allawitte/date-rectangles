<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$time = date("H:i:s");
$nums = explode(':', $time);
foreach ($nums as &$item){
    $item += 0;
}
function is3($min){
    if(($min % 3)=== 0) return true;
}

function is2not3($min){
    if(($min % 2) === 0 && !is3($min)) return true;
}

if(is3($nums[1])){
    $width = $nums[0]*20;
    $day = (int)date("d");
    $height = pow($day, 2);
    $bg = 'red';

}
else if(is2not3($nums[1])){
    $width = round(sqrt(date("Y")))*5;
    $height = $width;
    $bg = 'yellow';
}
else {
    $bg = 'green';
    $width = $nums[1]*$nums[2];
    $height = pow((int)$nums[0], 2);
}
echo "<p>$time</p>";
echo "<div style=\" width:{$width}px; height:{$height}px; background:{$bg}; \"></div>";

?>
</body>
</html>