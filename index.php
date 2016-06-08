<html>
<head>
<title>PHP CloudFoundry Demo</title>
</head>
<body>
<table width="100%">
<tr><td align="center"><h1>Served from <?php echo $_ENV["CF_INSTANCE_ADDR"]; ?></h1></td></tr>
<tr><td><?php phpinfo(); ?></td></tr>
</table>
</body>
</html>
