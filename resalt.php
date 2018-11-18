<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resalt.css">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="resalt.js"></script> -->
    <embed src="sounds/gacha_melody.wav" autoStart=true hidden=true>
</head>

<body>
<div class="card">
<p class="text" id="text"></p>
<?php
    $random = rand(1,500);
    // 1_500
    if($random==1){
        echo '<img src="picture/monster/secret/kunishiro.png" alt="" height="550px">';
    }else if($random==2){
        echo '<img src="picture/monster/secret/otogi.png" alt="" height="550px">';
    }else if($random==3){
        echo '<img src="picture/monster/secret/sakura.png" alt="" height="550px">';
    }else if($random==4){
        echo '<img src="picture/monster/secret/yuduki.png" alt="" height="550px">';
    }else if($random==5){
        echo '<img src="picture/monster/secret/yukime.png" alt="" height="550px">';
    }else if($random<=7){
        echo '<img src="picture/monster/s_rare/sinseiryu.png" alt="" height="550px">';
    }else if($random<=9){
        echo '<img src="picture/monster/s_rare/riku.png" alt="" height="550px" >';
    }else if($random<=11){
        echo '<img src="picture/monster/s_rare/tawa.png" alt="" height="550px">';
    }else if($random<=13){
        echo '<img src="picture/monster/s_rare/giruteliakusu.png" alt="" height="550px">';
    }else if($random<=15){
        echo '<img src="picture/monster/s_rare/gogu.png" alt="" height="550px">';
    }else if($random<=17){
        echo '<img src="picture/monster/s_rare/hoshikui.png" alt="" height="550px">';
    }else if($random<=19){
        echo '<img src="picture/monster/s_rare/hosikuuga.png" alt="" height="550px">';
    }else if($random<=21){
        echo '<img src="picture/monster/s_rare/huleitodoragon.png" alt="" height="550px">';
    }else if($random<=23){
        echo '<img src="picture/monster/s_rare/kaosugurihulon.png" alt="" height="550px">';
    }else if($random<=25){
        echo '<img src="picture/monster/s_rare/reviatan.png" alt="" height="550px">';
    }else if($random<=36){
        echo '<img src="picture/monster/rare/archlight.png" alt="" height="550px">';
    }else if($random<=47){
        echo '<img src="picture/monster/rare/bahomet.png" alt="" height="550px">';
    }else if($random<=58){
        echo '<img src="picture/monster/rare/chopper.png" alt="" height="550px">';
    }else if($random<=69){
        echo '<img src="picture/monster/rare/dark_knight.png" alt="" height="550px">';
    }else if($random<=80){
        echo '<img src="picture/monster/rare/death.png" alt="" height="550px">';
    }else if($random<=91){
        echo '<img src="picture/monster/rare/demons_gate.png" alt="" height="550px">';
    }else if($random<=102){
        echo '<img src="picture/monster/rare/dorako.png" alt="" height="550px">';
    }else if($random<=123){
        echo '<img src="picture/monster/rare/dullahan.png" alt="" height="550px">';
    }else if($random<=134){
        echo '<img src="picture/monster/rare/goremu.png" alt="" height="550px">';
    }else if($random<=145){
        echo '<img src="picture/monster/rare/hitokuibako.png" alt="" height="550px">';
    }else if($random<=156){
        echo '<img src="picture/monster/rare/okitune.png" alt="" height="550px">';
    }else if($random<=167){
        echo '<img src="picture/monster/rare/pairomania.png" alt="" height="550px">';
    }else if($random<=178){
        echo '<img src="picture/monster/rare/ren.png" alt="" height="550px">';
    }else if($random<=189){
        echo '<img src="picture/monster/rare/silver_knight.png" alt="" height="550px">';
    }else if($random<=200){
        echo '<img src="picture/monster/rare/yokuryu.png" alt="" height="550px">';
    }else if($random<=220){
        echo '<img src="picture/monster/normal/ariman.png" alt="" height="550px">';        
    }else if($random<=240){
        echo '<img src="picture/monster/normal/bone_knight.png" alt="" height="550px">';
    }else if($random<=260){
        echo '<img src="picture/monster/normal/fire_wisp.png" alt="" height="550px">';
    }else if($random<=280){
        echo '<img src="picture/monster/normal/gargoyle.png" alt="" height="550px">';
    }else if($random<=300){
        echo '<img src="picture/monster/normal/goburin.png" alt="" height="550px">';
    }else if($random<=320){
        echo '<img src="picture/monster/normal/hulangas.png" alt="" height="550px">';
    }else if($random<=340){
        echo '<img src="picture/monster/normal/mammy.png" alt="" height="550px">';
    }else if($random<=360){
        echo '<img src="picture/monster/normal/mimic.png" alt="" height="550px">';
    }else if($random<=380){
        echo '<img src="picture/monster/normal/oku.png" alt="" height="550px">';
    }else if($random<=400){
        echo '<img src="picture/monster/normal/rats.png" alt="" height="550px">';
    }else if($random<=420){
        echo '<img src="picture/monster/normal/reis.png" alt="" height="550px">';
    }else if($random<=440){
        echo '<img src="picture/monster/normal/seahorse.png" alt="" height="550px">';
    }else if($random<=460){
        echo '<img src="picture/monster/normal/shade.png" alt="" height="550px">';
    }else if($random<=480){
        echo '<img src="picture/monster/normal/suraimu.png" alt="" height="550px">';
    }else if($random<=500){
        echo '<img src="picture/monster/normal/woodwarm.png" alt="" height="550px">';
    
    }
?>
</div>
 <!-- <div class="resalt">
<img src="picture/<?php echo $random;?>.jpg">
 0.jpgや１.jpgにする
 </div> -->

 <form method="post" action="resalt_insert.php">
  <!-- <fieldset> -->
     <div hidden="random">
     <!-- class=hidden -->
     <label>画像：<input type="text" name="random" value="<?php echo $random;?>"></label>
     </div>
     <div class="button">
         <button class="button1" type="submit">Button</button>
     </div>
    <!-- </fieldset> -->

</form>
</body>
</html>