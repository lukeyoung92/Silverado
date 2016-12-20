<?php session_start();
  
  $total = 0;
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
      print_r($_SESSION['cart']);
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

  function getSeatType($i, $seatType)
  {
    print_r($_SESSION['cart'][$i]['seat'][$seatType]);
  }

  function getSeatCost($i, $seatType)
  {
    $cost = 0.00;
    if ($seatType == 'Adult') 
    {
      $cost = 18.00;
    } 
    if ($seatType == 'Concession') 
    {
      $cost = 12.00;
    }
    if ($seatType == 'FAdult') 
    {
      $cost = 25.00;
    }
    if ($seatType == 'FChild') 
    {
      $cost = 20.00;
    }
    if ($seatType == 'BeanbagT1') 
    {
      $cost = 30.00;
    }
    if ($seatType == 'BeanbagT2') 
    {
      $cost = 30.00;
    }
    if ($seatType == 'BeanbagT3') 
    {
      $cost = 30.00;
    }
    return $cost;
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

  function getCostTotal()
  {
    $total = 0.00;

    for($i=0; $i<count($_SESSION['cart']); $i++)
    {
      $total += getCostSubtotal($i, 'Adult');
      $total += getCostSubtotal($i, 'Concession');
      $total += getCostSubtotal($i, 'FAdult');
      $total += getCostSubtotal($i, 'FChild');
      $total += getCostSubtotal($i, 'BeanbagT1');
      $total += getCostSubtotal($i, 'BeanbagT2');
      $total += getCostSubtotal($i, 'BeanbagT3');
    }

    $_SESSION['total'] = $total;

    return $total;
  }

  function getCostGrandTotal()
  {
    $grandtotal = 0.00;

    if(isset($_POST['voucher']))
    {
      $voucher = $_POST['voucher'];

      if(checkVoucher($voucher) == true)
      {
        $grandtotal = getCostTotal() * 0.8;
      }
      else
      {
        $grandtotal = getCostTotal();
      }
    }
    else
    {
      $grandtotal = getCostTotal();
    }

    $_SESSION['grand-total'] = $grandtotal;

    return $grandtotal;
  }

  function getSeatQty($i, $seatType)
  {
    return $_SESSION['cart'][$i]['seat'][$seatType];
  }

  function addSeatQty($i, $seatType)
  {
    $_SESSION['cart'][$i]['seat'][$seatType] += 1;
  }

  function subSeatQty($i, $seatType)
  {
    if($_SESSION['cart'][$i]['seat'][$seatType] != 0)
    {
      $_SESSION['cart'][$i]['seat'][$seatType] -= 1;
    }
    if($_SESSION['cart'][$i]['seat'][$seatType] == 0)
    {
      unset($_SESSION['cart'][$i]['seat'][$seatType]);
    }
    if(empty($_SESSION['cart'][$i]['seat']))
    {
      unset($_SESSION['cart'][$i]);
    }
  }

  function createAddButton($i, $seatType)
  {
    echo 
      '<li><form action="" method="post">
      <input type="submit" class="addmin" name="add" value="+">
        </form></li>';
  }

  function createSubButton($i, $seatType)
  {
    echo 
      '<li><form action="" method="post">
      <input type="submit" class="addmin" name="sub" value="-">
        </form></li>';
  }

  function printTicketDetails($i)
  {
    $time = $_SESSION['cart'][$i]['time'];
    $movie = $_SESSION['cart'][$i]['movie'];
    $day = $_SESSION['cart'][$i]['day'];
    echo "<p>";
    print_r(getMovieName($i)); print_r(", ");
    print_r($day); print_r(", ");
    print_r($time);
    echo "</p>";
  }

  function emptyCart()
  {
    $_SESSION['cart'] = Array();;
  }

  function deleteFromCart($i)
  {
    array_splice($_SESSION['cart'], $i, 1);
  }

  function printTicketTable($i,$total)
  {
    $subtotal=0.00;
    echo "<table>
        <tr>
          <td>Ticket Type</td>
          <td>Cost</td> 
          <td>Qty</td>
          <td>Subtotal</td>
        </tr>";
    
    if(!empty($_SESSION['cart'][$i]['seat']['Adult']))
    {
    $seatType='Adult';
    echo "<tr>
          <td>";
    print_r($seatType);
    echo "</td>
          <td>";
    print_r("$".getSeatCost($i, $seatType));
    echo "</td> 
          <td>";
    createSubButton($i, $seatType);
    print_r(getSeatQty($i, $seatType));
    createAddButton($i, $seatType);
    echo "</td>
          <td>";
    print_r("$".getCostSubtotal($i, $seatType));
    $subtotal = $subtotal + getCostSubtotal($i, $seatType);
    echo "</td>
        </tr>";
    }

    if(!empty($_SESSION['cart'][$i]['seat']['Concession']))
    {
    $seatType='Concession';
    echo "<tr>
          <td>";
    print_r($seatType);
    echo "</td>
          <td>";
    print_r("$".getSeatCost($i, $seatType));
    echo "</td> 
          <td>";
    print_r(getSeatQty($i, $seatType));
    echo "</td>
          <td>"; 
    print_r("$".getCostSubtotal($i, $seatType));
    $subtotal = $subtotal + getCostSubtotal($i, $seatType);
    echo "</td>
        </tr>";
    }

    if(!empty($_SESSION['cart'][$i]['seat']['FAdult']))
    {
    $seatType='FAdult';
    echo "<tr>
          <td>";
    print_r($seatType);
    echo "</td>
          <td>";
    print_r("$".getSeatCost($i, $seatType));
    echo "</td> 
          <td>";
    print_r(getSeatQty($i, $seatType));
    echo "</td>
          <td>"; 
    print_r("$".getCostSubtotal($i, $seatType));
    $subtotal = $subtotal + getCostSubtotal($i, $seatType);
    echo "</td>
        </tr>";
    }

    if(!empty($_SESSION['cart'][$i]['seat']['FChild']))
    {
    $seatType='FChild';
    echo "<tr>
          <td>";
    print_r($seatType);
    echo "</td>
          <td>";
    print_r("$".getSeatCost($i, $seatType));
    echo "</td> 
          <td>";
    print_r(getSeatQty($i, $seatType));
    echo "</td>
          <td>"; 
    print_r("$".getCostSubtotal($i, $seatType));
    $subtotal = $subtotal + getCostSubtotal($i, $seatType);
    echo "</td>
        </tr>";
    }

    if(!empty($_SESSION['cart'][$i]['seat']['BeanbagT1']))
    {
    $seatType='BeanbagT1';
    echo "<tr>
          <td>";
    print_r($seatType);
    echo "</td>
          <td>";
    print_r("$".getSeatCost($i, $seatType));
    echo "</td> 
          <td>";
    print_r(getSeatQty($i, $seatType));
    echo "</td>
          <td>"; 
    print_r("$".getCostSubtotal($i, $seatType));
    $subtotal = $subtotal + getCostSubtotal($i, $seatType);
    echo "</td>
        </tr>";
    }

    if(!empty($_SESSION['cart'][$i]['seat']['BeanbagT2']))
    {
    $seatType='BeanbagT2';
    echo "<tr>
          <td>";
    print_r($seatType);
    echo "</td>
          <td>";
    print_r("$".getSeatCost($i, $seatType));
    echo "</td> 
          <td>";
    print_r(getSeatQty($i, $seatType));
    echo "</td>
          <td>"; 
    print_r("$".getCostSubtotal($i, $seatType));
    $subtotal = $subtotal + getCostSubtotal($i, $seatType);
    echo "</td>
        </tr>";
    }

    if(!empty($_SESSION['cart'][$i]['seat']['BeanbagT3']))
    {
    $seatType='BeanbagT3';
    echo "<tr>
          <td>";
    print_r($seatType);
    echo "</td>
          <td>";
    print_r("$".getSeatCost($i, $seatType));
    echo "</td> 
          <td>";
    print_r(getSeatQty($i, $seatType));
    echo "</td>
          <td>"; 
    print_r("$".getCostSubtotal($i, $seatType));
    $subtotal = $subtotal + getCostSubtotal($i, $seatType);
    echo "</td>
        </tr>";
    }
    
    echo "<tr>
          <td></td>
          <td></td> 
          <td>Sub Total:</td>
          <td>";
    print_r("$".$subtotal);
    $_SESSION['cart'][$i]['subtotal'] = $subtotal;
    echo "</td>
        </tr>";
    echo "</table>";
  }

function checkVoucher($voucher)
{
  $v1 = (($voucher[0] * $voucher[1] + $voucher[2])
          * $voucher[3] + $voucher[4]) % 26 ;
  $v2 = (($voucher[6] * $voucher[7] + $voucher[8])
          * $voucher[9] + $voucher[10]) % 26;
  if($v1 == (ord($voucher[12]) - 65) && $v2 == ord($voucher[13]) - 65)
  {
    return true;
  }

  return false;
}


?>