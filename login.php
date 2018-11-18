<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<embed src="sounds/title_music.mp3" autoStart=true loop=true hidden=true>
<form method="post" action="insert.php">
  <div class="login">
   <fieldset>
   <p class="main">
     <img src="picture/title4.png" alt="">
    <legend></legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>mail：<input type="text" name="email"></label><br>
     <label>年齢：<input type="number" name="old"></label><br>
     <label>性別：<input type="text" name="sex"></label><br>
     <!-- 性別はラジオボタンにする -->
     <p class=button><input type="submit" value="ログイン" style="cursor:pointer"></p>
    </fieldset>
    </p>
  </div>
</form>
</body>
</html>