<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=gazou_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM gazou_table");
$status = $stmt->execute();

//３．データ表示
$random="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $random = $result["random"];


  if($random==1){
    echo '<img src="picture/monster/secret/kunishiro.png" alt="" height="200px">';
}else if($random==2){
    echo '<img src="picture/monster/secret/otogi.png" alt="" height="200px">';
}else if($random==3){
    echo '<img src="picture/monster/secret/sakura.png" alt="" height="200px">';
}else if($random==4){
    echo '<img src="picture/monster/secret/yuduki.png" alt="" height="200px">';
}else if($random==5){
    echo '<img src="picture/monster/secret/yukime.png" alt="" height="200px">';
}else if($random<=7){
    echo '<img src="picture/monster/s_rare/sinseiryu.png" alt="" height="200px">';
}else if($random<=9){
    echo '<img src="picture/monster/s_rare/riku.png" alt="" height="200px" >';
}else if($random<=11){
    echo '<img src="picture/monster/s_rare/tawa.png" alt="" height="200px">';
}else if($random<=13){
    echo '<img src="picture/monster/s_rare/giruteliakusu.png" alt="" height="200px">';
}else if($random<=15){
    echo '<img src="picture/monster/s_rare/gogu.png" alt="" height="200px">';
}else if($random<=17){
    echo '<img src="picture/monster/s_rare/hoshikui.png" alt="" height="200px">';
}else if($random<=19){
    echo '<img src="picture/monster/s_rare/hosikuuga.png" alt="" height="200px">';
}else if($random<=21){
    echo '<img src="picture/monster/s_rare/huleitodoragon.png" alt="" height="200px">';
}else if($random<=23){
    echo '<img src="picture/monster/s_rare/kaosugurihulon.png" alt="" height="200px">';
}else if($random<=25){
    echo '<img src="picture/monster/s_rare/reviatan.png" alt="" height="200px">';
}else if($random<=36){
    echo '<img src="picture/monster/rare/archlight.png" alt="" height="200px">';
}else if($random<=47){
    echo '<img src="picture/monster/rare/bahomet.png" alt="" height="200px">';
}else if($random<=58){
    echo '<img src="picture/monster/rare/chopper.png" alt="" height="200px">';
}else if($random<=69){
    echo '<img src="picture/monster/rare/dark_knight.png" alt="" height="200px">';
}else if($random<=80){
    echo '<img src="picture/monster/rare/death.png" alt="" height="200px">';
}else if($random<=91){
    echo '<img src="picture/monster/rare/demons_gate.png" alt="" height="200px">';
}else if($random<=102){
    echo '<img src="picture/monster/rare/dorako.png" alt="" height="200px">';
}else if($random<=123){
    echo '<img src="picture/monster/rare/dullahan.png" alt="" height="200px">';
}else if($random<=134){
    echo '<img src="picture/monster/rare/goremu.png" alt="" height="200px">';
}else if($random<=145){
    echo '<img src="picture/monster/rare/hitokuibako.png" alt="" height="200px">';
}else if($random<=156){
    echo '<img src="picture/monster/rare/okitune.png" alt="" height="200px">';
}else if($random<=167){
    echo '<img src="picture/monster/rare/pairomania.png" alt="" height="200px">';
}else if($random<=178){
    echo '<img src="picture/monster/rare/ren.png" alt="" height="200px">';
}else if($random<=189){
    echo '<img src="picture/monster/rare/silver_knight.png" alt="" height="200px">';
}else if($random<=200){
    echo '<img src="picture/monster/rare/yokuryu.png" alt="" height="200px">';
}else if($random<=220){
    echo '<img src="picture/monster/normal/ariman.png" alt="" height="200px">';        
}else if($random<=240){
    echo '<img src="picture/monster/normal/bone_knight.png" alt="" height="200px">';
}else if($random<=260){
    echo '<img src="picture/monster/normal/fire_wisp.png" alt="" height="200px">';
}else if($random<=280){
    echo '<img src="picture/monster/normal/gargoyle.png" alt="" height="200px">';
}else if($random<=300){
    echo '<img src="picture/monster/normal/goburin.png" alt="" height="200px">';
}else if($random<=320){
    echo '<img src="picture/monster/normal/hulangas.png" alt="" height="200px">';
}else if($random<=340){
    echo '<img src="picture/monster/normal/mammy.png" alt="" height="200px">';
}else if($random<=360){
    echo '<img src="picture/monster/normal/mimic.png" alt="" height="200px">';
}else if($random<=380){
    echo '<img src="picture/monster/normal/oku.png" alt="" height="200px">';
}else if($random<=400){
    echo '<img src="picture/monster/normal/rats.png" alt="" height="200px">';
}else if($random<=420){
    echo '<img src="picture/monster/normal/reis.png" alt="" height="200px">';
}else if($random<=440){
    echo '<img src="picture/monster/normal/seahorse.png" alt="" height="200px">';
}else if($random<=460){
    echo '<img src="picture/monster/normal/shade.png" alt="" height="200px">';
}else if($random<=480){
    echo '<img src="picture/monster/normal/suraimu.png" alt="" height="200px">';
}else if($random<=500){
    echo '<img src="picture/monster/normal/woodwarm.png" alt="" height="200px">';

}
}
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="randomport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="resalt.css">

<!-- Main[Start] $random-->
<form method="post" action="branch.php">
    <div>
        <div class="button">
             <button class="button1" type="submit" >戻る</button>
        </div>
    </div>
</form>

<!-- Main[End] -->

</body>
</html>
