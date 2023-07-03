<link rel="stylesheet" href="style.css">
 <?php
    require_once("getData.php");

    $db = new getData();
    $user = $db->getUserData();
    $posts = $db->getPostData()->fetchAll(PDO::FETCH_ASSOC);
    //$posts_data = $db->getPostData()->prepare($getposts_sql);
    //var_dump($user);
    //var_dump($posts_data);

    foreach($posts as $array){
        if ($array ["category_no"] == 1){
            $array["category_no"]  = "食事";
        } else if ($array ["category_no"] == 2) {
            $array["category_no"]  = "旅行";
        } else if ($array ["category_no"] == 3){
            $array["category_no"]  = "その他";
        };
    }
?>

<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <title>Practice2</title>
</head>

<body>
    <header>
        <div class="logo"><img src="image/YI_logo.png" >
        </div>
        <div class="headerLeft">
            <div class="userName">ようこそ
               <?php echo $user["last_name"];
               echo $user["first_name"];
               ?>
               さん
            </div>
            <div class="loginTime"> 最終ログイン日： 
            <?php echo $user["last_login"];
              ?>
            </div>
        </div>   
    </header>

    <main>
      <table class="blog">
        <tr >
            <th class="blogtitle1">記事ID</th>
            <th class="blogtitle2">タイトル</th>
            <th class="blogtitle1">カテゴリ</th>
            <th class="blogtitle2">本文</th>
            <th class="blogtitle3">投稿日</th>
        </tr>
        <?php foreach($posts as $array){?> 
                    <tr>
                        <?php foreach($array as $value){?> 
                            <td class = cell>
                                <?php echo $value;?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
      </table>
   </main>
   <footer>
      Y&I group.inc
   </footer>

</body>
</html>


