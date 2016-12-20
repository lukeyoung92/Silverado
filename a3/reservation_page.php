<?php include_once('Functions/reservation_functions.php');?>
<!DOCTYPE html>
<html>
  
  <head>
    <?php include_once('Includes/head_data.php');?>
	  <title>Reservation Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php include_once('Includes/reservation_js.php');?>
  </head>

  <body>

    <?php include_once('Includes/header.php');include_once('Includes/navbar.php');?>
    
    <main>
    
    <div class="block1">
    <? print_r($_SESSION['cart']);?>
      <h1>Book Screening</h1>
      <div class="block2">
      <?php echo $bookingMessage; ?>
      
      <form action='reservation_page.php' method='get'>
        <p>Movie<br>
		  <select name='movie' id='movie'>
			<option value=''>All movies</option>
			<option value='AC'>MI: Rouge Nation</option>
			<option value='AF'>Girlhood</option>
			<option value='CH'>Inside Out</option>
			<option value='RC'>Trainwreck</option>
		  </select>
		</p>
		<p>
          Day<br>
          <select name='day' id="day"> 
            <option value=''>Please Select</option>
            <option value='Monday'>Monday</option>
            <option value='Tuesday'>Tuesday</option>
            <option value='Wednesday'>Wednesday</option>
            <option value='Thursday'>Thursday</option>
            <option value='Friday'>Friday</option>
            <option value='Saturday'>Saturday</option>
            <option value='Sunday'>Sunday</option>
          </select>
        </p>
        <p>
          Time<br>
          <select name='time' id="time"> 
            <option value=''>Please Select</option>
            <option value='1PM'>1PM</option>
            <option value='3PM'>3PM</option>
            <option value='6PM'>6PM</option>
            <option value='9PM'>9PM</option>
            <option value='12PM'>12PM</option>
          </select>
        </p>
        <p>
          Adult seats<br>
          <select name='seat[Adult]'> 
            <option value=''>Please Select</option>
            <?php for ($i=1;$i<=10;$i++) echo "<option value=$i>$i</option>"; ?>
          </select>
        </p>
        <p>     
          Child seats<br>
          <select name='seat[Concession]'> 
            <option value='0'>Please Select</option>
            <?php for ($i=1;$i<=10;$i++) echo "<option value=$i>$i</option>"; ?>
          </select>
        </p>
        <p>     
          First Class - Adult seats<br>
          <select name='seat[FAdult]'> 
            <option value='0'>Please Select</option>
            <?php for ($i=1;$i<=10;$i++) echo "<option value=$i>$i</option>"; ?>
          </select>
        </p>
        <p>     
          First Class - Child seats<br>
          <select name='seat[FChild]'> 
            <option value='0'>Please Select</option>
            <?php for ($i=1;$i<=10;$i++) echo "<option value=$i>$i</option>"; ?>
          </select>
        </p>
        <p>     
          Beanbag - Two Adults<br>
          <select name='seat[BeanbagT1]'> 
            <option value='0'>Please Select</option>
            <?php for ($i=1;$i<=10;$i++) echo "<option value=$i>$i</option>"; ?>
          </select>
        </p>
        <p>     
          Beanbag - One Adult + One Child<br>
          <select name='seat[BeanbagT2]'> 
            <option value='0'>Please Select</option>
            <?php for ($i=1;$i<=10;$i++) echo "<option value=$i>$i</option>"; ?>
          </select>
        </p>
        <p>     
          Beanbag - Three Children<br>
          <select name='seat[BeanbagT3]'> 
            <option value='0'>Please Select</option>
            <?php for ($i=1;$i<=10;$i++) echo "<option value=$i>$i</option>"; ?>
          </select>
        </p>
        <p>
          <li><input type='submit' value='Book Tickets'/></li>
        </p>
      </form>
      <?php
      	if(isset($_SESSION['cart'][0]))
      	{
      		echo "<li><form action='http://titan.csit.rmit.edu.au/~s3330458/wp/a3/shoppingcart_page.php'>
          	<input type='submit' value='Go to Cart'/>
        	</form></li>";
        }
       ;?>
    </div>
    </div>
    
    </main>

    <?php include_once('Includes/footer.php');?>
  
  </body>

</html>