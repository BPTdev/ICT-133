<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js" type="text/javascript"></script>
    <title>Calendrier</title>
</head>
<body>
<h4>Donnez-moi l'année et le mois actuels</h4>
<form action="index2.php" method="post">
    Date :
    <input type="text" name="dateselec" value="<?php echo date('Y-m-d'); ?>" />
    <input type="submit" name="submit" >
</form>

</body>
</html>

