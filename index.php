<?php
  $cf_app = json_decode($_ENV["VCAP_APPLICATION"]);
  $server = preg_split("/\./", $_ENV["SERVER_NAME"]);

  switch ($server[0]) {
    case "staging-php-app":
      $environment = "Staging Environment";
      break;

    case "prod-blue-php-app":
      $environment = "Production Environment (Blue)";
      break;

    case "prod-green-php-app":
      $environment = "Production Environment (Green)";
      break;

    default:
      $environment = "CloudFoundry PHP Demo";
  }

?>
<html>
<head>
<title>PHP CloudFoundry Demo</title>
</head>
<body>
<table width="100%">
<tr><td align="center"><h1><?php echo $environment; ?></h1><br><h3><?php echo $cf_app->{'application_name'} ?> served by <?php echo $_ENV["CF_INSTANCE_ADDR"]; ?></h3></td></tr>
<!-- <tr><td><?php phpinfo(); ?></td></tr> -->
</table>
</body>
</html>
