<?php
$usr ="";
$ps ="";
  if(isset($_GET["txUSER"])){
      $usr =$_GET["txUSER"];
      $ps =$_GET["txPASSWORD"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form menggunakan metode GET </title>
</head>
<body>
    <form method="GET" action="latihan1.php">
    <div>
        user name
        <input type="TEXT" name="txUSER" required>
    <div>
    <div>
         password
        <input type="PASSWORD" name="txPASSWORD">
    <div>
   <div>
    <button type="submit"> login </button>
   </div>
</form>

<div>
    <pre>
        use name: <?=$usr?>
        password: <?=$ps?>
    </pre>
</div>
</body>
</html>