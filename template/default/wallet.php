<?php if($address){ ?>
	
<h4>Wallet</h4>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body" style="height: 140px;">
				<div class="row" style="margin-bottom:15px; ">
					<div class="col-lg-3">
						<div style="width: 85px; height: 85px; border:1px solid #ddd;">
							<?php
							        $image = "https://chart.googleapis.com/chart?chs=85x85&cht=qr&chl={$symbol}:{$address}?amount=0";
							        $imageFile = file_get_contents($image);
							        $imageData = base64_encode($imageFile);
							        $src = 'data: '.@mime_content_type($image).';base64,'.$imageData;
							        echo '<img src="' . $src . '">';
							?>
						</div>
					</div>
					<div class="col">
						Request
						<input type="text" readonly class="form-control" value="<?php echo $address;?>">
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body" style="height: 140px;">
				<?php echo form_open(store_url("wallet/send/{$symbol}/{$address}"));?>
				<div class="row" style="margin-bottom:15px; ">
					<div class="col-lg-3">
						Number
						<input type="text" name="number" class="form-control">
					</div>
					<div class="col">
						To Address
						<input type="text" name="toaddress" class="form-control">
					</div>

				</div>
				<button type="submit" class="btn btn-sm btn-primary">Send</button>
				</form>
			</div>
		</div>
	</div>
</div>
<br>
<?php } ?>
<h4>Wallet List <div class="pull-right"><a class="btn btn-sm btn-primary" href="<?php echo store_url("wallet/create/{$symbol}");?>">New Wallet</a></div></h4>
		
<table class="table table-hover">
	<thead>
		<th>ID</th>
		<th>Address</th>
		<th>Balancer</th>
		<th>Update</th>
	</thead>
	<tbody>
		<?php foreach ($data as $key => $value) { ?>
			
		<tr>
			<td>#<?php echo $value->id;?></td>
			<td><a href="<?php echo store_url("wallet/manager/{$symbol}/{$value->address}");?>"><?php echo $value->address;?></a></td>
			<td><?php 
			        $eth->getBalance($value->address, function ($err, $balance) use($ether){
			            if ($err !== null) {
			                echo 'Error: ' . $err->getMessage();
			                return;
			            }
			            echo number_format($balance->toString()/$ether,8,'.',',');
			        });
			//echo $client->eth()->getBalance(new EthereumPHP\Types\Address($value->address), new EthereumPHP\Types\BlockNumber())->toEther();
			        ?></td>
			<td><?php echo date("d-m-Y h:i:s");?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<h4>History</h4>
<table class="table table-hover">
	<thead>
		<th>ID</th>
		<th>Form Address</th>
		<th>To Address</th>
		<th>Quantity</th>
		<th>TX</th>
		<th>Update</th>
	</thead>
	<tbody>
		<?php foreach ($history as $key => $value) { ?>
			<tr>
				<td><?php echo $value->id;?></td>
				<td><div style="overflow: hidden; max-width: 210px;"><?php echo $value->formAddress;?></div></td>
				<td><div style="overflow: hidden; max-width: 210px;"><?php echo $value->toAddress;?></div></td>
				<td><?php echo $value->quantity;?></td>
				<td><div style="overflow: hidden; max-width: 210px;"><?php echo $value->tx;?></div></td>
				<td><?php echo $value->created_at;?></td>
			</tr>
		<?php } ?>

	</tbody>
</table>