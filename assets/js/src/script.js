
$(function(){

	// API call
	$.get('http://api.fixer.io/latest?base=ZAR', function(data){

		var countryObject = data.rates;

		// Loop through object, get keys and values
		for(var key in countryObject){
			if(countryObject.hasOwnProperty(key)) {
				$('select').append('<option val="' + key + '">' + key + '</option>');
			}
		}

		// Second API call upon changing base currency
		$('.convertFrom').change(function(){
			var thisValue = $('.convertFrom').val();

			$.get('http://api.fixer.io/latest?base=' + thisValue, function(newData){
				countryObject = newData.rates;
			});
		});

		// Conversion calculation
		$('form').on('submit', function(e){
			e.preventDefault();

			var convertingTo = $('.convertTo').val(),
				toRate = countryObject[convertingTo],
				amount = $('.currencyValue').val();

			var calculation = amount * toRate;

			if(calculation === 0) {
				$('.output').html('Please enter a valid amount.');
			} else {
				$('.output').html(parseFloat(calculation).toFixed(3));
			}
		});

	});

});