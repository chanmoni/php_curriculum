<link rel="stylesheet" href="style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];

$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function scoring ($question, $answer) {
  if ($question == $answer) { 
    echo "正解!";
   } else { echo "残念・・・";} 
};
?>

    <p> <?php echo $my_name;?> さんの結果は・・・？</p>

    <p>①の答え</p> <!--作成した関数を呼び出して結果を表示-->
        <p><?php echo scoring($q1,$a1)?><br></p>

    <p>②の答え</p> <!--作成した関数を呼び出して結果を表示-->
        <p><?php echo scoring($q2,$a2)?><br></p>

    <p>③の答え</p> <!--作成した関数を呼び出して結果を表示-->
        <p><?php echo scoring($q3,$a3)?><br></p>
</div>


