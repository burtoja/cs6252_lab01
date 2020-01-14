<?php
// get the data from the form
$starting_balance = filter_input ( INPUT_POST, 'starting_balance', FILTER_VALIDATE_FLOAT );
$monthly_contributions = filter_input ( INPUT_POST, 'monthly_contributions', FILTER_VALIDATE_FLOAT );
$years = filter_input ( INPUT_POST, 'years', FILTER_VALIDATE_INT );
$interest_rate = filter_input ( INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT );

// validate inputs
if ($starting_balance == FALSE) {
	$error_message = 'The starting balance must be a valid number.';
} else if ($starting_balance < 0) {
	$error_message = 'The starting balance must be greater than or equal to zero.';
} else if ($monthly_contributions == FALSE) {
	$error_message = 'The monthly contribution must be a valid number';
} else if ($monthly_contributions < 0) {
	$error_message = 'The monthly contribution must be greater than or equal to zero';
} else if ($years == FALSE) {
	$error_message = 'The time to grow in years must be a valid whole number.';
} else if ($years <= 0) {
	$error_message = 'The time to grow must be a number of years greater than zero.';
} else if ($interest_rate == FALSE) {
	$error_message = 'The interest rate must be a valid number.';
} else if ($interest_rate <= 0) {
	$error_message = 'The interest rate must be greater than zero.';
} else {
	$error_message = '';
}

// if an error is present return to index page with error message
if ($error_message != '') {
	include (index.php);
	exit();
}

// apply currency formatting to the dollar and percent amounts
$starting_balance_f = "$" . number_format ( $starting_balance, 2 );
$monthly_contributions_f = "$" . number_format ( $monthly_contributions, 2 );
$interest_rate_f = $interest_rate . "%";



?>
<!DOCTYPE html>
<html>

<head>
<title>Annual Savings</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
	<main>
		<h1>Annual Savings</h1>


	</main>
</body>
</html>
