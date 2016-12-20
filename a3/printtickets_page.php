<?php include_once('Functions/printtickets_functions.php');?>
<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A2 Silverado">
  <meta name="author" content="Aaron and Luke">

  <?php 
    for($i=0; $i<count($_SESSION['cart']); $i++)
    {
      printTicketHead($i); printTicketParts($i,'Adult'); printTicketParts($i,'Concession'); printTicketParts($i,'FAdult'); printTicketParts($i,'FChild'); printTicketParts($i,'BeanbagT1'); printTicketParts($i,'BeanbagT2'); printTicketParts($i,'BeanbagT3');
    }
  ; ?>

  <?php $_SESSION = array(); ?>
  
  <?php include_once('ticketstyle.css');?>
</html>