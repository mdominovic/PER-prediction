<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>PER Prediction</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

    
<body>

    <header class="header"> 
        <div class="textHbig"> 
            Player Efficiency Rating (PER) Prediction.
        </div>
        <div class="textHsmall">
            Depending on input, website predicts next year PER.
        </div>
    
    </header>
    <div class="gallery">
  <a href="lebron.php">
    <img src="jamesle01.png" alt="lebron" width="300" height="200">
  </a>
  <div class="desc">2015/2016 season</div>
</div>
    <form class="form" method="post">
        <h2>Enter stats:</h2>
        <p name="FG" type="FG:"><input name="FG" placeholder=""></p>
        <p name="STL" type="STL:"><input name="STL" placeholder=""></p>
        <p name="3P" type="3P:"><input name="3P" placeholder=""></p>
        <p name="FT" type="FT:"><input name="FT" placeholder=""></p>
        <p name="BLK" type="BLK:"><input name="BLK" placeholder=""></p>
        <p name="ORB" type="ORB:"><input name="ORB" placeholder=""></p>
        <p name="AST" type="AST:"><input name="AST" placeholder=""></p>
        <p name="DRB" type="DRB:"><input name="DRB" placeholder=""></p>
        <p name="PF" type="PF:"><input name="PF" placeholder=""></p>
        <p name="FT_MISS" type="FT MISS:" class="ftfgmiss"><input class="inputftfgmiss" name="FT_MISS" placeholder=""></p>
        <p name="FG_MISS" type="FG MISS:" class="ftfgmiss"><input class="inputftfgmiss" name="FG_MISS" placeholder=""></p>
        <p name="TOV" type="TOV:"><input name="TOV" placeholder=""></p>
        
        <button type="submit" name="submit" value="send">Submit</button>
        
        <div class="made">
            <span>Made by:</span>
            <span>Davor Buha, Mislav Dominović</span> 
        </div>
    </form>
<?php


session_start();
session_unset();
$properties;
$values;
if(isset($_POST["submit"]))
{
    $fg = $_POST["FG"];
    $_SESSION["fg"] = $fg;
    $tp = $_POST["3P"];
    $_SESSION["tp"] = $tp;
    $stl = $_POST["STL"];
    $_SESSION["stl"] = $stl;
    $ft = $_POST["FT"];
    $_SESSION["ft"] = $ft;
    $blk = $_POST["BLK"];
    $_SESSION["blk"] = $blk;
    $orb = $_POST["ORB"];
    $_SESSION["orb"] = $orb;
    $ast = $_POST["AST"];
    $_SESSION["ast"] = $ast;
    $drb = $_POST["DRB"];
    $_SESSION["drb"] = $drb;
    $pf = $_POST["PF"];
    $_SESSION["pf"] = $pf;
    $fg_miss = $_POST["FG_MISS"];
    $_SESSION["fg_miss"] = $fg_miss;
    $ft_miss = $_POST["FT_MISS"];
    $_SESSION["ft_miss"] = $ft_miss;
    $tov = $_POST["TOV"];
    $_SESSION["tov"] = $tov;
    $properties = $_POST;
    $properties = $_POST;
    unset($properties["submit"]);
    $properties = array("Player Name" => "Daki") + $properties + array('nextPER' => 0);;
    $values = array_values($properties);
    $properties = array_keys($properties);
}
if(isset($properties)){
    include_once("get_result.php");
}

?>
  
</body>
</html>
