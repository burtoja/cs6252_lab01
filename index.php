<?php
if (!isset ($starting_balance)) {
    $starting_balance = '';
}
if (!isset ($monthly_contribution)) {
    $monthly_contribution = '';
}
if (!isset ($years)) {
    $years = '';
}
if (!isset ($interest_rate)) {
    $interest_rate = '';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Savings Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<main>
    <h1>Savings Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <div id="error_message">
            <p class="error"><?php echo $error_message; ?></p>
        </div>
    <?php } ?>
    <form action="display_savings.php" method="post">
        <div id="data">
            <label>Starting balance:</label> 
            <input type="text"
                   name="starting_balance"
                   value="<?php echo htmlspecialchars($starting_balance); ?>">
            <br> 
            <?php if (!empty($error_message_balance)) { ?>
        		<div id="error_message">
            	<span class="error"><?php echo $error_message_balance; ?></span>
        		</div>
    			<?php } ?>
            <br>
            
            <label>Monthly contributions:</label> 
            <input type="text"
                   name="monthly_contributions"
                   value="<?php echo htmlspecialchars($monthly_contribution); ?>"> 
            <br>
            <?php if (!empty($error_message_contribution)) { ?>
        		<div id="error_message">
            	<span class="error"><?php echo $error_message_contribution; ?></span>
        		</div>
    			<?php } ?>
            <br>

            <label>Time to grow in years:</label> 
            <input type="text"
                   name="years" 
                   value="<?php echo htmlspecialchars($years); ?>">
            <br>
            <?php if (!empty($error_message_years)) { ?>
        		<div id="error_message">
            	<span class="error"><?php echo $error_message_years; ?></span>
        		</div>
    			<?php } ?>
            <br>
            
            <label>Annual interest rate (interest is compunded monthly):</label>
            <input type="text" 
            	   name="interest_rate"
                   value="<?php echo htmlspecialchars($interest_rate); ?>"> <br>
			<?php if (!empty($error_message_rate)) { ?>
        		<div id="error_message">
            	<span class="error"><?php echo $error_message_rate; ?></span>
        		</div>
    			<?php } ?>
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label> <input type="submit" value="Calculate"><br>
        </div>

    </form>
</main>
</body>
</html>