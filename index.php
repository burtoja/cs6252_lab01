<?php
if (! isset ( $starting_balance )) {
	$starting_balance = '';
}
if (! isset ( $monthly_contributions )) {
	$monthly_contributions = '';
}
if (! isset ( $years )) {
	$years = '';
}
if (! isset ( $interest_rate )) {
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
		<?php if (!empty($error_message)) {?>
		<div id="error_message">
			<p class="error"><?php echo $error_message; ?></p>
		</div>
		<?php }?>
		<form action="display_savings.php" method="post">
			<div id="data">
				<label>Starting balance:</label> <input type="text"
					name="starting_balance"
					value="<?php echo htmlspecialchars($starting_balance); ?>"> <br> <label>Monthly
					contributions:</label> <input type="text"
					name="monthly_contributions"
					value="<?php echo htmlspecialchars($monthly_contributions); ?>"> <br>

				<label>Time to grow in years:</label> <input type="text"
					name="years" value="<?php echo htmlspecialchars($years); ?>"> <br>
				<label>Annual interest rate (interest is compunded monthly):</label>
				<input type="text" name="interest_rate"
					value="<?php echo htmlspecialchars($interest_rate); ?>"> <br>
			</div>

			<div id="buttons">
				<label>&nbsp;</label> <input type="submit" value="Calculate"><br>
			</div>

		</form>
	</main>
</body>
</html>