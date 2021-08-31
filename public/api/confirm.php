<?php
header("Content-Type: text/html; charset=UTF-8");
include('version.php');
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: contact.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'main@takiwaka.sakura.ne.jp';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
名前： {$post['name']}
メールアドレス： {$post['email']}
内容：
{$post['contact']}
EOT;
    mb_send_mail($to, $subject, $body, "From: {$from}");

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="トップのdescription" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="../../assets/images/favicon.ico" />
    <title>確認画面</title>
    <link rel="stylesheet" type="text/css" href="../assets/stylesheets/bundle.<?php echo $HASH ?>.css">
</head>

<body>
    <!-- お問合せフォーム画面 -->
    <div class="l-wrap">
        <form action="" method="POST">
            <div class="p-confirm">

                <div class="p-confirm__wrap">

                    <p class="p-confirm__title">問い合わせ内容</p>

                    <div class="p-confirm__item">
                        <div class="p-confirm__heading">
                            <label for="inputName">名前</label>
                        </div>
                        <div class="p-confirm__content">
                            <p class="p-confirm__text"><?php echo htmlspecialchars($post['name']); ?></p>
                        </div>
                    </div>

                    <div class="p-confirm__item">
                        <div class="p-confirm__heading">
                            <label for="inputEmail">メールアドレス</label>
                        </div>
                        <div class="p-confirm__content">
                            <p class="p-confirm__text"><?php echo htmlspecialchars($post['email']); ?></p>
                        </div>
                    </div>

                    <div class="p-confirm__item">
                        <div class="p-confirm__heading">
                            <label for="inputContent">問い合わせ内容</label>
                        </div>
                        <div class="p-confirm__content">
                            <p class="p-confirm__text"><?php echo nl2br(htmlspecialchars($post['contact'])); ?></p>
                        </div>
                    </div>

                    <div class="p-confirm__button">
                        <div class="p-confirm__buttonContent">
                            <a class="u-link-underLine" href="contact.php">戻る</a>
                            <button type="submit">送信する</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>