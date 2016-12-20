<script>
	$(document).ready(function(){
		$("#movie").change(function(){
			console.log($(this).val());
				if ($(this).val() == 'AC') 
				{
					$("#day option[value='Monday']").hide();
					$("#day option[value='Tuesday']").hide();
					$("#day option[value='Wednesday']").show();
					$("#day option[value='Thursday']").show();
					$("#day option[value='Friday']").show();
					$("#day option[value='Saturday']").show();
					$("#day option[value='Sunday']").show();
          $("#time option[value='1PM']").hide();
          $("#time option[value='3PM']").hide();
          $("#time option[value='6PM']").hide();
          $("#time option[value='9PM']").show();
          $("#time option[value='12PM']").hide();

				}
				else if ($(this).val() == 'AF') 
				{
					$("#day option[value='Monday']").show();
					$("#day option[value='Tuesday']").show();
					$("#day option[value='Wednesday']").hide();
					$("#day option[value='Thursday']").hide();
					$("#day option[value='Friday']").hide();
					$("#day option[value='Saturday']").show();
					$("#day option[value='Sunday']").show();
          $("#time option[value='1PM']").hide();
          $("#time option[value='3PM']").hide();
          $("#time option[value='6PM']").show();
          $("#time option[value='9PM']").hide();
          $("#time option[value='12PM']").hide();
				}
				else if ($(this).val() == 'CH') 
				{
					$("#day option[value='Monday']").show();
					$("#day option[value='Tuesday']").show();
					$("#day option[value='Wednesday']").show();
					$("#day option[value='Thursday']").show();
					$("#day option[value='Friday']").show();
					$("#day option[value='Saturday']").show();
					$("#day option[value='Sunday']").show();
          $("#time option[value='1PM']").show();
          $("#time option[value='3PM']").hide();
          $("#time option[value='6PM']").show();
          $("#time option[value='9PM']").hide();
          $("#time option[value='12PM']").show();
				}
				else if ($(this).val() == 'RC') 
				{
					$("#day option[value='Monday']").show();
					$("#day option[value='Tuesday']").show();
					$("#day option[value='Wednesday']").show();
					$("#day option[value='Thursday']").show();
					$("#day option[value='Friday']").show();
					$("#day option[value='Saturday']").show();
					$("#day option[value='Sunday']").show();
          $("#time option[value='1PM']").show();
          $("#time option[value='3PM']").hide();
          $("#time option[value='6PM']").show();
          $("#time option[value='9PM']").show();
          $("#time option[value='12PM']").hide();
				}
		})
	})
		
	</script>