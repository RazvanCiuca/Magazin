{include file='top.tpl'}
{include file='menu.tpl'}

<div class="row">
	<div class="row" style="min-height:175px;">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<div class="row">
				<div>
					<img src="{$URL_BASE}item_images/{$item.item_id}.jpg" width="150" height="200">
				</div>
			</div>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			<div class="row">				
				<h2>{$item.item_name}</h2>	
			</div>
			<div class="row">
				by <a tabindex="-1" href="{$URL_BASE}makers/{$item.maker_name|replace:' ':'-'}">
					{$item.maker_name} </a>
			</div>
			<div class="row">
				<h4><i>{$item.description}</i></h4>
			</div>
			<div class="row">
				Price: {$item.price} {$currency}
				<form action="{$URL_BASE}cart.php?action=add" method="POST">
					<div class="input-group">				
						<input type="hidden" name="item_id" value="{$item.item_id}">
						<input type="hidden" name="item_name" value="{$item.item_name}">
						<input type="hidden" name="maker_name" value="{$item.maker_name}">
						<input type="hidden" name="price" value="{$item.price}">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button submit">								
								Add to cart!
								<span class="glyphicon glyphicon-shopping-cart"></span>
							</button>
						</span> 					
					</div>	
				</form>					
			</div>
		</div>
	</div>
</div><!-- /.container --> 	
<br><br>
<div class='container'>
	<div class="well">
		<h4>Reviews:</h4>
		{section name=sec loop=$reviews}
			<div class="media">
				<div class="media-left">
					<span class="medio-object glyphicon glyphicon-user" style="font-size:3em"></span>
				</div>
				<div class="media-body">
					<b>{$reviews[sec].user_name}</b><br>
					{$reviews[sec].review}
				</div>
			</div>
		{/section}
	</div><!-- /.well -->
</div><!-- /.container --> 

{include file='bottom.tpl'}