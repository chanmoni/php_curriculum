<link rel="stylesheet" href="style.css">
<?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['name'];
    //①画像を参考に問題文の選択肢の配列を作成してください。
    $q1 = ['80','22','20','21' ];
    $q2 = ['PHP','Python','JAVA','HTML'];
    $q3 = ['join','select','insert','update'];

    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $a1 = $q1[0];
    $a2 = $q2[3];
    $a3 = $q3[1];
?>


<div class="container">  
    <!--フォームの作成 通信はPOST通信で-->
    <form method="POST" action="answer.php">
    <p>お疲れ様です<?php echo $my_name;?>さん</p>

        <h2>①ネットワークのポート番号は何番？</h2>
        <div class="choices"> <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach($q1 as $value){ ?>
                <input type="radio" name="q1" value="<?php echo $value; ?>" /> <?php echo $value; ?><?php } ?>
                <input type="hidden" name="a1" value="<?php echo $a1 ?>">
          </div>

        <h2>②Webページを作成するための言語は？</h2>
        <div class="choices"> <!--③ 問題のradioボタンを「foreach」を使って作成する-->
            <?php foreach($q2 as $value){ ?>
                    <input type="radio" name="q2" value="<?php echo $value; ?>" /> <?php echo $value; ?><?php } ?>
                    <input type="hidden" name="a2" value="<?php echo $a2 ?>">
          </div>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <div class="choices"> <!--③ 問題のradioボタンを「foreach」を使って作成する-->
            <?php foreach($q3 as $value){ ?>
                    <input type="radio" name="q3" value="<?php echo $value; ?>" /> <?php echo $value; ?><?php } ?>
                    <input type="hidden" name="a3" value="<?php echo $a3 ?>">
          </div>
        <div class="answer"> 
        <input type="hidden" name="my_name" value="<?php echo $my_name ?>">
        <input type = "submit" name="answer" value="回答する"/> <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
           </div>
    </form>
</div>



