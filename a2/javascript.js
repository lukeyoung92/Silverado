	function calculatePrice(button)
	{
		var numSeats;
		var seatprice;
		seatprice=12;
		
		if(button == '-')
			{
				numSeats = parseInt(document.getElementById('seats').value);
				if(numSeats>0)
				{
					document.getElementById('seats').value--;
					numSeats = parseInt(document.getElementById('seats').value);
					document.getElementById('price').value = numSeats*seatprice;
					document.getElementById('total').value = document.getElementById('price').value;
				}
			}
		else if(button == '+')
			{
				    document.getElementById('seats').value++;
					numSeats = parseInt(document.getElementById('seats').value);
					document.getElementById('price').value = numSeats*seatprice;
					document.getElementById('total').value = document.getElementById('price').value;
			}
	
		else if(button == '-1')
			{
				numSeats = parseInt(document.getElementById('seats1').value);
				if(numSeats>0)
				{
					document.getElementById('seats1').value--;
				}
			}
		else if(button == '+1')
			{
				document.getElementById('seats1').value++;	
			}
			
		else if(button == '-2')
			{
				numSeats = parseInt(document.getElementById('seats2').value);
				if(numSeats>0)
				{
					document.getElementById('seats2').value--;
				}
			}
			
		else if(button == '+2')
			{
				document.getElementById('seats2').value++;	
			}
			
		else if(button == '-3')
			{
				numSeats = parseInt(document.getElementById('seats3').value);
				if(numSeats>0)
				{
					document.getElementById('seats3').value--;
				}
			}
			
		else if(button == '+3')
			{
				document.getElementById('seats3').value++;	
			}
			
		else if(button == '-4')
			{
				numSeats = parseInt(document.getElementById('seats4').value);
				if(numSeats>0)
				{
					document.getElementById('seats4').value--;
				}
			}
			
		else if(button == '+4')
			{
				document.getElementById('seats4').value++;	
			}
			
		else if(button == '-5')
			{
				numSeats = parseInt(document.getElementById('seats5').value);
				if(numSeats>0)
				{
					document.getElementById('seats5').value--;
				}
			}
			
		else if(button == '+5')
			{
				document.getElementById('seats5').value++;	
			}
			
		else if(button == '-6')
			{
				numSeats = parseInt(document.getElementById('seats6').value);
				if(numSeats>0)
				{
					document.getElementById('seats6').value--;
				}
			}
			
		else if(button == '+6')
			{
				document.getElementById('seats6').value++;	
			}
			
		else if(button == '-7')
			{
				numSeats = parseInt(document.getElementById('seats7').value);
				if(numSeats>0)
				{
					document.getElementById('seats7').value--;
				}
			}
			
		else if(button == '+7')
			{
				document.getElementById('seats7').value++;	
			}		
	}
	
	$(document).ready(function(){
       $("#movie").change(function() 
        {
            if ($(this).val() == 'AC') 
            {
                $("#monday").hide();
                $("#tuesday").hide();
                $("#wednesday").show();
                $("#thursday").show();
                $("#friday").show();
                $("#saturday").show();
                $("#sunday").show();
            }
            if ($(this).val() == 'CH') 
            {
                $("#monday").show();
                $("#tuesday").show();
                $("#wednesday").show();
                $("#thursday").show();
                $("#friday").show();
                $("#saturday").show();
                $("#sunday").show();
            }
            if ($(this).val() == 'AF') 
            {
                $("#monday").show();
                $("#tuesday").show();
                $("#wednesday").hide();
                $("#thursday").hide();
                $("#friday").hide();
                $("#saturday").show();
                $("#sunday").show();
            }
            if ($(this).val() == 'RC') 
            {
                $("#monday").show();
                $("#tuesday").show();
                $("#wednesday").show();
                $("#thursday").show();
                $("#friday").show();
                $("#saturday").show();
                $("#sunday").show();
            }
        });
        $("#movie").change(function()
        {
        	if ($(this).val() == 'monday')
        	{
                if ($("#movie").val == 'AC')
                {
                	
                }
        	}

        });
    });