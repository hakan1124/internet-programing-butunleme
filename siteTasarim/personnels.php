<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
    table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
require("config.php");
$q = intval($_GET['q']);
mysqli_select_db($baglanti,"adminpanel");
$sql="SELECT * FROM personnels WHERE personnels_id = $q";
$result = $baglanti->query($sql);


while($row = mysqli_fetch_array($result)) {
;
echo "
<div class='row'>
<div class='col'>
  <img src='$row[personnels_img]' class='rounded img-thumbnail'>
</div>
<div class='col text-center d-flex justify-content-center align-items-center'>
  <h3 class=''> $row[personnels_header] <span class='badge bg-dark'>$row[personnels_age]</span></h3>
</div>
</div>
<div class='row'>
<div class='col'>
<p class='mt-2'> $row[personnels_text] </p>
</div>
</div>
<div class='row'>
<div class='col text-center d-flex justify-content-center align-items-center'>
<p>
$row[personnels_hometown]
</p>
</div>
</div>
";
}
echo "</table>";
mysqli_close($baglanti);
?>
    
</body>
</html>
