<?php

/**
 * @file
 * template.php
 */
function portal_preprocess_page(&$variables) {

$classes = $variables['navbar_classes_array'];
  
	 if ($key = array_search("container", $classes)) {
	   $classes[$key] = "container-fluid";
	 }
	 $navbar_classes = implode(" ", $classes);
	$variables['navbar_classes_array'] =$classes;
	
	
$classes = explode(' ', $variables['container_class']); 
	if (($key = array_search("container", $classes)) !== FALSE) {
	$classes[$key] = "container-fluid";
	}
	$container_class = implode(" ", $classes);
	$variables['container_class'] =$container_class;
	
	}

?>