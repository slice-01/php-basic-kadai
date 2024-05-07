<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order = true)
    {
      if ($order) {
        echo "昇順にソートします。" . "<br>";
        sort($array);
      } else {
        echo "降順にソートします。" . "<br>";
        rsort($array);
      } 
      return $array;
    };
    
    $nums = [15, 4, 18, 23, 10];

    $sorted_nums = sort_2way($nums);
    foreach ($sorted_nums as $value) {
      echo $value . "<br>";
    }

    $reverse_sorted_nums = sort_2way($nums, false);
    foreach ($reverse_sorted_nums as $value) {
      echo $value . "<br>";
    }

    ?>
  </p>
</body>

</html>