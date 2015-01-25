{include file='top.tpl'}
{include file='menu.tpl'}

<div class='container'>
	<div class="row">
		<div class="page-header"><h2>{$maker_name}</h2></div>
	</div>
	{section name=sec loop=$items}
		<div class="well">
			<div class="row">
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div class="row">
						<img src="{$URL_BASE}item_images/{$items[sec].item_id}.jpg" width="100" height="125">
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="row">		
						<a href="item.php?item_id={$items[sec].item_id}">	
							<h4>{$items[sec].item_name}</h4>	
						</a>	
					</div>
					<div class="row">
						by <a tabindex="-1" href="maker.php?maker_id={$items[sec].maker_id}">
							{$items[sec].maker_name} </a>
					</div>
					<div class="row">
						Price: {$items[sec].price} {$currency}
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									Add to cart!
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								</button>
							</span> 					
						</div>						
					</div>
				</div>
			</div>
		</div>
	{/section}
</div><!-- /.container --> 	






{include file='bottom.tpl'}