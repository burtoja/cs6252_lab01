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

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

    <title>Savings Calculator</title>
    
    <!-- Bootstrap core CSS -->
  	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
<div class="container">
<div class="card mx-auto w-50">
<div class="card-body bg-light">
    <h1 class="card-title">Savings Calculator</h1>
    <form action="display_savings.php" method="post">
        <div class="form-group">
            <label >Starting balance:</label> 
            <input 	class="form-control"
            		type="text"
                   	name="starting_balance"
                   	value="<?php echo htmlspecialchars($starting_balance); ?>">
                   	            
            <?php if (!empty($error_message_balance)) { ?>
        		<div class="alert alert-danger" role="alert">
            		<?php echo $error_message_balance; ?>
        		</div>
    			<?php } ?>
        </div>
        <div class="form-group">    
            <label>Monthly contributions:</label> 
            <input 	class="form-control"
            		type="text"
                   	name="monthly_contributions"            
                   	value="<?php echo htmlspecialchars($monthly_contribution); ?>"> 
            
            <?php if (!empty($error_message_contribution)) { ?>
        		<div class="alert alert-danger" role="alert">
            		<?php echo $error_message_contribution; ?>
        		</div>
    			<?php } ?>
         </div>
         <div class="form-group">
            <label>Time to grow in years:</label> 
            <input 	class="form-control"
            		type="text"
                   	name="years" 
                   	value="<?php echo htmlspecialchars($years); ?>">
            
            <?php if (!empty($error_message_years)) { ?>
        		<div class="alert alert-danger" role="alert">
            		<?php echo $error_message_years; ?>
        		</div>
    			<?php } ?>
        </div>
        <div class="form-group">    
            <label>Annual interest rate (interest is compunded monthly):</label>
            <input 	class="form-control"
            		type="text" 
            	   	name="interest_rate"
                   	value="<?php echo htmlspecialchars($interest_rate); ?>"> 
			<?php if (!empty($error_message_rate)) { ?>
        		<div class="alert alert-danger" role="alert">
            		<?php echo $error_message_rate; ?>
        		</div>
    			<?php } ?>
        </div>
		<button type="submit" class="btn btn-primary">Calculate</button>

    </form>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>