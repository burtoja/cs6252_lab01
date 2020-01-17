<?php
// get the data from the form
$starting_balance = filter_input ( INPUT_POST, 'starting_balance', FILTER_VALIDATE_FLOAT );
$monthly_contribution = filter_input ( INPUT_POST, 'monthly_contributions', FILTER_VALIDATE_FLOAT );
$years = filter_input ( INPUT_POST, 'years', FILTER_VALIDATE_INT );
$interest_rate = filter_input ( INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT );

// validate inputs and set up error messages
$error_message_balance = '';
if ($starting_balance === FALSE) {
	$error_message_balance = 'The starting balance must be a valid number.';
} else if ($starting_balance < 0) {
	$error_message_balance = 'The starting balance must be greater than or equal to zero.';
} 


$error_message_contribution = '';
if ($monthly_contribution === FALSE) {
	$error_message_contribution = 'The monthly contribution must be a valid number';
} else if ($monthly_contribution < 0) {
	$error_message_contribution = 'The monthly contribution must be greater than or equal to zero';
} 

$error_message_years = '';
if ($years === FALSE) {
	$error_message_years = 'The time to grow in years must be a valid whole number.';
} else if ($years <= 0) {
	$error_message_years = 'The time to grow must be a number of years greater than zero.';
}

$error_message_rate = '';
if ($interest_rate === FALSE) {
	$error_message_rate = 'The interest rate must be a valid number.';
} else if ($interest_rate <= 0) {
	$error_message_rate = 'The interest rate must be greater than zero.';
}

// if an error is present return to index page with error message
if ($error_message_balance != '' || $error_message_contribution != '' || $error_message_years != '' || $error_message_rate != '') {
	include ('index.php');
	exit ();
}


//initialize current value
$current_value = $starting_balance;

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
		<table>
			<thead>
				<tr>
					<th>Year</th>
					<th>Savings</th>
				</tr>
			</thead>
			<tbody>
			<?php for ($year_number = 1; $year_number <= $years; $year_number++) {;?>
				<tr>
					<td>
						<?php echo $year_number; ?>
					</td>
					<td>
						<?php 
						for ($month_number = 0; $month_number < 12; $month_number++) {
							$current_value = ($current_value + $monthly_contribution) * (1 + (($interest_rate * 0.01) / 12));
						}
						echo "$" . number_format ( $current_value, 2 );
						?>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>

	</main>
</body>
</html>
