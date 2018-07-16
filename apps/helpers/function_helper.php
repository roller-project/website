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



function MergeArrays($arv1, $arv2)
{


  foreach($arv2 as $key => $Value)
  {
  	
    if(is_array($Value)){
      $arv1[$key] = array_merge($arv1[$key], $arv2[$key]);
    }else{
      $arv1[$key] = $Value;
    }

  }

  
  return $arv1;

}


function objectToArray($obj){
	$arv = [];
	foreach ($obj as $key => $value) {
		$arv[$key] = $value;
	}
	return $arv;
}
