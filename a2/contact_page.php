<!DOCTYPE html>
<html>
  
  <head>
        <link href="mystyle.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A2 Silverado">
	<meta name="author" content="Aaron and Luke">
	
	<title>Contact Us</title>
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
      <div class = "news1">
        <h1>Contact Info</h1>
        <div class = "news2">
          <form action='http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php' method='post'>
          Email Address:<br>
          <input class="contact" type="text" name="email" required>
          <br><br>
          Contact Type:<br>
          <input type="radio" name="subject" value="General Enquiry" checked> General Enquiry
          <br>
          <input type="radio" name="subject" value="Group and Corporate Bookings"> Group and Corporate Bookings
          <br>
          <input type="radio" name="subject" value="Suggestions and Complaints"> Suggestions and Complaints
          <br><br>
          Message: <br>
          <textarea name="message" required rows="5" cols="60"></textarea>
          <br><br>
          <input class="contact" type="submit">
          </form>

        </div>

      </div>
    </main>

    <footer>
      <li>Silverado Cinema &copy Luke Young(s3330458)</li>
    </footer>
  
  </body>

</html>