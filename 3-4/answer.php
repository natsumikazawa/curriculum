<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$user_name = $_POST["hidden_name"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$answer1 = $_POST["question1"];
$answer2 = $_POST["question2"];
$answer3 = $_POST["question3"];

function ans1($ans1){
    if($ans1 == "80"){
        echo "正解!";
    }else{
        echo "残念・・・";
    }
}

function ans2($ans2){
    if($ans2 == "PHP"){
        echo "正解!";
    }else{
        echo "残念・・・";
    }
}

function ans3($ans3){
    if($ans3 == "select"){
        echo "正解!";
    }else{
        echo "残念・・・";
    }
}

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
<p><!--POST通信で送られてきた名前を表示--><?php echo $user_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<p><?php ans1($answer1);?></p>

<!--作成した関数を呼び出して結果を表示-->

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php ans2($answer2);?></p>


<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php ans3($answer3);?></p>

</div>
    <!--名前を入力してquestion.phpに移動するフォームを作成-->
</body>
</html>

