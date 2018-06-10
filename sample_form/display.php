<?php

    $con = mysqli_connect("localhost", "root", "", "sample_form") or die(mysqli_error($con));
    
    $sql_query = "select * from userdata";
    
    $sql_res = mysqli_query($con, $sql_query);
    
    //$row = mysqli_num_rows($sql_res);
    
    //$row_data = mysqli_fetch_array($sql_res);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Display</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    
    <body>
        
        <div class="col-xs-6 col-xs-offset-3 box">
            <?php while ($row_data = mysqli_fetch_array($sql_res))
            {
            ?>
            <div class="row">
            <div class="col-xs-4">
            <h5>Entered Text: </h5>
            </div>
            <div class="col-xs-4">
            <h5><?php echo $row_data['text']; ?> </h5>
            </div>
            </div>
            
            
            <div class="row">
            <div class="col-xs-4">
            <h5>Term and Conditions: </h5>
            </div>
            <div class="col-xs-4">
            <h5><?php echo $row_data['term']; ?> </h5>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-4">
            <h5>Branch: </h5>
            </div>
            <div class="col-xs-4">
                <h5><?php echo $row_data['branch']; ?> </h5>
            </div>
            </div>
            
            <hr>
            <?php
            }
            ?>
        </div>
        
    </body>
</html>
