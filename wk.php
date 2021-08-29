<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
</head>
<body>
<tr>
<?php
$tab = 3;
$res;
for ($i=1;$i<=10;$i=$i+=1){
    $res =$tab*$i;   
    echo "$tab x $i = $res<br><b>";
}
?>

</body>
</html>