<?php

    $con = mysqli_connect("localhost", "root", "", "sample_form") or die(mysqli_error($con));
    
    if(isset($_POST['submit']))
    {
        $text = $_POST['text'];
        $term = $_POST['tandc'];
        $branch = $_POST['branch'];
        
        $sql_query = "insert into userdata(text,term,branch) values ('$text','$term','$branch')";
        
        $sql_res = mysqli_query($con, $sql_query);
        
        
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sample Form</title>
        
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
        <div class="col-xs-4 col-xs-offset-4">
            <form class="form-group" action="index.php" method="post">
                <label for="text">Enter Your text:</label>
                <input type="text" class="form-control" placeholder="Your text" name="text">
                
                <input type="checkbox"  name="tandc" value="yes" required="true">
                
                <label for="tandc">Term And Condition</label>
                <br>
                <label for="branch">Select Branch:</label>
                <select name="branch" class="form-control">
                    <option value="">Select Branch</option>
                    <option value="Computer">Computer</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Chemical">Chemical</option>
                    <option value="Electrical">Electrical</option>
                </select>
                
                <button class="btn btn-success" name="submit">Submit</button>
                
                <a href="display.php" target="_blank" class="btn btn-primary">Check Data</a>
                
                <?php if(isset($_POST['submit']))
                {
                    echo 'Submitted Successfully...!';
                }
?>
            </form>
        </div>
    </body>
</html>

