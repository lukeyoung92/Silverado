<?php 
session_start();
function printGetStatus()
  {  
    if (empty($_GET))
    {
      echo "<p class='msg'>User coming to page for first time</p>";
    } else {
      echo "<p class='msg'>User has submitted form data</p>";
      echo "<pre class='msg'>\$_GET: ";
      print_r($_GET);
      echo "</pre>";
    }
  }
  function printCartStatus()
  {  
    if ( empty($_SESSION['cart']) )
    {
      echo "<p class='msg'>Nothing in the cart</p>";
    } else {
      echo "<p class='msg'>Server has added form data</p>";
      echo "<pre class='msg'>\$_SESSION['cart']: ";
      print_r($_SESSION['cart']);
      echo "</pre>";
    }
  }

  $bookingMessage='';
  if (!empty($_GET)) 
  { 
    $booking=$_GET; // lazy approach: add everything, even empty data
    $countSeats=0; 
// Check to see if any seats have been booked
    foreach ($booking['seat'] as $seatType => $quantity)
    {
      if (!empty($quantity))
        $countSeats+=$quantity;
      else
      {
        unset($booking['seat'][$seatType]); // remove unbooked seat types
      }
    }
// Add booking to cart if seats have been booked    
    if ($countSeats>0)
    {
      $_SESSION['cart'][]=$booking;
      $bookingMessage .= "<p class='msg'>$countSeats seat(s) added to the cart</p>";
    }
  }
?>