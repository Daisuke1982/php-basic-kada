<?php
    echo '当初の配列<br>';
    $nums = [15, 4, 18, 23, 10 ];
    foreach ($nums as $num) {
        echo $num .'<br>';
    }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>昇順？降順？Dotch？</p>
     <form action="sort.php" method="POST">
         <select name="selectSort" method="post">
             <?php
             $selectSorts = [
                 '選んでください',
                 '昇順',
                 '降順',
             ];
             foreach ($selectSorts as $selectSort) {
                 echo "<option>{$selectSort}</option>";
             }
             echo $selectSort;
             ?>
         </select>
         <input type="submit"name="submit"value="送信"/>
     </form>
    <!-- <p> -->
        <?php
            function sort_2way($array,$order) {
                if ($order == "昇順"){
                    sort($array);

                }elseif ($order == "降順"){
                    rsort($array);

                }else{
                    // 
                }
                foreach ($array as $number) {
                    echo $number . '<br>';
                }
            }

        // ソートする配列を宣言
        if(isset($_POST["selectSort"])){
            $sele = $_POST["selectSort"];
            sort_2way($nums,$sele);
        }
        ?>
    <!-- </p> -->
</body>

</html>