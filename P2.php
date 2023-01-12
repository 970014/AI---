<!DOCTYPE html>
<html>

<head>
  <title>Ai第六組_憂鬱自我檢測2</title>
</head>

<body>

  <div style="width:300px; margin:auto;">
    <?php
    $var = 0;
    $data = 0;
    for ($i = 1; $i < 22; $i++) {
      $i = strval($i);
      if (isset($_POST[$i])) {
        $data = $data + $_POST[$i];
      }
    }
    $var = $data;
    $switch = 0;
    if ($data <= 13) {
      $switch = 0;
    } elseif ($data <= 19) {
      $switch = 1;
    } elseif ($data <= 28) {
      $switch = 2;
    } elseif ($data <= 63) {
      $switch = 3;
    }
    echo '<table border="1" width="600" align="center">';
    echo '<tr bgcolor="#dddddd">';
    switch ($switch) {
      case 0:
        echo "<th>正常範圍：您的情緒狀態大致平穩，請保持心情愉快。</th>";
        break;
      case 1:
        echo '<th>輕度憂鬱：您最可能有輕微的情緒波動或低潮，這些低潮尚可以應付的範圍，但或許您可以考慮與身邊的朋友們聊聊天。</th>';
        break;
      case 2:
        echo '<th>中度憂鬱：最近您是否遇到較多的苦惱與煩悶，如果可以，多出門走走並且遠離造成您煩惱的源頭，若您希望的話，可以尋求專業的幫助。</th>';
        break;
      case 3:
        echo '<th>重度憂鬱：先不用過於壓抑，是否是憂鬱症還需要專業醫生的評估。<br>您有需要的話，可以聯繫北護的救助專線，我們隨時在這裡！</th>';
        break;
    }
    echo '</tr>';
    ?>
    <a href="<?php echo "Run2.php?new=" . $var ?>">進一步分析</a>
    </table>
  </div>

</body>

</html>