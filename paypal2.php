<?php
session_start();
$user = $_SESSION["user"];
$user1 = $_SESSION["mobile"];
$final_cost = $_SESSION["pay"];
echo $user;
echo $user1; 

?>

<!DOCTYPE html>

<html>
<body>
<FORM action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<INPUT TYPE="hidden" name="cmd" value="_xclick">
<INPUT TYPE="hidden" name="business" value="vijaycouriersystem@gmail.com">
<INPUT TYPE="hidden" name="variableName" value="allowedValue">
<input type="hidden" name="currency_code" value="INR">
<input type="hidden" name="item_name_1" value="payment of courier">
<input type="hidden" name="ammount" value="<?php echo $final_cost;?>">
<input type="submit" value="PayPal">

</FORM>
</body>
</html>