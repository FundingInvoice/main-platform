<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scaleable=no, maximum-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles;  ?>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<link href='http://invoice.development-review.net/sites/all/themes/bootstrap_subtheme/css/bootstrap.css' rel='stylesheet' type='text/css'>
<link href='http://invoice.development-review.net/sites/all/themes/bootstrap_subtheme/css/overrides.css' rel='stylesheet' type='text/css'>
<link href='http://invoice.development-review.net/sites/all/themes/bootstrap_subtheme/css/style.css' rel='stylesheet' type='text/css'>
 <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="/sites/all/themes/bootstrap_subtheme/css/ie8.css" />
<![endif]-->
 <?php print $scripts; ?>
  
 <!--[if lt IE 9]>
 <script type='text/javascript' src="/sites/all/themes/bootstrap_subtheme/js/css3-mediaqueries.js"></script> 
 <script type='text/javascript' src="/sites/all/themes/bootstrap_subtheme/js/html5.js"></script>
 <script type='text/javascript' src="/sites/all/themes/bootstrap_subtheme/js/respond.min.js"></script>
 <![endif]-->
 
    

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>




</body>
</html>
