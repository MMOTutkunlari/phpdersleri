<!DOCTYPE html>
<html>
<head>
	<title>MMO Tutkunları PHP Eğitim 2021</title>
	<meta charset="utf-8" />
	<style>
		table {
			width: 100px;
			border: 1px solid #000;
		}
		
		td, th {
			border: 1px solid #000;
		}
		
		td {
			text-align: center;
		}
	</style>
</head>
<body>

<h1>MMO Tutkunları PHP Eğitim 2021</h1>

<table>
	<tr><th>#</th></tr>
	<?php for($i = 1; $i <= 20; $i++): ?>
	<tr>
		<td><?= $i; ?></td>
	</tr>
	<?php endfor; ?>
</table>
</body>
</html>