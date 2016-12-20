<?php session_start();?>
<!DOCTYPE html>
<html>
  
  <head>

      <?php include_once('Includes/head_data.php');?>
	  <link href="selectstyle.css" rel="stylesheet" type="text/css" />
	  <title>Movies Selection Page</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <?php include_once('Includes/moviesselection_js.php');?>
	  
  </head>

  <body>
	
    <?php include_once('Includes/header.php');include_once('Includes/navbar.php');?>
    
    <main>
    	<div class="block1">
	
			<select id='movie'>
				<option value=''>All movies</option>
				<option value='AC'>MI: Rouge Nation</option>
				<option value='AF'>Girlhood</option>
				<option value='CH'>Inside Out</option>
				<option value='RC'>Trainwreck</option>
			</select>
			<select id='day'>
				<option value=''>Any Day</option>
				<option value='Monday'>Monday</option>
				<option value='Tuesday'>Tuesday</option>
				<option value='Wednesday'>Wednesday</option>
				<option value='Thursday'>Thursday</option>
				<option value='Saturday'>Saturday</option>
				<option value='Sunday'>Sunday</option>
			</select>
			<button id='movie-search'>Search for movies</button>

			<div id='data'>
			
			</div>
		</div>
    </main>

    <?php include_once('Includes/footer.php');?>
  
  </body>

</html>