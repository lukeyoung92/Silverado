<?php include_once('Functions/shoppingcart_functions.php');?>
<!DOCTYPE html>
<html>
  
  <head>
    <?php include_once('Includes/head_data.php');?>
	  <title>Shopping Cart Page</title>
  </head>

  <body>

    <?php include_once('Includes/header.php');include_once('Includes/navbar.php');?>
    
    <main>
      <div class="block1">
      <h1>Shopping Cart</h1>
      <?php
        if (isset($_SESSION['cart']))
        {
          for($i=0; $i<count($_SESSION['cart']); $i++)
          {
            echo '<div class="block2">';
            printTicketDetails($i);
            printTicketTable($i,$total);
            echo '<br><form action="" method="post">
          <input type="submit" name="'.$i.'" value="Delete From Cart">
        </form>';
            echo '</div>';
          }
        } 
      ?>

      <?php for($i=0; $i<count($_SESSION['cart']); $i++)
              {
                if (isset($_POST[$i]))
                {
                  deleteFromCart($i);
                  Header("location:shoppingcart_page.php");
                }
              } 
        ; ?>
      
      <div class="block2">
        <p>Total: <?php print_r("$".getCostTotal()); ?></p>
        <p>Meal and Movie Deal Voucher:</p>
        <p>Grand Total: <?php print_r("$".getCostGrandTotal()); ?></p>

        <p><form action="" method="post">
          Voucher Code:
          <input type="text" name="voucher" pattern="^\d{5}-\d{5}-[A-Z]{2}$">
          <input type='submit'/>
        </form></p>
        <?php
        if(isset($_POST['voucher']))
        {
          $voucher = $_POST['voucher'];
         
          if(checkVoucher($voucher) == true)
          {
            echo  
            '<span style="color: darkgreen; font-weight: bold;">' . 
            'Voucher is valid' . 
            '</span>';

            $_SESSION['voucher'] = $voucher;
          }
          else
          {
            echo 
            '<span style="color: darkred; font-weight: bold;">' . 
            'Voucher is invalid' . 
            '</span>';
          }
        }
        ?>

        <li><form action="" method="post">
          <input type="submit" name="empty_cart" value="Empty Cart">
        </form></li>
        <?php if (isset($_POST["empty_cart"]))
              {
                $_SESSION = array();
                Header("location:reservation_page.php");
              }
        ; ?>

        <?php if (isset($_POST["add"]))
              {
                addSeatQty(0, 'Adult');
              }
              if (isset($_POST["sub"]))
              {
                subSeatQty(0, 'Adult');
              }
        ; ?>
        
        <li><form action="http://titan.csit.rmit.edu.au/~s3330458/wp/a3/checkout_page.php">
          <input type='submit' value='Checkout'/>
        </form></li>

      </div>
      </div>
    </main>

    <?php include_once('Includes/footer.php');?>
  
  </body>

</html>