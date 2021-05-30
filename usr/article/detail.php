<?php
$dbConn = mysqli_connect("127.0.0.1", "lightcode", "chlgyrms1", "php_blog_2021") or die("DB CONNECTION ERROR");

if ( isset($_GET['id']) == false ) {
  echo "id를 입력해주세요.";
  exit;
}

$id = intval($_GET['id']);

$sql = "
SELECT *
FROM article AS A
WHERE A.id = '${id}'
";
$rs = mysqli_query($dbConn, $sql);
$article = mysqli_fetch_assoc($rs);

if ( $article == null ) {
  echo "${id}번 게시물은 존재하지 않습니다.";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$article['id']?>번 게시물</title>
</head>
<body>
  <h1><?=$article['id']?>번 게시물</h1>
  <h>

  <div>
  <?php
      $detailUri2 = "delete.php?id=${article['id']}";
      ?>
  <h2>번호 : <?=$article['id']?><br>
      작성 : <?=$article['regDate']?><br>
      수정 : <?=$article['updateDate']?><br>
      제목 : <?=$article['title']?><br><h2>
      <form action="delete.php">
        <input type="hidden" name="id" value="<?=$article['id']?>">
        <input type="submit" value="삭제하기">
      </form>
      <hr>
  </div>
</body>
</html>