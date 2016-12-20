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

  function getMovieName($i)
  {
    if($_SESSION['cart'][$i]['movie'] == "AC")
    {
      return "MI: Rouge Nation";   
    }
    if($_SESSION['cart'][$i]['movie'] == "CH")
    {
      return "Inside Out";
    }
    if($_SESSION['cart'][$i]['movie'] == "RC")
    {
      return "Trainwreck";
    }
    if($_SESSION['cart'][$i]['movie'] == "AF")
    {
      return "Girlhood";
    }
  }

  function getSeatQty($i, $seatType)
  {
    return ($_SESSION['cart'][$i]['seat'][$seatType]);
  }

  function getCostSubtotal($i, $seatType)
  {
    $cost = 0.00;
    if (!empty($_SESSION['cart'][$i]['seat'][$seatType]))
    {
    if ($seatType == 'Adult') 
    {
      $cost = $_SESSION['cart'][$i]['seat'][$seatType] * 18.00;
    }
    if ($seatType == 'Concession') 
    {
      $cost = $_SESSION['cart'][$i]['seat'][$seatType] * 12.00;
    }
    if ($seatType == 'FAdult') 
    {
      $cost = $_SESSION['cart'][$i]['seat'][$seatType] * 25.00;
    }
    if ($seatType == 'FChild') 
    {
      $cost = $_SESSION['cart'][$i]['seat'][$seatType] * 20.00;
    }
    if ($seatType == 'BeanbagT1') 
    {
      $cost = $_SESSION['cart'][$i]['seat'][$seatType] * 30.00;
    }
    if ($seatType == 'BeanbagT2') 
    {
      $cost = $_SESSION['cart'][$i]['seat'][$seatType] * 30.00;
    }
    if ($seatType == 'BeanbagT3') 
    {
      $cost = $_SESSION['cart'][$i]['seat'][$seatType] * 30.00;
    }
    }

    return $cost;
  }

  function printTicketHead($i)
  {
    if (!empty($_SESSION['cart'][$i]))
    {
      echo
        '<div>'.
        $_SESSION['fname'].' '.$_SESSION['lname'].'<br>'.
        $_SESSION['email'].'<br>'.
        $_SESSION['phone'].'<br><br>Silverado<br>'.
        getMovieName($i).'<br>'.
        $_SESSION['cart'][$i]['day'].', '.
        $_SESSION['cart'][$i]['time'].'<br><br>';

      if (!empty($_SESSION['cart'][$i]['seat']['Adult']))
      {
        echo
          $_SESSION['cart'][$i]['seat']['Adult'].' x Adult: '."$".getCostSubtotal($i, 'Adult').'<br>';
      }

      if (!empty($_SESSION['cart'][$i]['seat']['Concession']))
      {
        echo
          $_SESSION['cart'][$i]['seat']['Concession'].' x Concession: '."$".getCostSubtotal($i, 'Concession').'<br>';
      }

      if (!empty($_SESSION['cart'][$i]['seat']['FAdult']))
      {
        echo
          $_SESSION['cart'][$i]['seat']['FAdult'].' x First Class - Adult: '."$".getCostSubtotal($i, 'FAdult').'<br>';
      }

      if (!empty($_SESSION['cart'][$i]['seat']['FChild']))
      {
        echo
          $_SESSION['cart'][$i]['seat']['FChild'].' x First Class - Child: '."$".getCostSubtotal($i, 'FChild').'<br>';
      }

      if (!empty($_SESSION['cart'][$i]['seat']['BeanbagT1']))
      {
        echo
          $_SESSION['cart'][$i]['seat']['BeanbagT1'].' x Beanbag - Two Adults: '."$".getCostSubtotal($i, 'BeanbagT1').'<br>';
      }

      if (!empty($_SESSION['cart'][$i]['seat']['BeanbagT2']))
      {
        echo
          $_SESSION['cart'][$i]['seat']['BeanbagT2'].' x Beanbag - One Adult + One Child: '."$".getCostSubtotal($i, 'BeanbagT2').'<br>';
      }

      if (!empty($_SESSION['cart'][$i]['seat']['BeanbagT3']))
      {
        echo
          $_SESSION['cart'][$i]['seat']['BeanbagT3'].' x Beanbag - Three Children: '."$".getCostSubtotal($i, 'BeanbagT3').'<br>';
      }

      echo
        '<br>Total: $'.$_SESSION['cart'][$i]['subtotal'].'</div>'; 
    }
  }

  function printTicketParts($i, $seatType)
  {
    if (!empty($_SESSION['cart'][$i]['seat'][$seatType]))
    {
      for($j=0; $j < getSeatQty($i, $seatType); $j++) 
      {
        echo
        '<div>
        Silverado<br>'.
        getMovieName($i).'<br>'.
        $_SESSION['cart'][$i]['day'].', '.
        $_SESSION['cart'][$i]['time'].'<br><br>'.$seatType.
        '</div>';
      }
    }
  }

;?>