<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Learn how to include Bootstrap in your project using Webpack 3.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.7.0">
    <link rel="icon" href="<?php echo resource_url("favicon.ico");?>">
    <title><?php echo $header["title"];?></title>
    <script src="<?php echo resource_url("js/apps.js");?>"></script>
    <script src="<?php echo template_url("js/main.js");?>"></script>
  </head>
    <body>
	<?php echo $flash;?>
	<ul class="fileList">
		<?php foreach ($file as $key => $value) { ?>
			<li data-dismiss="modal" onClick="dropFile('<?php echo $value["paths"];?>');">
				<div style="background-image:url('<?php echo $value["url"];?>')" title="<?php echo $value["name"];?>" data-toggle="tooltip"></div>
				
			</li>
		<?php } ?>
		
	</ul>

	<style type="text/css">
		.fileList{
			list-style: none;
			padding: 0;
			margin: 0;
			padding-top: 15px;
		}
		.fileList li{
			float: left;
			margin-left:15px;
			margin-bottom: 15px;
			width: 125px;
			height: 65px;
			border:1px solid #ddd;
			padding: 5px;
			overflow: hidden;
			text-align: center;
			position: relative;
			cursor: pointer;
		}
		.fileList li:hover{
			border-color: green;
		}
		.fileList li div{
			position: absolute;
			width:100%; 
			vertical-align: center;
			height: 100%;
			background-size : contain;
			background-repeat: no-repeat;
			background-position: center;
		}
	</style>
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		});

		function dropFile(v){
			window.parent.$(".modal-footer").attr("data-svalue",v);
			window.parent.$('.btnUploadFileClose').click();
		}
	</script>
	</body>
</html>