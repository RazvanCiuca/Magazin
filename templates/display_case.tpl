


<div class="row">
	<div class="col-md-12" id="newest-books">
		<div class='row'>
			<div class="col-md-6"><h3>Newest Books</h3></div>
		</div>
		<div class="col-md-6">
			<div class="row">
				{section name=sec loop=$newest_items}
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="row">						
							<div>						
								<img src="{$item_image_path}{$newest_items[sec].item_id}.jpg" width="75" height="100">
							</div>						
						</div>
						<div class="row">
							<div>
								<a tabindex="-1" href="{$URL_BASE}items/{$newest_items[sec].item_id}">
									{$newest_items[sec].item_name}
								</a>
							</div>
						</div>
						<div class="row">
							by
							<a tabindex="-1" href="{$URL_BASE}makers/{$newest_items[sec].maker_name|replace:' ':'-'}">
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
	</div>	
	
	<div class='col-md-12' id="popular-books">
		<div class='row'>
			<div class="col-md-6"><h3>Most Popular Books</h3></div>
		</div>
		<div class="col-md-6">
			<div class="row">
				{section name=sec loop=$popular_items}
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="row">						
							<div class="item-image">						
								<img src="{$item_image_path}{$popular_items[sec].item_id}.jpg" width="75" height="100">
							</div>						
						</div>
						<div class="row">
							<a tabindex="-1" href="{$URL_BASE}items/{$popular_items[sec].item_id}">
								{$popular_items[sec].item_name}
							</a>
						</div>
						<div class="row">
							by
							<a tabindex="-1" href="{$URL_BASE}makers/{$popular_items[sec].maker_name}">
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
	</div>	
</div>