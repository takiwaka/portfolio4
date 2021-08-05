<?php
header("Content-Type: text/html; charset=UTF-8");
// 結果は必ずUTF-8で返すこと
// $answer = mb_convert_encoding($answer,"UTF-8","auto");
//JSON形式にすることで複数の値を返すことも可能
// $json = new Services_JSON;
// $encode = $json->encode($arr); //JSONに変換
// echo $json->encode(['hoge' => 'ok']);   //JSONを出力
// header('Content-Type: application/json');
// echo json_encode(['data' => 'ok']);
// echo json_encode(['data' => 'ok']);
?>
<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //害のある文字列を除去
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // フォームの送信時にエラーをチェックする
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
        <meta charset="UTF-8">
        <meta name="description" content="お問い合わせ" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" type="text/css" href="/public/assets/stylesheets/bundle.css">
        <link rel="icon" href="../assets/images/favicon.ico" />
        <title>お問合せ</title>
</head>

<body>
        <!-- お問合せフォーム画面 -->
        <div class="container">
                <form action="" method="POST" novalidate>
                        <p>お問い合わせ</p>
                        <div class="form-group">
                                <div class="row">
                                        <div class="col-2">
                                                <label for="inputName">お名前</label>
                                        </div>
                                        <div class="col-2">
                                                <p class="require_item">必須</p>
                                        </div>
                                        <div class="col-md-8">
                                                <input type="text" name="name" id="inputName" class="form-control" value="<?php echo htmlspecialchars($post['name']); ?>" required autofocus>
                                                <?php if ($error['name'] === 'blank') : ?>
                                                        <p class="error_msg">※お名前をご記入下さい</p>
                                                <?php endif; ?>
                                        </div>
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                        <div class="col-2">
                                                <label for="inputEmail">メールアドレス</label>
                                        </div>
                                        <div class="col-2">
                                                <p class="require_item">必須</p>
                                        </div>
                                        <div class="col-8">
                                                <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo htmlspecialchars($post['email']); ?>" required>
                                                <?php if ($error['email'] === 'blank') : ?>
                                                        <p class="error_msg">※メールアドレスをご記入下さい</p>
                                                <?php endif; ?>
                                                <?php if ($error['email'] === 'email') : ?>
                                                        <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                                                <?php endif; ?>
                                        </div>
                                </div>
                        </div>
                        <div class="form-group">
                                <div class="row">
                                        <div class="col-2">
                                                <label for="inputContent">お問い合わせ内容</label>
                                        </div>
                                        <div class="col-2">
                                                <p class="require_item">必須</p>
                                        </div>
                                        <div class="col-8">
                                                <textarea name="contact" id="inputContent" rows="10" class="form-control" required><?php echo htmlspecialchars($post['contact']); ?></textarea>
                                                <?php if ($error['contact'] === 'blank') : ?>
                                                        <p class="error_msg">※お問い合わせ内容をご記入下さい</p>
                                                <?php endif; ?>
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-8 offset-4">
                                        <button type="submit">確認画面へ</button>
                                </div>
                        </div>
                </form>
        </div>
</body>

</html>