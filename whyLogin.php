<?php 
session_start();
    require_once("koneksi.php");
    $ID = $_SESSION['id'];
    $query = "select * from user where idUser=$ID";
    $user = mysqli_query($con,$query);
    $data = mysqli_fetch_array($user);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Why Must Us?</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="histyle.css" rel="stylesheet" type="text/css">
	<script src="bootstrap/js/jquery.min.js">
	</script>
	<script src="bootstrap/js/bootstrap.min.js">
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; border-color: white">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="homelogin.php" title="HiStyle"><img alt="HiStyle" src="img/HiStyle.png" style="width:250px; height:80px"></a>
			</div>
			<ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 100px">
				<li>
					<a href="Wishlist.php" title="Wishlist"><span class="glyphicon glyphicon-heart"><span class="badge">0</span></span> Wishlist</a>
				</li>
				<li>
					<a href="cart.php" title="Cart"><span class="glyphicon glyphicon-shopping-cart"><span class="badge">0</span></span> Cart</a>
				</li>
				<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"><span class="badge">0</span></span> <?=$_SESSION['nama'];?></a>
          <ul class="dropdown-menu">
            <li>
              <a href="accset.php?idUser=<?php echo $data['idUser'];?>">Account Setting</a>
            </li>
            <li>
              <a href="detorder.php">Detail Order</a>
            </li>
            <li>
              <a href="paycom.php">Payment Comfirmation</a>
            </li>
          </ul>
        </li>
      </ul>
			<form action="/action_page.php" class="navbar-form navbar-right">
				<div class="input-group" style="padding-top: 40px">
					<input class="form-control" name="search" placeholder="Search" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>
		</div>
		<hr style="border-color: lightgrey">
	</nav>
	<div class="container">
		<ul class="breadcrumb" style="background-color: transparent; margin-top: 11%">
			<li>
				<a href="Home.php">Home</a>
			</li>
			<li class="active">Why Must Us?</li>
		</ul>
	</div>
	<div class="container" style="margin-bottom: 1%"><img src="img/why us.jpg" style="width: 100%"></div>
	<div class="container">
		<div class="col-md-12" style="margin-top: 5%">
			<div class="col-md-6 text-center">
			<img src="img/deliv.jpg">
			</div>
				<div class="col-md-6">
					<h4 style="line-height: 50px; text-align: justify;"><strong>Free Shipping</strong><br>Enjoy free shipping with a minimum purchase Rp300.000 for all product categories.</h4>
					<hr style="border-color: grey">
				</div>
			<div class="col-md-6"><br><br>
				<h4 style="line-height: 50px; text-align: justify;"><strong>Delivery Guaranteed</strong><br>Your order is guaranteed to be delivered to the destination address. If there is a defect in the order, you can return the product with the shipping cost paid by histyle. With condition, defect is not caused by expedition.</h4>
					<hr style="border-color: grey">
				</div>
					<div class="col-md-6 text-center" style="margin-top: 10%">
			<img src="img/shipping.jpg">
				</div>
			</div>
			<div class="col-md-12" style="margin-top: 5%">
				<div class="col-md-6 text-center">
			<img src="img/best.jpg">
			</div>
			<div class="col-md-6">
					<h4 style="line-height: 50px; text-align: justify;"><strong>Best Product</strong><br>HiStyle offers the best choice products from famous brand in indonesia.</h4>
					<hr style="border-color: grey">
				</div>
				<div class="col-md-6"><br><br>
				<h4 style="line-height: 50px; text-align: justify;"><strong>Top Brands</strong><br>Histyle only provides products from top brands like Tuneeca, Esme, Dannis, Lunan Go, Zoya, Rabbani, and Elzatta. You can suggest a product brands that histyle doesn't provide with click <a href="mailto:histyle@gmail.com?subject=Suggestion%20&body=Send%20Me%20Your Suggest">Suggestion</a></h4>
					<hr style="border-color: grey">
				</div>
					<div class="col-md-6 text-center" style="margin-top: 10%">
			<img src="img/top.jpg">
				</div>
			</div>
				<div class="col-md-6 text-center" style="margin-top: 10%">
			<img src="img/bag.jpg">
			</div>
			<div class="col-md-6"><br><br>
					<h4 style="line-height: 50px; text-align: justify;"><strong>Beauty in Packing</strong><br>In addition to the above advantages, histyle also emphasizes the beauty of packaging products to improve customer satisfaction. Because customer satisfaction is a Histyle's priority. If there are any related complaints, please click <a href="mailto:histyle@gmail.com?subject=Critic%20&body=Send%20Me%20Your Critic">Critic</a></h4>
					<hr style="border-color: grey">
				</div>
			</div>
	<br>
	<br>
	<footer>
		<nav class="navbar-default">
			<div class="panel-footer">
				<div class="container">
					<br>
					<div class="row test">
						<div class="col-md-12">
							<div class="col-md-4">
								<h4><strong>Customer Care</strong></h4>
								<p>Monday - Friday on 9AM - 6PM</p>
								<p><span class="glyphicon glyphicon-map-marker"></span> Muncar, Banyuwangi, Jawa Timur 68472</p>
								<p><span class="glyphicon glyphicon-phone"></span> Phone: +6285230540054</p>
								<p><span class="glyphicon glyphicon-envelope"></span> Email: histyle@gmail.com</p>
								<p>2018 © Histyle. ALL Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<div class="row">
									<h4><strong>Payment Option</strong></h4>
									<ul class="nav navbar-nav" style="width:90%">
										<li><img src="img/bca.png" style="width: 80px; height: 25px; margin-top: 10px"></li>
										<li><img src="img/bri.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
										<li><img src="img/bni.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
										<li><img src="img/mandiri.png" style="width: 80px; height: 25px; margin-top: 20px"></li>
										<li><img src="img/btn.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 20px;"></li>
										<li><img src="img/jatim.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 20px"></li>
									</ul>
								</div><br>
								<div class="row">
									<h4 style="display: inline-block;"><strong>Shipment Option</strong></h4>
									<ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
										<li><img src="img/jne.png" style="width: 30px; height: 30px; margin-right: 10px"></li>
										<li><img src="img/j&t.png" style="width: 35px; height: 15px; margin-right: 10px"></li>
										<li><img src="img/pos.png" style="width: 25px; height: 25px; margin-right: 10px"></li>
									</ul>
								</div>
							</div>
							<<div class="col-md-4">
                  <h4><strong>Information</strong></h4>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="aboutusLogin.php" style="padding-left: 0px; padding-top: 0px; padding-bottom: 0px">
                      <p>About Us</p></a>
                    </li>
                    <li>
                      <a href="contactusLogin.php" style="padding-top: 0px; padding-bottom: 0px">
                      <p>Contact Us</p></a>
                    </li>
                    <li>
                      <a href="whyLogin.php" style="padding-top: 0px; padding-bottom: 0px">
                    <p>Why Must Us?</p></a>
                  </li>
                </ul>
              </div>
								<div class="col-md-4">
								<h4><strong>Make Us Better</strong></h4>
								<ul class="nav navbar-nav">
									<li>
										<a href="mailto:histyle@gmail.com?subject=Suggestion%20&body=Send%20Me%20Your Suggest" style="padding-left:0px; padding-top: 0px; padding-bottom: 0px">
                    <p>Suggestion</p></a>
                  </li>
                  <li>
                    <a href="mailto:histyle@gmail.com?subject=Critic%20&body=Send%20Me%20EYour Critic" style="padding-top: 0px; padding-bottom: 0px">
										<p>Critic</p></a>
									</li>
								</ul>
							</div>
							<h4 style="display: inline-block; margin-left: 15px"><strong>Find Us On</strong></h4>
							<ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
								<li>
									<a href="https://www.facebook.com/HiStyle" title="Facebook"><img src="img/fb.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
								</li>
								<li>
									<a href="https://www.twitter.com/HiStyle" title="Twitter"><img src="img/tw.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
								</li>
								<li>
									<a href="https://www.instagram.com/HiStyle" title="Instagram"><img src="img/ig.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
								</li>
								<li>
									<a href="https://www.line.com/HiStyle" title="Line"><img src="img/line.png" style="width: 48px; height: 20px; margin-right: 10px"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</footer>
</body>
</html>