<?php
function add($x, $y){
return $x + $y;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 id="header"></h1>
<script>
    const result = <?php echo add(5, 3)?> ;
    document.getElementById("header").innerHTML = result;
  </script>

</body>
</html>