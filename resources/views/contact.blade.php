<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ets irsyad</title>
	<link rel="stylesheet" type="text/css" href="etsnrp187.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            // Ch eck if name, email, and message are not empty
           if (name == "" || email == "" || message == "") {
                alert("Please fill out all fields");
                return false;
            }

            // Check if email is valid using a basic regex pattern
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address");
                return false;
            }
			var namePattern = /^[A-Za-z]+$/;
   			 if (!name.match(namePattern)) {
       		 alert("Name should contain only letters");
        	return false;
   			 }

			 alert("This form has been submitted");

            return true;
        }
    </script>
</head>
<body>


	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.instagram.com/irsyad_fhmi/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.youtube.com/channel/UCBgD2Bbzo8s38dR_FHVYKYA"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://www.linkedin.com/in/muhammad-irsyad-fahmi-a13213291/"><i class="fab fa-linkedin"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="welcome">Muhammad Irsyad Fahmi</a></h1>
			<ul>
				<li><a href="welcome">HOME</a></li>
				<li><a href="about">ABOUT</a></li>
                <li><a href="hobby">HOBBY</a></li>
				<li><a href="skills">SKILLS</a></li>
				<li class="active"><a href="contact">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Contact</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>CONTACT INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Jl. Pulomas Barat VE no 15B RT007/RW011</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>fahmiirsyad77@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Telp.</h4>
					<p>(021) 47861176</p>
				</div>
				<div class="col-4">
					<h4>Hp</h4>
					<p>0812345678910</p>
				</div>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6723773745152!2d106.87760437509503!3d-6.1745979938127915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f51d8753f413%3A0x2637d6f64695e300!2sJl.%20Pulo%20Mas%20Barat%20V%20No.15!5e0!3m2!1sen!2sid!4v1697773161420!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</section>

	<section class="service">
		<div class="container">
			<h1>Contact Us</h1><br><br>
    	<form onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

       <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - Irsyad. All Rights Reserved.</small>
		</div>
	</footer>



</body>
</html>
