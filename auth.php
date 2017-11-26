<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вхід</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#in').click(function () {
				$.ajax({
					url: 'php/aauth.php',
					type: 'post',
					dataType: 'html',
					data: {
						login: $('#email').val(),
						password: $('#password').val()
					},
					success: function success (data) {
						var obj = jQuery.parseJSON((data));
							if(obj['EMAIL'] != $('#email').val() || obj['PASSWORD'] != $('#password').val()) {
								$('#forUser').text("Такий користувач не існує!");
								$('#forUser').css("color", "red");
							}
						window.location = "/";
					}
				});
			});
		});
	</script>
</head>
<body>
	<?php include('php/header.php'); ?>
	<div>
		<main class="auth bs1">
			<section>
				<section class="fl" style="width: 60%; text-decoration: none !important; color: #000;">
					<section class="h1">
						Вхід в особистий кабінет <br>
					</section>
					<section>
						<form action="#" id="form-ligin">
							<div class="em"><label for="email" class="label">Email:</label><input class="input" type="email" name="email" id="email"></div>
							<div class="pass"><label for="password" class="label">Password:</label><input class="input" type="password" name="password" id="password"></div>
							<div>
								<input type="button" value="Вхід" class="auth_btn" id="in">
							</div>
						</form>
					</section>
				</section>
				<section class="fr" style="width: 35%" id="forUser" >
					
				</section>
			</section>
		</main>
	</div>
	<?php include('php/footer.php'); ?>	
</body>
</html>