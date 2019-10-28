<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h2>Daftar Mahasiswa</h2>

	
			<?php foreach ($mhs as $m ) : ?>
				<ul>
				<li><?= $m['nama']; ?> </li>
				<li><?= $m['nrp']; ?> </li>
				<li><?= $m['email']; ?> </li>
				</ul>
			<?php endforeach; ?>

	


</body>
</html>