<!DOCTYPE html>
<html>
  
  <head>
    <link href="mystyle.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A2 Silverado">
	<meta name="author" content="Aaron and Luke">
	<title>Booking</title>
    <script src="javascript.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
	
	<main class="bookpage">
	    <div id="bookform">
	    <form action='http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php' method='post'>
			<table class="bookeas">
			    <tr>
					<th>Movie Name:</th>
					<td>
					    <select name="movie" class="moviechoice"> 
							<option value="AC">Antman</option>
							<option value="CH">Minons</option>
							<option value="AF">Timbuktu</option>
							<option value="RC">Trainwreck</option>
			            </select>
					</td>
				</tr>
			    <tr>
					<th>Session Day:</th>
					<td>
						<select name="day" class="moviechoice"> 
							<option value="monday">Monday</option>
							<option value="tuesday">Tuesday</option>
							<option value="wednesday">Wednesday</option>
							<option value="thursday">Thursday</option>
							<option value="friday">Friday</option>
							<option value="saturday">Saturday</option>
							<option value="sunday">Sunday</option>
						</select>
					</td>
				</tr>
			    <tr>
					<th>Session Time:</th>
					<td>
						<select name="time" class="moviechoice"> 
							<option value="1PM">1PM</option>
							<option value="2PM">12PM</option>
							<option value="3PM">3PM</option>
							<option value="4PM">6PM</option>
							<option value="5PM">9PM</option>
						</select>
					</td>
				</tr>
			</table>
			
			<br><br>
			
			<table class="bookdas">
			    <tr>
					<th>Ticket Type</th>
					<th>Quantity</th>
					<th>Subtotal Price</th>
				</tr>
				<tr>
				    <td>Adult</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="SA" id="seats" />
						<button type="button" class="addmin" onclick="calculatePrice('+')">+</button>
					</td>					
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price" /></td>
				</tr>
				<tr>
				    <td>Concession</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-1')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="SP" id="seats1" />
						<button type="button" class="addmin" onclick="calculatePrice('+1')">+</button>
					</td>
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price1" /></td>
				</tr>
				<tr>
				    <td>Child</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-2')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="SC" id="seats2" />
						<button type="button" class="addmin" onclick="calculatePrice('+2')">+</button>
					</td>
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price2" /></td>
				</tr>
				<tr>
				    <td>First Class Adult</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-3')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="FA" id="seats3" />
						<button type="button" class="addmin" onclick="calculatePrice('+3')">+</button>
					</td>
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price3" /></td>
				</tr>
				<tr>
				    <td>First Class Child</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-4')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="FC" id="seats4" />
						<button type="button" class="addmin" onclick="calculatePrice('+4')">+</button>
					</td>
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price4" /></td>
				</tr>
				<tr>
				    <td>Beanbag - 1 Person</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-5')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="B1" id="seats5" />
						<button type="button" class="addmin" onclick="calculatePrice('+5')">+</button>
					</td>
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price5" /></td>
				</tr>
					<tr>
				    <td>Beanbag - 2 People</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-6')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="B2" id="seats6" />
						<button type="button" class="addmin" onclick="calculatePrice('+6')">+</button>
					</td>
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price6" /></td>
				</tr>
				<tr>
				    <td>Beanbag - 3 People</td>
					<td>
					    <button type="button" class="addmin" onclick="calculatePrice('-7')">-</button>
						<input type="text" size="2" value="0" readonly="readonly" name="B3" id="seats7" />
						<button type="button" class="addmin" onclick="calculatePrice('+7')">+</button>
					</td>	
					<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="price7" /></td>
				</tr>
				<tr>
                <td></td><th>Total</th>
				<td><input type="text" size="6" value="0" readonly="readonly" name="price" id="total" />
				</tr>
			</table>
			
			<br>
			
			<input type="submit" value="Submit">
			</form>
		</div>
	</main>
    

    <footer>
      <li>Silverado Cinema &copy Luke Young(s3330458)</li>
    </footer>
  
  </body>

</html>