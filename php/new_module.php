<?php
	$title 			= str_replace(" ", "-", strtolower($_POST['module_title']));
	$textarea 		= $_POST['module_textarea'];
	$column_width 	= $_POST['column_width'];
	$select_page 	= str_replace(" ", "-", strtolower($_POST['select_page']));

	//create directory
	mkdir("../modules/".$select_page);

	//create module
	$myfile = fopen("../modules/". $select_page . "/" . $title .".html", "w") or die("Unable to open file!");
	$txt = '<div class="'. $column_width . '"><h5>' . $title . '</h5>';
	fwrite($myfile, $txt);
	$txt = '<div>' . $textarea . '</div></div>';
	fwrite($myfile, $txt);
	fclose($myfile);
?>