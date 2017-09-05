<?php
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
            Player Efficiency Rating (PER) Prediction.
        </div>
        <div class="textHsmall">
            Depending on input, website predicts next year PER.
        </div>
    
    </header>
    
    <table align="center">
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
    
    
    <p class="result">
        Player Efficency Rating:
    <?php
    echo $_SESSION['nextPER'];

    ?>
    </p>
    
</body>
</html>



