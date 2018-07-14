<?php 
if($content){

	echo $content;
}else{
	?>
	<h4><?php echo $data->title;?></h4>
	<p><?php echo $data->content;?></p>
	<?php
}

?>