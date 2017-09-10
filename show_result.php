<?php
ob_start();
session_start();

?>

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
            <a href="index.php">Player Efficiency Rating (PER) Prediction.</a>
        </div>
        <div class="textHsmall">
            Depending on input, website predicts next year PER.
        </div>
    
    </header>
    
    <div class="ime">
        <?php echo $_SESSION["Player_Name"]; ?>
    </div>
    
    <table class="table table-bordered" style="width:70%;" align="center">
  <tr>
    <th class="tbl">FG</th>
    <th class="tbl">STL</th>
    <th class="tbl">3P</th>
    <th class="tbl">FT</th>
    <th class="tbl">BLK</th>
    <th class="tbl">ORB</th>
    <th class="tbl">AST</th>
    <th class="tbl">DRB</th>
    <th class="tbl">PF</th>
    <th class="tbl">FG MISS</th>
    <th class="tbl">FT MISS</th>
    <th class="tbl">TOV</th>
  </tr>
  <tr>
    <td><?php echo $_SESSION["fg"]; ?></td>
    <td><?php echo $_SESSION["stl"]; ?></td>
    <td><?php echo $_SESSION["tp"]; ?></td>
    <td><?php echo $_SESSION["ft"]; ?></td>
    <td><?php echo $_SESSION["blk"]; ?></td>
    <td><?php echo $_SESSION["orb"]; ?></td>
    <td><?php echo $_SESSION["ast"]; ?></td>
    <td><?php echo $_SESSION["drb"]; ?></td>
    <td><?php echo $_SESSION["pf"]; ?></td>
    <td><?php echo $_SESSION["fg_miss"]; ?></td>
    <td><?php echo $_SESSION["ft_miss"]; ?></td>
    <td><?php echo $_SESSION["tov"]; ?></td>
  </tr>
</table>
    
    
    <div class="result">
        Player Efficency Rating:
    <?php
        $_SESSION['nextPER'] = round($_SESSION['nextPER'],2);
        
    echo $_SESSION['nextPER'];

    ?>
    </div>
    
    
    <?php 
        
     
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpredict";
    $pn = $_SESSION['Player_Name'];
    $fg = $_SESSION['fg'];
    $tp = $_SESSION['tp'];
    $stl = $_SESSION['stl'];
    $ft = $_SESSION['ft'];
    $blk = $_SESSION['blk'];
    $orb = $_SESSION['orb'];
    $ast = $_SESSION['ast'];
    $drb = $_SESSION['drb'];
    $pf = $_SESSION['pf'];
    $fg_miss = $_SESSION['fg_miss'];
    $ft_miss = $_SESSION['ft_miss'];
    $tov = $_SESSION['tov'];
    $nextper = $_SESSION['nextPER'];
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql="INSERT INTO players (PlayerName, FG, TP, STL, FT, BLK, ORB, AST, DRB, PF, FG_MISS, FT_MISS, TOV, NEXTPER) VALUES ('$pn',$fg,$tp,$stl,$ft,$blk,$orb,$ast,$drb,$pf,$fg_miss,$ft_miss,$tov,$nextper)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    $conn->close();
    
    ?>
    
</body>
</html>



