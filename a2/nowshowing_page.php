<!DOCTYPE html>
<html>
  
  <head>
    <link href="mystyle.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A2 Silverado">
	<meta name="author" content="Aaron and Luke">
	
	<title>Now Showing</title>
	
<script type="text/javascript">

	function toggle(el, al) 
	{
		//credit @ http://www.webdeveloper.com/forum/showthread.php?21673-Javascript-to-change-display-properties-of-DIVs , POST 3
		myEl = document.getElementById(el);
		myEl.style.display = (myEl.style.display == 'flex') ? 'none' : 'flex';
	};
	
</script>

  </head>

  <body>
    
    <header>
        <img id="logo" src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/Silverado1.png" alt="Silverado Cinema">
    </header>
    
    <nav>
	    <ul>
           <li><form action="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/home_page.php"><input id="shiny" type="submit" value="Home Page" /></form></li>
           <li><form action="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/nowshowing_page.php"><input id="shiny" type="submit" value="Now Showing" /></form></li>
           <li><form action="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/booking_page.php"><input id="shiny" type="submit" value="Booking Page" /></form></li>
           <li><form action="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/contact_page.php"><input id="shiny" type="submit" value="Contact Page" /></form></li>
	    </ul>
    </nav>
    
    <main>
	
        <div class = "movies">
	  
	        <img class="pic" src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/Ant-Man1.png" alt="Ant-Man" height="203" width="200">
	        <table class="description">
		        <tr>
		        <th>Title:</th>
		        <td>Antman</td>
		        </tr>
		        <tr>
		        <th>Genre:</th>
		        <td>Action</td>
		        </tr>
		        <tr>
		        <th>Rating:</th>
		        <td>MA15+</td>
		        </tr>
		        <tr>
		        <th>Description:</th>
		        <td>Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, plan and pull off a heist that will save the world.</td>
	        	</tr>
	  	    </table>
		
		<br><br>
		<button class="schbut" onclick="toggle('antsch');">Show/Hide Schedule</button>
		<br>
		
		<div class="extra">
		<br>
		    <table id="antsch">
		        <tr>
		        <th>Monday:</th>
				<td>Not showing</td>
				</tr>
				<tr>
				<th>Tuesday:</th>
				<td>Not showing</td>
				</tr>
				<tr>
				<th>Wednesday:</th>
				<td>9PM</td>
				</tr>
				<tr>
				<th>Thursday:</th>
				<td>9PM</td>
				</tr>
				<tr>
				<th>Friday:</th>
				<td>9PM</td>
				</tr>
				<tr>
				<th>Saturday:</th>
				<td>9PM</td>
				</tr>
				<tr>
				<th>Sunday:</th>
				<td>9PM</td>
				</tr>
			</table>
		</div>
		
		<br>
		<a class="book" href="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/booking_page.php">Book Now!</a>
		<br><br><br>
      </div>
	  <br>
	  
       <div class = "movies">
	  
			<img class="pic" src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/Minions1.png" alt="Minions" "height="203" width="200">
			<table class="description">
				<tr>
				<th>Title:</th>
				<td>Minons</td>
				</tr>
				<tr>
				<th>Genre:</th>
				<td>Childrens</td>
				</tr>
				<tr>
				<th>Rating:</th>
				<td>G</td>
				</tr>
				<tr>
				<th>Description:</th>
				<td>Minions Stuart, Kevin and Bob are recruited by Scarlett Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.</td>
				</tr>
			</table>
		
		<br><br><br>
		<button class="schbut" onclick="toggle('minsch');">Show/Hide Schedule</button>
		<br>
		
		<div class="extra">
		<br>
			<table id="minsch">
				<tr>
				<th>Monday:</th>
				<td>1PM</td>
				</tr>
				<tr>
				<th>Tuesday:</th>
				<td>1PM</td>
				</tr>
				<tr>
				<th>Wednesday:</th>
				<td>6PM</td>
				</tr>
				<tr>
				<th>Thursday:</th>
				<td>6PM</td>
				</tr>
				<tr>
				<th>Friday:</th>
				<td>6PM</td>
				</tr>
				<tr>
				<th>Saturday:</th>
				<td>12PM</td>
				</tr>
				<tr>
				<th>Sunday:</th>
				<td>12PM</td>
				</tr>
			</table>
		</div>
		
		<br>
		<a class="book" href="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/booking_page.php">Book Now!</a>
		<br><br><br>
      </div>
	  <br>
	  
	  <div class = "movies">
	  
			<img class="pic" src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/Timbuktu1.png" alt="Timbuktu" "height="203" width="200">
			<table class="description">
				<tr>
				  <th>Title:</th>
				  <td>Timbuktu</td>
				</tr>
				<tr>
				  <th>Genre:</th>
				  <td>Foreign Film</td>
				</tr>
				<tr>
				  <th>Rating:</th>
				  <td>PG-13</td>
				</tr>
				<tr>
				  <th>Description:</th>
				  <td>A cattle herder and his family who reside in the dunes of Timbuktu find their quiet lives -- which are typically free of the Jihadists determined to control their faith -- abruptly disturbed.</td>
				</tr>
			</table>
		
		<br><br><br>
		<button class="schbut" onclick="toggle('timsch');">Show/Hide Schedule</button>
		<br>
		
		<div class="extra">
		<br>
			<table id="timsch">
				<tr>
				<th>Monday:</th>
				<td>6PM</td>
				</tr>
				<tr>
				<th>Tuesday:</th>
				<td>6PM</td>
				</tr>
				<tr>
				<th>Wednesday:</th>
				<td>Not Showing</td>
				</tr>
				<tr>
				<th>Thursday:</th>
				<td>Not Showing</td>
				</tr>
				<tr>
				<th>Friday:</th>
				<td>Not Showing</td>
				</tr>
				<tr>
				<th>Saturday:</th>
				<td>3PM</td>
				</tr>
				<tr>
				<th>Sunday:</th>
				<td>3PM</td>
				</tr>
			</table>
		</div>
		
		<br>
		<a class="book" href="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/booking_page.php">Book Now!</a>
		<br><br><br>
      </div>
	  <br>
	  	  
	  <div class = "movies">
	  
			<img class="pic" src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/Trainwreck1.png" alt="Trainwreck" height="203" width="200">
			<table class="description">
				<tr>
				  <th>Title:</th>
				  <td>Trainwreck</td>
				</tr>
				<tr>
				  <th>Genre:</th>
				  <td>Comedy Romance</td>
				</tr>
				<tr>
				  <th>Rating:</th>
				  <td>R</td>
				</tr>
				<tr>
				  <th>Description:</th>
				  <td>Having thought that monogamy was never possible, a commitment-phobic career woman may have to face her fears when she meets a good guy.</td>
				</tr>
			</table>
		
		<br><br><br>
		<button class="schbut" onclick="toggle('trainsch');">Show/Hide Schedule</button>
		<br>
		
		<div class="extra">
		<br>
			<table id="trainsch">
				<tr>
				<th>Monday:</th>
				<td>9PM</td>
				</tr>
				<tr>
				<th>Tuesday:</th>
				<td>9PM</td>
				</tr>
				<tr>
				<th>Wednesday:</th>
				<td>1PM</td>
				</tr>
				<tr>
				<th>Thursday:</th>
				<td>1PM</td>
				</tr>
				<tr>
				<th>Friday:</th>
				<td>1PM</td>
				</tr>
				<tr>
				<th>Saturday:</th>
				<td>6PM</td>
				</tr>
				<tr>
				<th>Sunday:</th>
				<td>6PM</td>
				</tr>
			</table>
		</div>
		
		<br>
		<a class="book" href="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/booking_page.php">Book Now!</a>
		<br><br><br>
      </div>
	  <br>
	  
    </main>

    <footer>
      <li>Silverado Cinema &copy Luke Young(s3330458)</li>
    </footer>
  
  </body>

</html>