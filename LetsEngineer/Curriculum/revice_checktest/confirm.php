<?php
    $my_name = $_POST['name'];
    $furigana = $_POST['furigana'];
    $address = $_POST['address'];
    $product = $_POST['q1'];
    $regular_delivery = $_POST['regular_delivery'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1 class="site-logo"><a href="#"><img src="images/ロゴ.png" alt="b-blow"></a></h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショップ</title>
</head>

<body>
<form action="thank.html" method="post">
    <p>お名前：<?php echo $my_name; ?></p>
    <p>ふりがな：<?php echo $furigana; ?></p>
    <p>ご住所：<?php echo $address; ?></p>
    <p>商品：<?php echo $product; ?></p>
    <p>定期配送を希望する：<?php echo $regular_delivery; ?></p>

    <p><input type="submit" value="申し込む"></p>

    <style>
        .site_logo {
          width: 120px;
        }
    </style>
    </form>
</body>
</html>