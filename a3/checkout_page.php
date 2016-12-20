<?php include_once('Functions/checkout_functions.php');?>
<!DOCTYPE html>
<html>
  
  <head>
    <?php include_once('Includes/head_data.php');?>
	  <title>Checkout Page</title>
  </head>

  <body>

    <?php include_once('Includes/header.php');include_once('Includes/navbar.php');?>
    
    <main>
      <div class="block1">
        <h1>Customer Details</h1>
        <div class="block2">
          <form action='' method='post'>
            First Name:<br>
            <input type="text" name="fname" pattern="^[A-Za-z]+$" required>
            <br><br>
			      Last Name:<br>
            <input type="text" name="lname" pattern="^[A-Za-z]+$" required>
            <br><br>
            Email Address:<br>
            <input type="email" name="email" required>
            <br><br>
            Phone Number:<br>
            <input type="text" name="phone" pattern="^[04][0-9]{9}|[04][0-9]{2}[ ]{1}[0-9]{3}[ ]{1}[0-9]{3}$" required>
            <br><br>
            <li><input type="submit"></li>
          </form>

          <li><form action="http://titan.csit.rmit.edu.au/~s3330458/wp/a3/shoppingcart_page.php">
          <input type='submit' value='Return to Cart'/>
          </form></li>

          <?php saveData(); ?>

        </div>
      </div>
    </main>

    <?php include_once('Includes/footer.php');?>
  
  </body>

</html>