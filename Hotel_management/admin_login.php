<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Hotel | MG</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}


.container1{
    margin:auto ;
    max-width: 1100px;
    overflow: auto;
    padding: 0 20px;
}
.nav-bar1{
    background-color: #333;
    color: rgb(232, 234, 236);
    overflow: auto;
    
}

.nav-bar1 a{
    color: antiquewhite;
}

.nav-bar1 h1{
    float:left ;
    padding-top: 20px;

}

.nav-bar1 ul{
    list-style:none ;
    float: right;
}

.nav-bar1 ul li{
    float: left;
}

.nav-bar1 ul li a{
    display: block;
    padding: 20px;
    text-align: center;
	margin:auto;
}
 
.nav-bar1 ul li a:hover, 
.nav-bar1 ul li a.current{
    background-color: bisque;
    color: rgb(143, 44, 44);
}

body {
	background: #f3e0e2;
	
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	margin: auto;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
}

.log-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}


.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
}


.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
}


.overlay-right {
	right: 0;
}


.social-container {
	margin: 50px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;

}
.footer #main-footer{
    text-align: center;
    background: gray;
    padding: 20px;
    color: antiquewhite;}

	</style>
</head>
<body>
	<div><header>
        <nav class="nav-bar1">
            <div class="container1">
				<h1 >
					<i class="fas fa-hotel "></i>
                    Hotel | MG
                </h1>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
			<form action="admin_db.php" method="post">
				<h1>Login</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<!-- <input type="email" placeholder="Email" /> -->
				<input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
				<!-- <input type="password" placeholder="Password" /> -->
				<input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>

				<a href="admin_forgot_pwd.php">Forgot your password?</a>
				<button type="submit" value="Login">Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Hello Admin</h1>
					<p></p>
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