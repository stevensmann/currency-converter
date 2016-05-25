<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Currency Converter</title>

		<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
	</head>

	<body>

		<header class="header">
			<h1>Currency Converter</h1>
			<h2>Using the Fixer.io API for up-to-date currency conversion rates</h2>
		</header>


		<form class="conversionForm">

			<section class="conversionForm__amount">
				<label>Amount:</label>
				<input type="number" class="currencyValue">
			</section>

			<section class="conversionForm__currencies">

				<div class="conversionForm__from">
					<label>From:</label>
					<select class="convertFrom">
					</select>
				</div>

				<div class="conversionForm__to">
					<label>To:</label>
					<select class="convertTo">
					</select>
				</div>
			</section>


			<input type="submit" value="convert" class="currencySubmit">
		</form>

		<p class="output"></p>

		<h3>Rates are updated daily at 3pm BST</h3>

	</body>

</html>



<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/src/script.js"></script>