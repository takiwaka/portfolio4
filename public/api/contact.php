<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
include('version.php');
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // フォームの送信時にエラーをチェック
        if ($post['name'] === '') {
                $error['name'] = 'blank';
        }
        if ($post['email'] === '') {
                $error['email'] = 'blank';
        } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
                $error['email'] = 'email';
        }
        if ($post['contact'] === '') {
                $error['contact'] = 'blank';
        }

        if (count($error) === 0) {
                // エラーがないので確認画面に移動
                $_SESSION['form'] = $post;
                header('Location: confirm.php');
                exit();
        }
} else {
        if (isset($_SESSION['form'])) {
                $post = $_SESSION['form'];
        }
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
        <title>お問合せ</title>
        <link rel="stylesheet" type="text/css" href="../assets/stylesheets/bundle.<?php echo $HASH ?>.css">
</head>

<body>
        <div class="l-wrap">
        <ul class="p-pager jsc-pager"></ul>
                <?php include('header.php') ?>

                <div class="p-contact scrollify" data-section-name="top">
                        <div class="p-contact__contents">

                                <form action="" method="POST" novalidate>

                                        <p class="p-contact__heading">お問い合わせ</p>

                                        <div class="p-contact__row">
                                                <div class="p-contact__title">
                                                        <label for="inputName">お名前</label>
                                                </div>

                                                <div class="p-contact__require">
                                                        <p class="p-contact__requireItem">必須</p>
                                                </div>

                                                <div class="p-contact__input">
                                                        <input type="text" name="name" class="p-contact__inputItem p-contact__inputName" value="<?php echo htmlspecialchars($post['name']); ?>" required autofocus>
                                                        <?php if ($error['name'] === 'blank') : ?>
                                                                <p class="p-contact__error">※お名前をご記入下さい</p>
                                                        <?php endif; ?>
                                                </div>
                                        </div>

                                        <div class="p-contact__row">
                                                <div class="p-contact__title">
                                                        <label for="inputEmail">メールアドレス</label>
                                                </div>

                                                <div class="p-contact__require">
                                                        <p class="p-contact__requireItem">必須</p>
                                                </div>

                                                <div class="p-contact__input">
                                                        <input type="email" name="email" class="p-contact__inputItem p-contact__inputEmail" value="<?php echo htmlspecialchars($post['email']); ?>" required>

                                                        <?php if ($error['email'] === 'blank') : ?>
                                                                <p class="p-contact__error">※メールアドレスをご記入下さい</p>
                                                        <?php endif; ?>

                                                        <?php if ($error['email'] === 'email') : ?>
                                                                <p class="p-contact__error">※メールアドレスを正しくご記入ください</p>
                                                        <?php endif; ?>
                                                </div>
                                        </div>

                                        <div class="p-contact__row">

                                                <div class="p-contact__title">
                                                        <label for="inputContent">お問い合わせ内容</label>
                                                </div>

                                                <div class="p-contact__require">
                                                        <p class="p-contact__requireItem">必須</p>
                                                </div>

                                                <div class="p-contact__input">
                                                        <textarea name="contact" rows="10" class="p-contact__inputItem p-contact__inputContent" required><?php echo htmlspecialchars($post['contact']); ?></textarea>

                                                        <?php if ($error['contact'] === 'blank') : ?>
                                                                <p class="p-contact__error">※お問い合わせ内容をご記入下さい</p>
                                                        <?php endif; ?>
                                                </div>
                                        </div>

                                        <div class="p-contact__row">
                                                <div class="p-contact__button">
                                                        <button type="submit">確認画面へ</button>
                                                        <p>※実際に動作しますが、対応は行っておりません。ご了承ください</p>
                                                </div>
                                        </div>
                                </form>
                        </div>
                </div>
        </div><!-- p-contact__contents -->
        <?php include('footer.php') ?>

        </div><!-- l-wrap -->
        <script type="text/javascript" src="../assets/javascripts/bundle.<?php echo $HASH ?>.js"></script>
</body>

</html>