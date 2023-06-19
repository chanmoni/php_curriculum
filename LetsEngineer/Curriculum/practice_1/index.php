<h1 class="site-logo"><a href="#"><img src="images/ロゴ.png" alt="b-blow"></a></h1>
<form action="result.php" method="post">
      私の名前：<input type="text" name="my_name" />
      <br>
      商品：
        <input type="radio" name="present" value="select_a">A賞
        <input type="radio" name="present" value="select_b">B賞
        <input type="radio" name="present" value="select_c">C賞
        <br>
       
      個数：<select name="number">
          <?php for ($i=1;$i<=10;$i++){ ?>
            <option value="<?php echo $i; ?>">
              <?php echo $i; ?>
            </option>
          <?php } ?>
         </select>
         <br>
<input type="submit" value="申し込み" />
</form>

<style>
    .site_logo {
      width: 120px;
    }
    span {
      color: red;
    }
</style>