<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Hotel | MG</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="container">

                <h1 class="logo">
                    <a href="index.html">Hotel | MG</a>
                </h1>
				<ul>
				<li><a href="admin_view.php" class="active">Rooms Info</a></li>
				<li><a href="add_room_admin.php">Add Room</a></li>
				<li><a href="remove_room_admin.php">Remove Rooms</a></li>
				<li><a href="admin_room_status.php">Booking Requests</a></li>
				<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
				<li><a href="booking_history.php">Booking History</a></li>
				<li><a href="index.php">Logout</a></li>
                   

                </ul>
            </div>
        </nav>
	
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost:3306","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Rooms Info</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>			
	</div>
</body>
</html>