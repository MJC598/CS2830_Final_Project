<?php

require_once('template.php');

$images = array('pictures/doggo.jpg', 'pictures/Jesse.jpg', 'pictures/tickets.jpg');
$tmpl = new Template();
$tmpl->images = $images;
$sliderHTML = $tmpl->build('slider.tmpl');
?>