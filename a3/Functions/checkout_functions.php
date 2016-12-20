<?php session_start();

  function printCartStatus()
  {  
    if ( empty($_SESSION['cart']) )
    {
      echo "<p class='msg'>Nothing in the cart</p>";
    } 
    else 
    {
      echo "<p class='msg'>Server has added form data</p>";
      echo "<pre class='msg'>\$_SESSION['cart']: ";
      print_r($_SESSION);
      echo "</pre>";
    }
  }

  function saveData()
  {
    if (!empty($_POST))
          {
            $firstname = "First Name: ".$_POST['fname'];
            $lastname = "Last Name: ".$_POST['lname'];
            $emails = "Email: ".$_POST['email'];
            $phoneno = "Phone No.:".$_POST['phone'];
            $_SESSION['fname'] = $_POST['fname'];
            $_SESSION['lname'] = $_POST['lname'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['phone'] = $_POST['phone'];

            echo  
            '<br><span style="color: darkgreen; font-weight: bold;">' . 
            'Tickets have been ordered.' . 
            '</span>';
            echo 
            '<br><br><form action="http://titan.csit.rmit.edu.au/~s3330458/wp/a3/printtickets_page.php" target="_blank"><input type="submit" value="Print Tickets" />';
            
            $file = fopen("data.txt", "w");
            fwrite($file, $firstname);
            fwrite($file, "\n");
            fwrite($file, $lastname);
            fwrite($file, "\n");
            fwrite($file, $emails);
            fwrite($file, "\n");
            fwrite($file, $phoneno);
            fwrite($file, "\n\n");

            $i = 0;
            while(isset($_SESSION['cart'][$i]))
            {
              $cartNo = "Screening: ".$i;
              $pmovie = "Movie: ".$_SESSION['cart'][$i]['movie'];
              $pday = "Day: ".$_SESSION['cart'][$i]['day'];
              $ptime = "Time: ".$_SESSION['cart'][$i]['time'];
              $screenCost = "Screening Cost: ".$_SESSION['cart'][$i]['subtotal'];

              fwrite($file, $cartNo);
              fwrite($file, "\n");
              fwrite($file, $pmovie);
              fwrite($file, "\n");
              fwrite($file, $pday);
              fwrite($file, "\n");
              fwrite($file, $ptime);
              fwrite($file, "\n");
              fwrite($file, $screenCost);
              fwrite($file, "\n");

              if (!empty($_SESSION['cart'][$i]['seat']['Adult']))
              {
                  $pseat = "Adult No.: ".$_SESSION['cart'][$i]['seat']['Adult'];
                  fwrite($file, $pseat);
                  fwrite($file, "\n");
              }

              if (!empty($_SESSION['cart'][$i]['seat']['Concession']))
              {
                  $pseat = "Concession No.: ".$_SESSION['cart'][$i]['seat']['Concession'];
                  fwrite($file, $pseat);
                  fwrite($file, "\n");
              }

              if (!empty($_SESSION['cart'][$i]['seat']['FAdult']))
              {
                  $pseat = "FAdult No.: ".$_SESSION['cart'][$i]['seat']['FAdult'];
                  fwrite($file, $pseat);
                  fwrite($file, "\n");
              }

              if (!empty($_SESSION['cart'][$i]['seat']['FChild']))
              {
                  $pseat = "FChild No.: ".$_SESSION['cart'][$i]['seat']['FChild'];
                  fwrite($file, $pseat);
                  fwrite($file, "\n");
              }

              if (!empty($_SESSION['cart'][$i]['seat']['BeanbagT1']))
              {
                  $pseat = "BeanbagT1 No.: ".$_SESSION['cart'][$i]['seat']['BeanbagT1'];
                  fwrite($file, $pseat);
                  fwrite($file, "\n");
              }

              if (!empty($_SESSION['cart'][$i]['seat']['BeanbagT2']))
              {
                  $pseat = "BeanbagT2 No.: ".$_SESSION['cart'][$i]['seat']['BeanbagT2'];
                  fwrite($file, $pseat);
                  fwrite($file, "\n");
              }

              if (!empty($_SESSION['cart'][$i]['seat']['BeanbagT3']))
              {
                  $pseat = "BeanbagT3 No.: ".$_SESSION['cart'][$i]['seat']['BeanbagT3'];
                  fwrite($file, $pseat);
                  fwrite($file, "\n");
              }
              fwrite($file, "\n");
              $i++;
            }

            $pgrandtotal = "Grand Total: ".$_SESSION['grand-total'];
            fwrite($file, $pgrandtotal);
            fwrite($file, "\n");


            if(isset($_SESSION['voucher'])) 
            {
              $pvoucher = "Voucher: ".$_SESSION['voucher'];
              fwrite($file, $pvoucher);
              fwrite($file, "\n");
            }

          }
  }
;?>