<!DOCTYPE html>
<html>

<head>
  <title>文章情緒判讀</title>
</head>

<body>
  <center>
    <h1>Ai_文章情緒判讀</h1>
  </center>
  <h4>在下方文字框中寫下您現在 或 最近想的文章(任意都可) Ai 會幫您判斷您文章的情緒呈現度(Plese use english.)</h4>
  <form method="get" action="Run2.php">
    <textarea rows="10" cols="40" name="message"></textarea>
    <?php
    echo '<input type="hidden" name="new" value=' . $_GET['new'] . '>';
    echo '<input name="" type="submit" value="檢測" />';
    echo '  </form>';
    if (isset($_GET["message"])) {
      $message = $_GET['message'];
      $path = "python 2.py "; //末尾加空格
      $content = str_replace("\n", "", $_GET['message']);
      $get =  $_GET['new'];
      $input = $path . $content . ' ' . $get;
      exec($input, $output);
      $re = count($output);
      echo '最終總建議 : <br>';
      $text_re_data = $output[0];
      $Quest = intval($output[1]);
      $Detect = intval($output[2]);
      if ($Quest == 0) {
        if ($Detect == 0 || $Detect == 1) {
          echo '您的貝克分析量表結果為 : 正常(無憂鬱) <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(正向)<br>屬於正常範圍，請繼續保持~';
        } elseif ($Detect == -1) {
          echo '您的貝克分析量表結果為 : 正常(無憂鬱) <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(負向)<br>您的文字語氣顯示您內心不是十分平靜，建議能多出去走走';
        }
      } elseif ($Quest == 1) {
        if ($Detect == 0 || $Detect == 1) {
          echo '您的貝克分析量表結果為 : 輕度憂鬱  <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(正向)<br>顯示您雖然內心不甚平靜，但冷靜下來寫的文章還是偏向正向的。<br>代表您內心還充滿力量，或許你需掉的是身旁人的一點幫助。';
        } elseif ($Detect == -1) {
          echo '您的貝克分析量表結果為 : 輕度憂鬱 <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(負向)<br>輕度憂鬱的您，文章也較為負面，您或許需要更多專業的協助';
        }
      } elseif ($Quest == 2) {
        if ($Detect == 0 || $Detect == 1) {
          echo '您的貝克分析量表結果為 : 中度憂鬱  <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(正向)<br>顯示您雖然內心不甚平靜，但冷靜下來寫的文章還是偏向正向的。<br>代表您內心還充滿力量，或許你需掉的是身旁人的一點幫助。';
        } elseif ($Detect == -1) {
          echo '您的貝克分析量表結果為 : 中度憂鬱 <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(負向)<br>中度憂鬱的您，文章也較為負面，您或許需要更多專業的協助';
        }
      } elseif ($Quest == 3) {
        if ($Detect == 0 || $Detect == 1) {
          echo '您的貝克分析量表結果為 : 重度憂鬱  <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(正向)<br>您仍然需要立即的協助，或許北護諮室可以幫助到您<br>防自殺專線 XXXX-XXXXXX';
        } elseif ($Detect == -1) {
          echo '您的貝克分析量表結果為 : 重度憂鬱 <br> Ai文章分析您的情緒傾向分為 : ' . strval($text_re_data) . '(負向)<br>您仍然需要立即的協助，或許北護諮室可以幫助到您<br>防自殺專線 XXXX-XXXXXX';
        }
      }
    }
    ?>
</body>

</html>