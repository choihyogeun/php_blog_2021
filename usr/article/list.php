<?php
$dbConn = mysqli_connect("127.0.0.1", "lightcode", "chlgyrms1", "php_blog_2021") or die("DB CONNECTION ERROR");

$sql = "
SELECT *
FROM article AS A
ORDER BY A.id DESC
";
$rs = mysqli_query($dbConn, $sql);

$articles = [];

while ( $article = mysqli_fetch_assoc($rs) ) {
  $articles[] = $article;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>게시물 리스트</title>
</head>
<body>
  <h1>게시물 리스트</h1>
  <form action="writeType.php">
        <input type="submit" value="게시글 작성">
      </form></br>
  <h>

  <div>
    <?php foreach ( $articles as $article ) { ?>
      번호 : <?=$article['id']?><br>
      작성 : <?=$article['regDate']?><br>
      수정 : <?=$article['updateDate']?><br>
      제목 : <?=$article['title']?><br>
      내용 : <?=$article['body']?><br></br>
      <form action="detail.php">
        <input type="hidden" name="id" value="<?=$article['id']?>">
        <input type="submit" value="게시글 상세보기">
      </form>
      <hr>
    <?php } ?>
  </div>
</body>
</html>