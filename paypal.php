<?php
session_start();

$paypal_url = 'https://www.sandbox.paypal.com/';
$id=$_SESSION["id"];
$pay=$_SESSION["pay"];
$user = $_SESSION["user"];
$user1 = $_SESSION["mobile"];
?>
<form action="<?php echo $paypal_url;?>in/home/" method="post" name="buyCredits" id="buyCredits">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="vijaycouriersystem@gmail.com">
	<input type="hidden" name="currency_code" value="INR">
	<input type="hidden" name="item_name" value="Payment Of Courier">
	<input type="hidden" name="item_number" value="1212">
	<input type="hidden" name="amount" value="<?php echo $pay;?>">
	<input type="hidden" name="return" value="http://localhost/smart-courier/payment_success.php?id=<?php echo $user;?>">
</form>
<script type="text/javascript">
document.getElementById("buyCredits").submit();
</script>