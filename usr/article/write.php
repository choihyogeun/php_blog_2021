<?php
$dbConn = mysqli_connect("127.0.0.1", "lightcode", "chlgyrms1", "php_blog_2021") or die("DB CONNECTION ERROR");

if ( empty($_GET['title'])) {
  echo "title을 입력해주세요.";
  exit;
}

if ( empty($_GET['body'])) {
  echo "body를 입력해주세요.";
  exit;
}

$title = $_GET['title'];
$body = $_GET['body'];

$sql = "
INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '${title}',
`body` = '${body}'
";
mysqli_query($dbConn, $sql);

?>
<div>게시물이 생성되었습니다.</div>
<div><a href="list.php">리스트</a></div>