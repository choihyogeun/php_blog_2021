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
<div>게시물의 제목과 내용이 장상적으로 변경되었습니다.</div>
<div><a href="list.php">처음으로 바로가기</a></div>