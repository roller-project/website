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
      $arv1[$key] = @MergeArrays($arv1[$key], $arv2[$key]);
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





function my_str_split($string)
{
    $slen=strlen($string);
    for($i=0; $i<$slen; $i++)
    {
        $sArray[$i]=$string{$i};
    }
    return $sArray;
}

function noDiacritics($string)
{
    //cyrylic transcription
    $cyrylicFrom = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $cyrylicTo   = array('A', 'B', 'W', 'G', 'D', 'Ie', 'Io', 'Z', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'Ch', 'C', 'Tch', 'Sh', 'Shtch', '', 'Y', '', 'E', 'Iu', 'Ia', 'a', 'b', 'w', 'g', 'd', 'ie', 'io', 'z', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'ch', 'c', 'tch', 'sh', 'shtch', '', 'y', '', 'e', 'iu', 'ia'); 


    $from = array("Á", "À", "Â", "Ä", "A", "A", "Ã", "Å", "A", "Æ", "C", "C", "C", "C", "Ç", "D", "Ð", "Ð", "É", "È", "E", "Ê", "Ë", "E", "E", "E", "?", "G", "G", "G", "G", "á", "à", "â", "ä", "a", "a", "ã", "å", "a", "æ", "c", "c", "c", "c", "ç", "d", "d", "ð", "é", "è", "e", "ê", "ë", "e", "e", "e", "?", "g", "g", "g", "g", "H", "H", "I", "Í", "Ì", "I", "Î", "Ï", "I", "I", "?", "J", "K", "L", "L", "N", "N", "Ñ", "N", "Ó", "Ò", "Ô", "Ö", "Õ", "O", "Ø", "O", "Œ", "h", "h", "i", "í", "ì", "i", "î", "ï", "i", "i", "?", "j", "k", "l", "l", "n", "n", "ñ", "n", "ó", "ò", "ô", "ö", "õ", "o", "ø", "o", "œ", "R", "R", "S", "S", "Š", "S", "T", "T", "Þ", "Ú", "Ù", "Û", "Ü", "U", "U", "U", "U", "U", "U", "W", "Ý", "Y", "Ÿ", "Z", "Z", "Ž", "r", "r", "s", "s", "š", "s", "ß", "t", "t", "þ", "ú", "ù", "û", "ü", "u", "u", "u", "u", "u", "u", "w", "ý", "y", "ÿ", "z", "z", "ž","ă","ặ","ắ","đ");
    $to   = array("A", "A", "A", "A", "A", "A", "A", "A", "A", "AE", "C", "C", "C", "C", "C", "D", "D", "D", "E", "E", "E", "E", "E", "E", "E", "E", "G", "G", "G", "G", "G", "a", "a", "a", "a", "a", "a", "a", "a", "a", "ae", "c", "c", "c", "c", "c", "d", "d", "d", "e", "e", "e", "e", "e", "e", "e", "e", "g", "g", "g", "g", "g", "H", "H", "I", "I", "I", "I", "I", "I", "I", "I", "IJ", "J", "K", "L", "L", "N", "N", "N", "N", "O", "O", "O", "O", "O", "O", "O", "O", "CE", "h", "h", "i", "i", "i", "i", "i", "i", "i", "i", "ij", "j", "k", "l", "l", "n", "n", "n", "n", "o", "o", "o", "o", "o", "o", "o", "o", "o", "R", "R", "S", "S", "S", "S", "T", "T", "T", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "W", "Y", "Y", "Y", "Z", "Z", "Z", "r", "r", "s", "s", "s", "s", "B", "t", "t", "b", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "w", "y", "y", "y", "z", "z", "z","a","a","a","d");


    $from = array_merge($from, $cyrylicFrom);
    $to   = array_merge($to, $cyrylicTo);

    $newstring=str_replace($from, $to, $string);
    return $newstring;
}

function CreateSlugs($string){
	$data = noDiacritics($string);
	return strtolower(str_replace('--','-',$data));
}

function makeSlugs($string, $maxlen=0)
{
    $newStringTab=array();
    $string=strtolower(noDiacritics($string));
    if(function_exists('str_split'))
    {
        $stringTab=str_split($string);
    }
    else
    {
        $stringTab=my_str_split($string);
    }

    $numbers=array("0","1","2","3","4","5","6","7","8","9","-");
    //$numbers=array("0","1","2","3","4","5","6","7","8","9");

    foreach($stringTab as $letter)
    {
        if(in_array($letter, range("a", "z")) || in_array($letter, $numbers))
        {
            $newStringTab[]=$letter;
        }
        elseif($letter==" ")
        {
            $newStringTab[]="-";
        }
    }

    if(count($newStringTab))
    {
        $newString=implode($newStringTab);
        if($maxlen>0)
        {
            $newString=substr($newString, 0, $maxlen);
        }

        $newString = removeDuplicates('--', '-', $newString);
    }
    else
    {
        $newString='';
    }

    return $newString;
}


function checkSlug($sSlug)
{
    if(preg_match("/^[a-zA-Z0-9]+[a-zA-Z0-9\-]*$/", $sSlug) == 1)
    {
        return true;
    }

    return false;
}

function removeDuplicates($sSearch, $sReplace, $sSubject)
{
    $i=0;
    do{

        $sSubject=str_replace($sSearch, $sReplace, $sSubject);
        $pos=strpos($sSubject, $sSearch);

        $i++;
        if($i>100)
        {
            die('removeDuplicates() loop error');
        }

    }while($pos!==false);

    return $sSubject;
}
