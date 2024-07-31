<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["name"];

//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = [80, 22, 20, 21];
$question2 = ["PHP", "Python", "JAVA", "HTML"];
$question3 = ["join", "select", "insert", "update"];


//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $question1[0];
$answer2 = $question2[3];
$answer3 = $question3[1];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="index.css">
</head>
<body id="home">
<div>
<p class="moji">お疲れ様です<?php echo $name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action = "answer.php" method = "post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($question1 as $s1){ ?>
        <input type = "radio" name = "question1" value = "<?php echo $s1; ?>"> <?php echo $s1; ?>
    <?php } ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($question2 as $s2){ ?>
        <input type="radio" name= "question2" value="<?php echo $s2; ?>"><?php echo $s2; ?>
    <?php } ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($question3 as $s3){ ?>
        <input type ="radio" name = "question3" value= "<?php echo $s3; ?>"><?php echo $s3;?>
   <?php } ?>
<br>
<input type="submit" value="回答する">
<input type="hidden" name="hidden_name" value="<?php echo $name ?>">
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
</form>
</div>
    <!--名前を入力してquestion.phpに移動するフォームを作成-->
</body>
</html>
