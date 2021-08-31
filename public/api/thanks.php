<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
include('version.php');
$error = [];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="送信完了のdescription" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="icon" href="../../assets/images/favicon.ico" />
  <title>送信完了</title>
  <link rel="stylesheet" type="text/css" href="../assets/stylesheets/bundle.<?php echo $HASH ?>.css">
</head>

<body>
  <div class="l-wrap">

    <h3 class="p-thanks">thanks</h3>
    <a href="../index.html">メイン画面へ戻る</a>


  </div><!-- l-wrap -->
  <script type="text/javascript" src="../assets/javascripts/bundle.<?php echo $HASH ?>.js"></script>
</body>

</html>


