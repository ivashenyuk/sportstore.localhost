<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Реєстрація</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function () {

			$('#reg').click(function() { 
				var res = true;

				if($('#name').val() == "") {
					$('#name').css("border","1px solid red");
					res = false;
				} else {
					$('#name').css("border","none");
				}
				if($('#email').val() == "") {
					$('#email').css("border","1px solid red");
					res = false;
				} else {
					$('#email').css("border","none");
				}

				if($('#password').val() == "") {
					$('#password').css("border","1px solid red");
					res = false;
				} else {
					$('#password').css("border","none");
				}

				if(res) {
					$.ajax({
						url: 'php/reg.php',
						type: 'POST',
						dataType: 'html',
						data: { 
							name: $('#name').val(),
							email: $('#email').val(),
							password: $('#password').val()
						 },
						 success: function success() {
						 	window.location = "/";
						 }
					});
				}
			});
		});
	</script>
</head>
<body>
	<?php include('php/header.php'); ?>
<div>
	<main class="auth bs1" style="height: 450px;">
		<section>
			<section class="fl" style="width: 60%; text-decoration: none !important; color: #000;">
				<section class="h1">
					Реєстрація <br>
				</section>

				<section style="font-size: 19px; margin-bottom: 15px">
					<h3 style="text-decoration: underline; width: 100%; text-align: center;">
						Реєстрація нового користувача
					</h3><br>
					<p>Будь-даска, заповніть поля нище для реєстрування і отримання бонусної <span class="word">знижки</span> в розмірі 5%.</p><br>
					<p>Зверніть <span class="word">увагу</span> - скидка не діє на товари, які розміщані вже по <span class="word">скидочній</span> або <span class="word">акційні</span> ціні.</p>
				</section>

				<section>
					<form action="#" id="form-ligin">
						<div class="em"><label for="name" class="label">Name*:</label><input class="input" type="text" name="name" id="name"></div>
						<div class="em"><label for="email" class="label">Email*:</label><input class="input" type="email" name="email" id="email"></div>
						<div class="pass"><label for="password" class="label">Password*:</label><input class="input" type="password" name="password" id="password"></div>
						<div>
							<input type="button" value="Зареєструватись" class="auth_btn" id="reg">
						</div>
					</form>
				</section>
			</section>
			<section class="fr" style="width: 35%">
				a
			</section>
		</section>
	</main>
</div>
	<?php include('php/footer.php'); ?>
</body>
</html>