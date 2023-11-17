<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>

<body>
<p>
		<?php
			if($_SESSION['msg']!=""){
				echo $_SESSION['msg'];
				echo $_SESSION['msg']="";
			}

		?>
	</p>
    <main>
        <h1>Please Fill Up this form</h1>
        <form action="insert_action.php" method="post">
            <label for="">First Name</label>
            <input type="text" name="fname" value="">
            <br> <br>
            <label for="">Last Name</label>
            <input type="text" name="lname" value="">
            <br> <br>
            <!-- <label for="">Date of Birth</label>
            <input type="date" name="dob" value="">
            <br><br> -->
            <label for="">Email Address</label>
            <input type="text" name="email" value="">
            <br> <br>
            <label for="">Phone Number</label>
            <input type="number" name="pnumber" value="">
            <br> <br>
            <input type="submit" name="btn" value="Submit">

        </form>
    </main>


</body>

</html>