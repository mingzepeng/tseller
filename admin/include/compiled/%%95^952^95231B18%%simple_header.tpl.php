<?php /* Smarty version 2.6.26, created on 2013-07-24 17:29:06
         compiled from simple_header.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->_tpl_vars['page_title']; ?>
 - <?php echo @ADMIN_TITLE; ?>
</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="<?php echo @ADMIN_URL; ?>
/assets/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="<?php echo @ADMIN_URL; ?>
/assets/stylesheets_<?php if ($this->_tpl_vars['user_info']): ?><?php echo $this->_tpl_vars['user_info']['template']; ?>
<?php else: ?>default<?php endif; ?>/theme.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_URL; ?>
/assets/lib/font-awesome/css/font-awesome.css">

    <script src="<?php echo @ADMIN_URL; ?>
/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<?php echo @ADMIN_URL; ?>
/assets/js/other.js" ></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>