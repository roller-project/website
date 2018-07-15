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



function MergeArrays($Arr1, $Arr2)
{
  foreach($Arr2 as $key => $Value)
  {
    if(array_key_exists($key, $Arr1) && is_array($Value)){
      $Arr1[$key] = MergeArrays($Arr1[$key], $Arr2[$key]);
    }else{
      if(isset($Arr1[$key])){
	      $Arr1[$key] = $Value;
	  }
    }

  }

  return $Arr1;

}

