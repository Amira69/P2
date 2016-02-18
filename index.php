
<?php
//error_reporting(-1); # Report all PHP errors
//ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="shortcut icon" type="image/x-icon" href="../P1/images/ext_web.png">

    <title>P2 - DWA Spring 2016</title>
 <!--my files-->
    <?php require 'logic.php'; ?>
    <link href="css/style.css" rel="stylesheet">
<!--    <script src="js/script.js"></script> -->

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3">
            <fieldset>
                <legend>Options</legend>
                <form action="index.php" method="POST">
                    <label for="maxwords">Number of Words:</label>
                    <input type="number" min="1" max="9" name="maxwords" id="maxwords" value="1"><br>
                    <label><input type="checkbox" name="number_yes" id="number_yes"> Add Number </label><br>
                    <label><input type="checkbox" name="symbol_yes" id="symbol_yes"> Add Symbol </label><br>
                    <label><input type="checkbox" name="vocab_yes" id="vocab_yes"> Change Vocabulary </label><br>
                    <label><input type="checkbox" name="camel_yes" id="camel_yes"> Camel Case </label><br><br>
                    <input class="btn btn-default" type="submit" value="Generate Password"><br><br>
                </form>
            </fieldset>
        </div>
        <div class="col-lg-8">
            <br>
            <label for="password"> Password Out</label><br>
            <output class="text-left"> <?php echo $password ?> </output>
            <p><br>This is a random password from a selection of word lists by <a
                    href="http://www.paulnoll.com/Books/Clear-English/English-3000-common-words.html">Paulnoll</a> "3000 most common words in American English"</p>
        </div>
    </div>
</div>
<div class="view_banner">
    <div class="danger"> xkcd Password Generator </div>
</div>

<div class="container">
      <img src=" http://imgs.xkcd.com/comics/password_strength.png" alt="Password Strength" id="idea">
</div>

</body>
</html>