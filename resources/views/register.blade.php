<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/registration_form.css">
        
        <title>Registrazione</title>
	</head>
	<body>
		<div class="registration_container">
			<div class="title">Registration</div>
            <li class="mode">
                <div class="mode-toggle">
                    <span class="switch">
                        <div class="scelta">
                            <div class="locatario">Locatario</div>
                            <div class="locatore">Locatore</div>
                        </div>
                    </span>
                </div>
            </li>
			<form action="#" method="POST">
                
				<div class="user-details">
					<div class="input-box">
						<span class="details">Full Name</span>
						<input type="text" placeholder="Enter your name" name="full_name" required>
					</div>
					<div class="input-box">
						<span class="details">Username</span>
						<input type="text" placeholder="Enter your username" name="username" required>
					</div>
					<div class="input-box">
						<span class="details">Email</span>
						<input type="text" placeholder="Enter your email" name="email" required>
					</div>
					<div class="input-box">
						<span class="details">Phone number</span>
						<input type="text" placeholder="Enter your phone number" name="phone_number" required>
					</div>
					<div class="input-box">
						<span class="details">Password</span>
						<input type="text" placeholder="Enter your password" name="password" required>
					</div>
					<div class="input-box">
						<span class="details">Confirm Password</span>
						<input type="text" placeholder="Confirm your password" required>
					</div>
                    <div class="input-box2">
						<span class="details">Confirm Password</span>
						<input type="text" placeholder="Confirm your password">
					</div>
				</div>

				<div class="gender-details">
					<input type="radio" name="gender" id="dot-1">
					<input type="radio" name="gender" id="dot-2">
					<input type="radio" name="gender" id="dot-3">
					<span class="gender-title">Gender</span>
					<div class="category">
						<label for="dot-1">
							<span class="dot one"></span>
							<span class="gender">Male</span>
						</label>
						<label for="dot-2">
							<span class="dot two"></span>
							<span class="gender">Female</span>
						</label>
						<label for="dot-3">
							<span class="dot three"></span>
							<span class="gender">Prefer not to say</span>
						</label>
					</div>
				</div>

				<div class="button">
					<input type="submit" value="Register">
				</div>
			</form>
		</div>
        
        <script src="js/registration_form.js"></script>
	</body>
</html>