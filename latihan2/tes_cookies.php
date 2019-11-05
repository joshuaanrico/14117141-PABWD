<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>
<html>
<body>
	<?php if(count($_COOKIE) > 0) {
		echo "Cookies enabled.";
	} else {
		echo "Cookies disabled.";
	} ?>
	<!-- 
		Analisis : 
		Incognito mode membuat browser tidak akan menyimpan cache, cookies, dan history dari website yang diakses. Incognito mode akan memulai sesi baru ketika window web browser incognito baru dibuka. Itu menyebabkan jumlah cookies 0 dan akan mengeluarkan output "Cookies disabled", sebaliknya jika tidak memakai incognito maka cookies bisa disimpan dan cookies yang telah disimpan ada lebih dari 0, menyebabkan output "Cookies enabled"
	 -->
</body>
</html>