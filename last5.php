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
            <a href="index.php">Player Efficiency Rating (PER) Prediction.</a>
        </div>
        <div class="textHsmall">
            Depending on input, website predicts next year PER.
        </div>
    
    </header>
    
    <div class="ime">Last 5 inputs in DB.</div>
    <table class="table table-bordered" style="width:70%;" align="center">
  <tr>
    <th class="tbl">Player name</th>
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
    <th class="tbl">NEXT PER</th>
  </tr>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "perpredict";
            
            
        
            for($i=0; $i<5; $i++){
            $z = "SELECT * FROM players WHERE ID = (SELECT MAX(ID) -".$i." FROM players)";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            $res1 = mysqli_query($conn,$z);
            while($row = mysqli_fetch_array($res1)){
                echo "<tr>
                <td>".$row['PlayerName']."</td>
                <td>".$row['FG']."</td>
                <td>".$row['STL']."</td>
                <td>".$row['TP']."</td>
                <td>".$row['FT']."</td>
                <td>".$row['BLK']."</td>
                <td>".$row['ORB']."</td>
                <td>".$row['AST']."</td>
                <td>".$row['DRB']."</td>
                <td>".$row['PF']."</td>
                <td>".$row['FG_MISS']."</td>
                <td>".$row['FT_MISS']."</td>
                <td>".$row['TOV']."</td>
                <td>".$row['NEXTPER']."</td>
                    </tr>";
            }
                
          
        }?>
</table>
    
</body>
</html>



