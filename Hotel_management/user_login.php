<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="userlogin.css">
	<title>Hotel | MG</title>
	
	
</head>
<body>
	<div><header>
        <nav class="nav-bar1">
            <div class="container1">

                <h1 >
                    Hotel | MG
                </h1>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
					<li><a href="offers.html">Offers</a></li>
                    <li><a href="about.html">About</a></li>
			    </ul>
            </div>
        </nav>
		</header>
	</div>
<br>
<br>

<br>
<br>


	<div class="container" id="container">
		<div class="form-container log-in-container">
		<form action="user_logged_in.php" method="post">
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input class="input" type="text" name="phone" placeholder="Enter phone" required>				<!-- <input type="password" placeholder="Password" /> -->
				<input class="input" type="password" name="password" placeholder="Enter password" required>
				<a href="user_forgot_pwd.php">Forgot your password?</a>
				<button class="btn" type="submit" value="Login">Log In</button><br>
				<button class="btn" type="button"><a href="user_signup.php">User SignUp</a></button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Our Aim Is To Make You Feel Like Home</h1>
					<p>Hospitality is simply an opportunity to show love and care </p>
				</div>
			</div>
		</div>
	</div>
	


	<br><br>
	<br><br>
	<br><br>


<div class="footer">
    <footer id="main-footer">
        <p>Hotel |MG &copy; 2000 , All Right Reserved</p>
    </footer>
</div>
</body>
</html>