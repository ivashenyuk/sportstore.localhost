<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sport store</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script>
		$(document).ready(function () {
			Content();
		});
		$(document).ready(function () {
			$('#season').change(function () {
				if($('#season option:selected').text().toLowerCase() == ('Весна-Літо').toLowerCase()) {
					$.ajax({
						url: 'php/main.php',
						type: 'POST',
						dataType: 'html',
						success: function success(data) {
							var obj = jQuery.parseJSON(data);
							$('.main').html("");
							for (var i = 0; i < obj.length; i++) {
								if(obj[i]['SEASON'].toLowerCase() == ('Весна-Літо').toLowerCase())
									$('.main').append('<article class="bs2"><div class="info"><div class="photo"><a href=""><img src="' + obj[i]['IMG'] +'" alt=""></a></div></div><div class="footer"><div class="fl fnt c s16">'+ obj[i]['DISCOUNTPRICE']+'<span class="fnt s12"> грн.</span></div><div class="fr fnt c s16">'+ obj[i]['PRICE']+' <span class="fnt s12">грн.</span></div></div></article>');
							}
						}
					});
				}
				else if($('#season option:selected').text().toLowerCase() == ('Осінь-Зима').toLowerCase()) {
					$.ajax({
						url: 'php/main.php',
						type: 'POST',
						dataType: 'html',
						success: function success(data) {
							var obj = jQuery.parseJSON(data);
							$('.main').html("");
							for (var i = 0; i < obj.length; i++) {
								if(obj[i]['SEASON'].toLowerCase() == ('Осінь-Зима').toLowerCase())
									$('.main').append('<article class="bs2"><div class="info"><div class="photo"><a href=""><img src="' + obj[i]['IMG'] +'" alt=""></a></div></div><div class="footer"><div class="fl fnt c s16">'+ obj[i]['DISCOUNTPRICE']+'<span class="fnt s12"> грн.</span></div><div class="fr fnt c s16">'+ obj[i]['PRICE']+' <span class="fnt s12">грн.</span></div></div></article>');
							}
						}
					});
				}
				else {
					Content();
				}
			});
		});
		$(document).ready(function () {
			$('#sex').change(function () {
				if($('#sex option:selected').text().toLowerCase() == ('Жінкам').toLowerCase()) {
					$.ajax({
						url: 'php/main.php',
						type: 'POST',
						dataType: 'html',
						success: function success(data) {
							var obj = jQuery.parseJSON(data);
							$('.main').html("");
							for (var i = 0; i < obj.length; i++) {
								if(obj[i]['SEX'].toLowerCase() == ('Жінкам').toLowerCase() ||
								   obj[i]['SEX'].toLowerCase() == ('Жінка').toLowerCase())
									$('.main').append('<article class="bs2"><div class="info"><div class="photo"><a href=""><img src="' + obj[i]['IMG'] +'" alt=""></a></div></div><div class="footer"><div class="fl fnt c s16">'+ obj[i]['DISCOUNTPRICE']+'<span class="fnt s12"> грн.</span></div><div class="fr fnt c s16">'+ obj[i]['PRICE']+' <span class="fnt s12">грн.</span></div></div></article>');
							}
						}
					});
				}
				else if($('#sex option:selected').text().toLowerCase() == ('Чоловікам').toLowerCase()) {
					$.ajax({
						url: 'php/main.php',
						type: 'POST',
						dataType: 'html',
						success: function success(data) {
							var obj = jQuery.parseJSON(data);
							$('.main').html("");
							for (var i = 0; i < obj.length; i++) {
								if(obj[i]['SEX'].toLowerCase() == ('Чоловікам').toLowerCase() ||
								   obj[i]['SEX'].toLowerCase() == ('Чоловік').toLowerCase())
									$('.main').append('<article class="bs2"><div class="info"><div class="photo"><a href=""><img src="' + obj[i]['IMG'] +'" alt=""></a></div></div><div class="footer"><div class="fl fnt c s16">'+ obj[i]['DISCOUNTPRICE']+'<span class="fnt s12"> грн.</span></div><div class="fr fnt c s16">'+ obj[i]['PRICE']+' <span class="fnt s12">грн.</span></div></div></article>');
							}
						}
					});
				}
				else if($('#sex option:selected').text().toLowerCase() == ('Дітям').toLowerCase()) {
					$.ajax({
						url: 'php/main.php',
						type: 'POST',
						dataType: 'html',
						success: function success(data) {
							var obj = jQuery.parseJSON(data);
							$('.main').html("");
							for (var i = 0; i < obj.length; i++) {
								if(obj[i]['SEX'].toLowerCase() == ('Дітям').toLowerCase() ||
								   obj[i]['SEX'].toLowerCase() == ('Дитина').toLowerCase())
									$('.main').append('<article class="bs2"><div class="info"><div class="photo"><a href=""><img src="' + obj[i]['IMG'] +'" alt=""></a></div></div><div class="footer"><div class="fl fnt c s16">'+ obj[i]['DISCOUNTPRICE']+'<span class="fnt s12"> грн.</span></div><div class="fr fnt c s16">'+ obj[i]['PRICE']+' <span class="fnt s12">грн.</span></div></div></article>');
							}
						}
					});
				}
				else {
					Content();
				}
			});
		});
		function Content() {
			$.ajax({
				url: 'php/main.php',
				type: 'POST',
				dataType: 'html',
				success: function success(data) {
					var obj = jQuery.parseJSON(data);
					$('.main').html("");
					for (var i = 0; i < obj.length; i++) {
						$('.main').append('<article class="bs2"><div class="info"><div class="photo"><a href=""><img src="' + obj[i]['IMG'] +'" alt=""></a></div></div><div class="footer"><div class="fl fnt c s16">'+ obj[i]['DISCOUNTPRICE']+'<span class="fnt s12"> грн.</span></div><div class="fr fnt c s16">'+ obj[i]['PRICE']+' <span class="fnt s12">грн.</span></div></div></article>');
					}
				}
			});
		}
	</script>
</head>
<body>
	<?php include('php/header.php'); ?>
	<main>
		<?php include('php/aside.php'); ?>
		<section class="main">
			
		</section>
	</main>
	<?php include('php/footer.php'); ?>
</body>
</html>