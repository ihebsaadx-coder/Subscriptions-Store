<?php
ob_start();

include './inc/header.php';
include './inc/db_connect.php';


// getting cookie no. used to remove cookies
// upon order complete 

if (isset($_SESSION['d'])) {
	
	$d = $_SESSION['d'];

}


//checking page reffer

$ref= $_GET["ref"]; 


if ($ref != 'cart') {
	header('Location: cart.php');
}


$total = $_SESSION["total"]; // order total



if (!isset($_SESSION['loggedin'])) {
	
	header("Location: login.php?ref=checkout");
} 


?>

<!-- Beardcumb -->     
    <div class="custom-card p-0 card-shadow">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb container">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>

<!-- End Beardcumb -->  

<div class="container py-4">



	<div class="row">
			
		<div class="col-md-6 my-2">
			<div class="alert alert-info" role="alert">
			  	<i class="fa fa-info-circle"> </i> Please fill the details below.
			</div>

			<h4 class="">Billing Address</h4>

			<form method="POST" action="" class="my-4">
				<div class="form-group">
			    <label>First Name</label>
			    <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $_SESSION['firstname']?>" required>
			  </div>
			  <div class="form-group">
			   <label>Last Name</label>
			    <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $_SESSION['lastname']?>" required>
			  </div>
			  <div class="form-group">
			    <label>Email</label>
			    <input type="email" class="form-control" autocomplete="off" placeholder="Enter email" name="email" value="<?php echo $_SESSION['user_email']?>" required>
			  </div>
			  <div class="form-group">
			   <label>Address</label>
			    <input type="text" class="form-control" placeholder="Address" name="address" required>
			  </div>
			  <div class="form-group">
			   <label>City</label>
			    <input type="text" class="form-control" placeholder="City" name="city" required>
			  </div>
			  <div class="form-group">
			   <label>State</label>
			    <input type="text" class="form-control" placeholder="State" name="pin" required>
			  </div> 
			  <div class="form-group">
			   <label>Contact No.</label>
			    <input type="number" class="form-control" placeholder="Contact No." name="contact_no" value="<?php echo $_SESSION['contact_no']?>" required>
			  </div>
			  
		</div>

		
		<div class="col-md-6 my-2">
			<div class="alert alert-info" role="alert">
			  	<i class="fa fa-info-circle"></i> Select payment method.
			</div>

			<h4>Payment Method</h4>
		

	
			
            
			<div class="form-check">
			  <input class="form-check-input" name="payment_mode" type="checkbox" value="Credit Card" checked required style="right: 470px;">
			  <label class="form-check-label" for="defaultCheck1">
			    Credit Card
			  </label>
			</div>
			<div style="padding-top:9px;">
			<div class="form-group">
			    <label>Credit Card Number</label>
			    <input type="text" class="form-control" placeholder="Credit Card Number" name="creditcardnumber"  pattern="[0-9]{16}" required>
			  </div>
			  <div class="form-group">
			   <label>Expiration Date</label>
			    <input type="text" class="form-control" placeholder="MM/YYYY" name="expiration"  pattern="([0-9]{2}[/]?){3}" required>
			  </div>
			  <div class="form-group">
			    <label>CVC</label>
			    <input type="text" class="form-control"  placeholder="CVC" name="cvccard"    pattern="[0-9]{3,4}" required>
			  </div>
		
</div>
			<div class="py-5">
				<h4>Total Payable amount:</h4>
				<h4 class="mx-3"><?php echo '$'.$total ?></h4>
			
			</div>
			<div class="text-center">
			<input type="submit" name="confirm_order" class="btn custom-btn my-2 btn-lg" value="Confirm Order">
			</div>
			</form>
		</div>

	</div>

</div>
<style>
input {
  border: 2px solid;
  border-radius: 4px;
  font-size: 1rem;
  margin: 0.25rem;
  min-width: 125px;
  padding: 0.5rem;
  transition: border-color 0.5s ease-out;
}
input:optional {
  border-color: gray;
}
input:required:valid {
  border-color: green;
}
input:invalid {
  border-color: red;
}
input:required:focus:valid {
  background: url("https://assets.digitalocean.com/labs/icons/hand-thumbs-up.svg") no-repeat 95% 50% lightgreen;
  background-size: 25px;
}
input:focus:invalid {
  background: url("https://assets.digitalocean.com/labs/icons/exclamation-triangle-fill.svg") no-repeat 95% 50% lightsalmon;
  background-size: 25px;
}


</style>
   

	<?php 


		$user_id = $_SESSION['user_id'];
		if (isset($_POST['creditcardnumber'])) {
			
		$test1= md5($_POST['creditcardnumber']);
		}
		
		if (isset($_POST['cvccard'])) {
			
		$test2= md5($_POST['cvccard']);
		}

		if (isset($_POST["confirm_order"])) {

			$date = date("d-m-y");

		foreach ($_COOKIE['item'] as $name1 => $value) {


			$values11 = explode("__", $value);

			mysqli_query($conn, "INSERT INTO orders(user_id, product_name, product_price, product_qty, product_img, order_total, address, firstname, lastname, email, contact_no, city, pincode, payment_mode, order_date, order_status, CardNumber, Expire, Cvc) VALUES($user_id, '$values11[1]', '$values11[2]', '$values11[3]', '$values11[0]', '$values11[4]', '$_POST[address]', '$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[contact_no]', '$_POST[city]', '$_POST[pin]', '$_POST[payment_mode]', '$date', 'Approved', '$test1', '$_POST[expiration]', 'test2'  ) ");
		}

			$_SESSION['order_placed'] = true;

			for($i=1;$i<=$d; $i++) {

				setcookie("item[$i]","",time() - 3600);

			}


				// send order confirmation in mail
				
				
				

						$to = $_SESSION['user_email'];

						$subject = "Your Recent Order was Successful - Streamndcream";

						$message = "
						
										<div class='container'>

  <table width='100%'>
    <tr>
      <td width='75px'><div class='logotype'>STREAMNDCREAM</div></td>
      <td width='300px'><div style='background: #ffd9e8;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px;'>Order invoice</div></td>
      <td></td>
    </tr>
  </table> 
  <br><br>
  
  <table width='100%' style='border-collapse: collapse;'>
    <tr>
      <td widdth='50%' style='background:#eee;padding:20px;'>
        <strong>First Name:</strong> $_SESSION[firstname]<br>
        <strong>Payment type:</strong> Credit Card<br>
        <strong>Delivery type:</strong> Email Delivery<br>
      </td>
      <td style='background:#eee;padding:20px;'>
      
        <strong>E-mail:</strong> $_SESSION[user_email] <br>
        <strong>Phone:</strong>  $_SESSION[contact_no]<br>
		<strong>Date:</strong>  $date<br>
      </td>
    </tr>
  </table><br>
  <table width='100%'>
    <tr>
      <td>

      </td>
      <td>
        <table>
          <tr>
            <td style='vertical-align: text-top;'>
              <div style='background: #ffd9e8 url(https://cdn4.iconfinder.com/data/icons/app-custom-ui-1/48/Check_circle-128.png) no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;'></div>   
            </td>
            <td>
              <strong>Order</strong><br>
             Your order will be delivered soon to your Email.
          </tr>
        </table>
      </td>
    </tr>
  </table><br>
  

</div><!-- container -->
<style> 

body {font-family: Helvetica, sans-serif;font-size:13px;}
.container{max-width: 680px; margin:0 auto;}
.logotype{background:#000;color:#fff;width:75px;height:75px;  line-height: 75px; text-align: center; font-size:11px;}
.column-title{background:#eee;text-transform:uppercase;padding:15px 5px 15px 15px;font-size:11px}
.column-detail{border-top:1px solid #eee;border-bottom:1px solid #eee;}
.column-header{background:#eee;text-transform:uppercase;padding:15px;font-size:11px;border-right:1px solid #eee;}
.row{padding:7px 14px;border-left:1px solid #eee;border-right:1px solid #eee;border-bottom:1px solid #eee;}
.alert{background: #ffd9e8;padding:20px;margin:20px 0;line-height:22px;color:#333}
.socialmedia{background:#eee;padding:20px; display:inline-block}


</style>
						
						";

						// Always set content-type when sending HTML email
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

						// More headers
						$headers .= 'From: streamndcreamtunisia@gmail.com' . "\r\n";
						// $headers .= 'Cc: myboss@example.com' . "\r\n";

						mail($to,$subject,$message,$headers);

				
				// redirect user to order success page
				header('Location: order-success.php?ref=checkout');
			}

			?>
			

<?php
ob_end_flush();
include './inc/footer.php'
?>