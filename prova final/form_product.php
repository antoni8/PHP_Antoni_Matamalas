<?php
//viusi corrections - see comments below amd rubric in moodle
//Variables definition
$name=$capitalisedName=$price=$discount=$discountQuantity=$finalPrice=$replacedMessage=null;

//Reference to php file where the functions are
include 'form_product_validation.php';

if ($_POST){
  //name format
  $name=$_POST['name'];
  //if the $name variable has been initialised and is not null
  if(isset($name))
     $capitalisedName = nameToCapitalLetters($name);

  //price value
  $price=$_POST['price'];
  //selected discount
  foreach ($_POST['discounts'] as $option) {
    $discount = $option;
  }
  //discountQuantity
  //if $discount and $price have been initialised and are not null
  if(($discount)&&($price)){  //visusi corrections: Falta isset
    $finalPrice=discountCalculation($discount,$price);
  }
  //message replacement
  //if $finalPrice is false using !
  if(!discountCalculation($discount,$price))//visusi correction - you already have saved the value in finalPrice variable in the line number 25
    $replacedMessage="Discount cannot be greater than price";
  else
    $replacedMessage=messageReplacement($capitalisedName,$finalPrice);
}//end
?>
<HTML>
<head>
    <title>Product Form</title>
</head>
<body>
    <H2>Product Form</H2>
    <h3>Fill the form with the product information, please.</h3>
    <!--use the METHOD that hide (don't show) the params in the url-->
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="POST">
        <!--name-->
        <b>Name:</b>
        <INPUT TYPE="text" NAME="name" value="<?php echo $name;?>" >
        <!--price-->
        <br><br><b> Price:</b><br><br>
       <input type="text" name="price" value="<?php echo $price;?>" >
       <!--discount-->
          <br><br><b> Discount in €:</b><br><br>
       <select name="discounts[]">
           <option value="5" <?php if (isset($discount) && $discount=="5") echo "selected";?>>5</option>
           <option value="10" <?php if (isset($discount) && $discount=="5") echo "selected";?>>10</option>
           <option value="15" <?php if (isset($discount) && $discount=="5") echo "selected";?>>15</option>
           <option value="20" <?php if (isset($discount) && $discount=="5") echo "selected";?>>20</option>
           <option value="25" <?php if (isset($discount) && $discount=="5") echo "selected";?>>25</option>
       </select>
       <!--final price-->
          <br><br> <b>Final Price:</b><br><br>
       <input type="text" name="finalPrice" value="<?php echo $finalPrice;?>">
      <br><br>
      <INPUT TYPE="submit" VALUE="Enviar">
    </FORM>

    <?php
    //if $finalPrice or $replacedMessage have been initialised and aren't null value
    if ((isset($finalPrice))&&(isset($replacedMessage))){//visusi corrections - condition has to be || instead of &&
        echo "<p><b>Form output</b></p>";
        echo $replacedMessage; //show message to the user
    }
  ?>
</body>
</HTML>
