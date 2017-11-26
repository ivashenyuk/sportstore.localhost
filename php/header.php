<?php session_start();?>
<header class="header">
		<main class="header">
			<a href="/" class="logo"><img src="img/logo.png" alt="Sport-shop"></a>
			<nav class="navigation">
				<ul>
					<li><a href="/" class="gradient red border">Головна</a></li>
					<li><a href="/table-size.php" class="gradient red border">Таблиця розмірів</a></li>
					<li><a href="/action.php" class="gradient red border">Акції</a></li>
					<li><a href="/contacts.php" class="gradient red border">Контакти</a></li>
				</ul>
			</nav>
			<div class="contacts">
					<span>Тел.: </span><span>(096) 493 26 47</span>
					<span>Тел.: </span><span>(098) 239 16 75</span>
			</div>
			<div class="membership">
				<?php if(isset($_SESSION['user'])) : ?>
					<span class="main-nick"><strong><?php echo ($_SESSION['user']['NAME']); ?></strong></span>
					<a href="/php/logout.php" class="ftn u">Вийти</a>
				<?php  else : ?>
					<a href="/auth.php" class="ftn u">Вхід</a>
					<a href="/reg.php" class="ftn u">Реєстрація</a>
				<?php endif;?>
			</div>
			<div class="cart">
				<div class="img empty"></div>
				<div id="cart">
					В корзині <span class="fnt s16 b">0</span> товарів <br>
					на суму <span class="fnt s16 b">0</span> грн. <br>
					<a href="" title="Оформити замовлення">Оформити замовлення</a>
				</div>
			</div>
		</main>
	</header>