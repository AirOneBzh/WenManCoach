<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Profile WMC</title>
  <link rel="stylesheet" href="/assets/css/master.css">
  <link rel="stylesheet" href="/WenManCoach/assets/css/master.css">
  <script src="/WenManCoach/assets/js/master.js"></script>
</head>
<body>
    
<?php include $_SERVER['DOCUMENT_ROOT'].'/ZngWist/assets/php/gen_nav.php';

?>
<div id="card" class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div  class="zng-card" style="min-height:500px">
           <p>
        <h2>Bienvenue<?php echo " ".$_SESSION["zngname"];?></h2>
    <?php
          include $_SERVER['DOCUMENT_ROOT'].'/assets/php/pdo/pdo_users.php';
          $sel->execute(array($_SESSION['zngid']));
          $res=$sel->fetch();
          
          ?>
    membre depuis <?php
function GetDeltaTime($dtTime1, $dtTime2)
{
  $nUXDate1 = strtotime($dtTime1->format("Y-m-d H:i:s"));
  $nUXDate2 = strtotime($dtTime2->format("Y-m-d H:i:s"));

  $nUXDelta = $nUXDate1 - $nUXDate2;
  $strDeltaTime = "" . $nUXDelta/60/60; // sec -> hour
           
  $nPos = strpos($strDeltaTime, ".");
  if (nPos !== false)
    $strDeltaTime = substr($strDeltaTime, 0, $nPos + 3);

  return $strDeltaTime;
}

      echo GetDeltaTime($res['date_insc'],date('Y-m-d H:i:s'));
      ?>
    <br>
    perte de x kg
</p>
         </div>
    </div>
  </div>
</body>
</html>