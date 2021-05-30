<?php
$dbConn = mysqli_connect("127.0.0.1", "lightcode", "chlgyrms1", "php_blog_2021") or die("DB CONNECTION ERROR");

if ( isset($_GET['id']) == false ) {
  echo "id를 입력해주세요.";
  exit;

  if ( empty($_GET['id'])) {
    echo "id를 입력해주세요.";
    exit;
  }}

  if(isset($_GET['id']) == true){
    echo "<script type=\"text/javascript\">alert('정상적으로 삭제되었습니다.);</script>";
  }

$id = intval($_GET['id']);

$sql = "
DELETE FROM article
WHERE id = '${id}'
";
$rs = mysqli_query($dbConn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div>
  <?php
      $detailUri3 = "list.php";
      ?>
      <h2><a href="<?=$detailUri3?>">처음페이지로 돌아가기</a><br>
      <hr>
</div>
  <h>
</body>
</html>