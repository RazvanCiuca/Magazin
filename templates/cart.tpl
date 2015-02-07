{include file='top.tpl'}
{include file='menu.tpl'}

<div class='container'>
	<div class="row">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Quantity</th>
					<th>Item Name</th>				
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				{section name=sec loop=$cart_contents}
					<tr>
						<td class="col-sm-1 col-md-1 col-lg-1">								
							<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
								{$cart_contents[sec].qty} <span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="cart.php?action=remove">0</a></li>
								{section name=i loop=$options}
									<li>
										<a href="cart.php?action=update&qty={$options[i]}&item_id={$cart_contents[sec].item_id}">
											{$options[i]}
										</a>
									</li>
								{/section}							
							</ul>
						</div>
					</td>
						<td>{$cart_contents[sec].item_name}</td>
						<td>{$cart_contents[sec].price} {$currency}</td>
					</tr>
				{/section}
				<tr>
					<td></td><td></td><th>Total: {$total} {$currency}</th>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="row">
		<a href="checkout.php">
			<button type="button" class="btn btn-success">Proceed to Checkout!</button>
		</a>
	</div>	
	
</div>


{include file='bottom.tpl'}