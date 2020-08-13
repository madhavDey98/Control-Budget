<!DOCTYPE html>
<html>
<head>
	<title>Sign-up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/sign_up_page.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

    <!-- Header starts -->
       <?php
          require "header.php";
       ?>
    <!-- Header Ends -->

    <!-- Body -->

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
			  <div class="panel panel-info">
				<div class="panel-heading text-center">
					Sign-Up
				</div>
				<div class="panel-body">
					<form method="post" action="server.php">

				        <div class="form-group">
							    <label for="name">Name</label>
							    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
						</div>

						<div class="form-group">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="">
						</div>

						<div class="form-group">
							    <label for="Password">Password</label>
							    <input type="password" class="form-control" id="Password" placeholder="Password" name="password" required="">
						</div>

						<div class="form-group">
							    <label for="phone">Phone Number</label>
							    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter valid Number (Ex:8899776655)" required="">
						</div>


						  <button type="submit" class="btn btn-info btn-lg" id="btchng" > Sign-Up </button><br><br>
                    </form>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- Body Ends -->

	<!-- Footer -->
	<?php
          require "footer.php";
    ?>
	<!-- Footer Ends -->

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>