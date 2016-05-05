<?php include 'db.php';
$getArticle = $_GET['id'];
$sql = 'SELECT * FROM `articles` WHERE `id`='.$getArticle;
$res = mysql_query($sql);
$rowss=mysql_num_rows($res);
if($rowss==0){
    echo '<script>window.location="/404";</script>';exit;
}else {
              while($row = mysql_fetch_array($res)){
                  $title = $row['title'];
                  $shortText = $row['shortText'];
                  $mainText = $row['mainText'];
                }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    
</body>
</html>