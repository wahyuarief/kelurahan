<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kelurahan Pondok Bambu</title>
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/pe-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/animate.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
    <script src="<?= base_url('assets/') ?>js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="<?= base_url('assets/') ?>js/html5shiv.js"></script>
    <script src="<?= base_url('assets/') ?>js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/') ?>images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/') ?>images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/') ?>images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="<?= base_url('assets/') ?>images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    base_url = "<?= base_url('assets/') ?>";
    jQuery(document).ready(function($){
	'use strict';
      	jQuery('body').backstretch([
	        base_url + "images/bg/bg1.jpg",
	        base_url + "images/bg/bg2.jpg",
	        base_url + "images/bg/bg3.jpg"
	    ], {duration: 5000, fade: 500, centeredY: true });

		$("#mapwrapper").gMap({ controls: false,
         	scrollwheel: false,
         	markers: [{
              	latitude:-6.235332,
				longitude: 106.895535,
          	icon: { image: base_url + "images/marker.png",
              	iconsize: [44,44],
          		iconanchor: [12,46],
          		infowindowanchor: [12, 0] } }],
          	icon: {
              	image: base_url + "images/marker.png",
             	iconsize: [26, 46],
              	iconanchor: [12, 46],
              	infowindowanchor: [12, 0] },
         	latitude:-6.235332,
         	longitude: 106.895535,
          	zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>
