<?php
include 'functions.php';

$password_length =  isset($_GET['password_length']) ? intval($_GET['password_length']) : 8;

$lowercase = isset($_GET['has_lowercase']) ? 'abcdefghijklmnopqrstuvwxyz' : '';
$uppercase = isset($_GET['has_uppercase']) ? 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' : '';
$numbers = isset($_GET['has_numbers']) ? '0123456789' : '';
$symbols = isset($_GET['has_symbols']) ? '?!<>-*[]{}/' : '';


$characters = $lowercase . $uppercase . $numbers . $symbols;

// $password = '';



$password = getRandomPassword($password_length, $characters);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="wrapper">
        <h1 class='title'>password generator</h1>
        
            <p class="password"><?php echo $password ?></p>
    
        <form action="" method="get">
            <div class="info">Password length <span id='range-value'></span></div>
            <input  id="range" type="range"  min="1" max="25" value="<?php echo $password_length ?>" name="password_length">
            <p id='range-value'></p>
            
    
            <p class="settings">Password settings</p>
            <div class="option-group">
                <div class="option">
                    <input checked type="checkbox" name="has_lowercase">
                    <label for="has_lowercase">Lowercase [a-z]</label>
                </div>
        
                <div class="option">
                    <input type="checkbox" name="has_uppercase" <?php echo $uppercase ? 'checked' : ''; ?>>
                    <label for="has_uppercase">Uppercase [A-Z]</label>
                </div>
        
                <div class="option">
                    <input type="checkbox" name="has_numbers" <?php echo $numbers ? 'checked' : ''; ?>>
                    <label for="has_numbers">Numbers [0-9]</label>
                </div>
        
                <div class="option">
                    <input type="checkbox" name="has_symbols" <?php echo $symbols ? 'checked' : ''; ?>>
                    <label for="has_symbols">Symbols [?!<>-*]</label>
                </div>
            </div>

            <input type="submit" value="create password">
        </form>
    
        
                
    </div>
           

<script src="script.js"></script>
</body>

</html>