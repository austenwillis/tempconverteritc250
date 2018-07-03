<?php 
    if (!isset($fahrenheit)) { $fahrenheit = ''; } 
    if (!isset($celsius)) { $celsius = ''; } 
    if (!isset($kelvin)) { $kelvin = ''; } 
    

 $fahrenheit = filter_input(INPUT_POST, 'fahrenheit',
        FILTER_VALIDATE_FLOAT);
    $celsius = filter_input(INPUT_POST, 'celsius',
        FILTER_VALIDATE_FLOAT);
    $kelvin = filter_input(INPUT_POST, 'kelvin',
        FILTER_VALIDATE_INT);
    
 

 
   $celsius  = 5/9 * ($fahrenheit - 32);
   $fahrenheit = ($celsius * 9/5)+32;
   $kelvin = ($fahrenheit - 32) * 5/9 + 273.15;
   
    $fahrenheit_f = ''.number_format($fahrenheit, 2);
    $celsius_f = ''.number_format($celsius, 2);
    $kelvin_f = ''.number_format($kelvin, 2);


?> 
<!DOCTYPE html>
<html>
<head>
    <title>Temperature Conversion Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h3>Temperature Conversion Calculator</h3>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="#" method="post">

        <div id="data">
            <label>Fahrenheit:</label>
            <input type="text" name="fahrenheit"
                   value="<?php echo htmlspecialchars($fahrenheit); ?>">
            <br>

            <label>Celsius:</label>
            <input type="text" name="celsius"
                   value="<?php echo htmlspecialchars(""); ?>">
            <br>

            <label>Kelvin:</label>
            <input type="text" name="kelvin"
                   value="<?php echo htmlspecialchars(""); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
        
        <label>Fahrenheit:</label>
        <span><?php echo $fahrenheit_f; ?></span><br>

        <label>Celsius:</label>
        <span><?php echo $celsius_f; ?></span><br>

        <label>Kelvin:</label>
        <span><?php echo $kelvin_f ; ?></span><br>

    
        <br>
        
    </main>
</body>
</html>