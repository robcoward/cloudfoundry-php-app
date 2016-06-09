<?php
  $cf_app = json_decode($_ENV["VCAP_APPLICATION"])

?>
<html>
<head>
<title>PHP CloudFoundry Demo</title>
</head>
<body>
<table width="100%">
<tr><td align="center"><h1><?php echo $cf_app->{'application_name'} ?> served by <?php echo $_ENV["CF_INSTANCE_ADDR"]; ?></h1></td></tr>
<tr><td><?php phpinfo(); ?></td></tr>
</table>
</body>
</html>
