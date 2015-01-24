<div class="container">
	<div id="newest-books">
		<div class='row'>
			<h3>Newest Books</h3>
		</div>
		<div class="row">
			{section name=sec loop=$newest_items}
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div class="row">						
						<div class="item-image">						
							<img src="{$item_image_path}{$newest_items[sec].item_id}.jpg" width="75" height="100">
						</div>						
					</div>
					<div class="row">
						<a tabindex="-1" href="item.php?item_id={$newest_items[sec].item_id}">
							{$newest_items[sec].item_name}
						</a>
					</div>
					<div class="row">
						by
						<a tabindex="-1" href="maker.php?maker_id={$newest_items[sec].maker_id}">
							{$newest_items[sec].maker_name}
						</a>
					</div>
					<div class="row">									
						{$newest_items[sec].price} {$currency}
					</div>
				</div>
			{/section}
		</div>
	</div>	
	
	<div id="popular-books">
		<div class='row'>
			<h3>Most Popular Books</h3>
		</div>
		<div class="row">
			{section name=sec loop=$popular_items}
				<div class="col-sm-2 col-md-2 col-lg-2">
					<div class="row">						
						<div class="item-image">						
							<img src="{$item_image_path}{$popular_items[sec].item_id}.jpg" width="75" height="100">
						</div>						
					</div>
					<div class="row">
						<a tabindex="-1" href="item.php?item_id={$popular_items[sec].item_id}">
							{$popular_items[sec].item_name}
						</a>
					</div>
					<div class="row">
						by
						<a tabindex="-1" href="maker.php?maker_id={$popular_items[sec].maker_id}">
							{$popular_items[sec].maker_name}
						</a>
					</div>
					<div class="row">									
						{$newest_items[sec].price} {$currency}
					</div>
				</div>
			{/section}
		</div>
	</div>	
</div><!-- /.container --> 