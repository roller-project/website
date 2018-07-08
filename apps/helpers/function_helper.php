<?php
function store_url($path=""){
	return base_url($path);
}
function resource_url($path=""){
	return store_url("resource/".$path);
}

function admin_url($path=""){
	return store_url("admin/".$path);
}

function template_url($path=""){
	$ex = explode('/', VIEWPATH);
	
	$template = array_pop($ex);
	if(!$template){
		$template = array_pop($ex);
	}
	
	return store_url("template/{$template}/".$path);

}

