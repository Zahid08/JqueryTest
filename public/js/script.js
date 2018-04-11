$(function(){
	$('#search').autocomplete({
		source: '/account/numbers',
		minLength: 3
	});

	$('#acclist').change(function(){
		if($('#acclist').val() == 0)
		{
			$('#displayInfo').hide('slow');
		}
		else
		{
			$.ajax({
				url: '/ajax/accountinfo',
				data:{
					accid: $('#acclist').val()
				},
				success: function(acc){
					$('#displayInfo').show('slow');
					$('#accno').html(acc.accNo);
					$('#accname').html(acc.accName);
					$('#balance').html(acc.balance);
					$('#type').html(acc.typeId);
					$('#lasttran').html(acc.lastTransaction);
				}
			});
		}
	});
})