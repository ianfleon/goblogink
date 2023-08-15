<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="<?= uwu('BASE_URL') ?>">Home</a>
				<a href="<?= uwu('BASE_URL') ?>/about">About</a>
				<a href="<?= uwu('BASE_URL') ?>/contacts">Contacts</a>
			</li>
		</ul>
	</nav>

	<?php $post = Content::current() ?>

	<h2><?= $post['judul'] ?></h2>
	<p><?= $post['isi'] ?></p>

</body>
</html>