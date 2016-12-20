<script>
	  
		$(document).ready(function () {
		  $("#movie-search").click(function () {
			$.post("https://titan.csit.rmit.edu.au/~e54061/wp/moviesHTML.php", {
				movie: $("#movie").val(),
				day: $("#day").val(),
			  },
			  function (data) {
				$('#data').html(data);
					$( "#MS_MOVIE_RC" ).append( "<details> <summary>View More</summary> <p>Screenings: <br> Monday: 9PM <br> Tuesday: 9PM <br> Wednesday: 1PM <br> Thursday: 1PM <br> Friday: 1PM <br> Saturday: 6PM <br> Sunday: 6PM </p> <video src='https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/RC.mp4' controls> </details>" + "<a href='http://titan.csit.rmit.edu.au/~s3330458/wp/a3/reservation_page.php'>Reservation</a>" );
					$( "#MS_MOVIE_CH" ).append( "<details> <summary>View More</summary> <p>Screenings: <br> Monday: 1PM <br> Tuesday: 1PM <br> Wednesday: 6PM <br> Thursday: 6PM <br> Friday: 6PM <br> Saturday: 12PM <br> Sunday: 12PM </p> <video src='https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/CH.mp4' controls> </details>" + "<a href='http://titan.csit.rmit.edu.au/~s3330458/wp/a3/reservation_page.php'>Reservation</a>" );
					$( "#MS_MOVIE_AC" ).append( "<details> <summary>View More</summary> <p>Screenings: <br> Monday: Not Showing <br> Tuesday: Not Showing <br> Wednesday: 9PM <br> Thursday: 9PM <br> Friday: 9PM <br> Saturday: 9PM <br> Sunday: 9PM</p> <video src='https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/AC.mp4' controls> </details>" + "<a href='http://titan.csit.rmit.edu.au/~s3330458/wp/a3/reservation_page.php'>Reservation</a>" );
					$( "#MS_MOVIE_AF" ).append( "<details> <summary>View More</summary> <p>Screenings: <br> Monday: 6PM <br> Tuesday: 6PM <br> Wednesday: Not Showing <br> Thursday: Not Showing <br> Friday: Not Showing <br> Saturday: 6PM <br> Sunday: 6PM </p> <video src='https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/AF.mp4' controls> </details>" + "<a href='http://titan.csit.rmit.edu.au/~s3330458/wp/a3/reservation_page.php'>Reservation</a>" );
			  });
		  });
		  
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
				}
		})		  
		  
		});

</script>