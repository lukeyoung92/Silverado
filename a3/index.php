<?php session_start()?>
<!DOCTYPE html>
<html>
  
  <head>
    <?php include_once('Includes/head_data.php');?>
	
	  <title>Homepage</title>
  </head>

  <body>

    <?php include_once('Includes/header.php');include_once('Includes/navbar.php');?>
    
    <main>
      <div class="block1">
        <h1>
          Silverado Grand Re-opening!
        </h1>
        <div class="block2">
          <p>
            At long last, your local cinema the Silverado opens its doors and welcomes you back to experience the magic of movies in style. 
            <br><br>
            We present to you our new range of seating that will offer you more options style and comfort in an effort to provide our loyal and new customers alike with a premium movie expreience.
          </p>

          <!-- Original image below sourced for educational purposes: http://images.entertainment.ie/images_content/rectangle/620x372/beanbagcinema.jpg -->
          <img src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/seat1.png" alt="Bean Bag Seat" width="30%">
          <!-- Original image below sourced for educational purposes: http://www.figueras.com/images/product/products_45_13764056594.jpg -->
          <img src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/seat2.png" alt="Premium Seat" width="30%">
          <!-- Original image below sourced for educational purposes: http://fercoseating.com/v2/wp-content/uploads/2012/04/milano-crop.jpg -->
          <img src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/seat3.png" alt="Standard Seat" width="30%">
        </div class="news2">
      </div>
      <div class="block1">
        <h1>
          Renovations In Progress
        </h1>
        <div class="block2">
          <!-- Original image below sourced for educational purposes: http://chiphouston.com/wp-content/uploads/2015/03/work-in-progress.png -->
          <img src="http://titan.csit.rmit.edu.au/~s3330458/wp/a2/Images/wip.png" alt="Work In Progress" width="50%">
          <p>
            Renovations are underway and the Silverado plans to bring you he lates and greatest in cinema and film technology. We plan to introduce new seat designs for a more comfortable viewing experience, 3D projection technology that will allow us to offer more types of movies and give the you more choices than ever and integrate a Dolby Sound System that will take your audio visual journey to the next level.
          </p>

        </div>
      </div>
      <div class="block1" id="newslast">
        <h1>
          Website Redesign
        </h1>
        <div class="block2">
          <p>
            Silverado Cinema presents to you its sleek new website design.
          </p>
        </div>
      </div>
    </main>

    <?php include_once('Includes/footer.php');?>
  
  </body>

</html>