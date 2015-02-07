<div class="row">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class='row'>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
		 			 </button>
		 			 <a class="navbar-brand list-inline" href="{$URL_BASE}index.php">Shop</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						{* 
						<li>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
								    Authors
								<span class="caret"></span>
								</button>					
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									{section name=sec loop=$makers}
										<li role="presentation">
											<a tabindex="-1" href="{$URL_BASE}makers/{$makers[sec].maker_name}">{$makers[sec].maker_name}</a>
										</li>
									{/section}
								</ul>
							</div>
						</li> 
						*}
						<li class="dropdown">	
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
								    Categories
									<span class="caret"></span>
								</button>					
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									{section name=sec loop=$categories}
									<li><a tabindex="-1" href="{$URL_BASE}categories/{$categories[sec].category_name}">{$categories[sec].category_name}</a></li>
									{/section}
								</ul>
							</div>
						</li>
						<li>
							<p class="navbar-text"><a href='{$URL_BASE}cart.php'>Cart</a></p>
						</li>
						
						
						
						
						
						<!-- <li><a href="#contact">Contact</a></li> -->
					</ul>
					
					<!-- SEARCH -->
						<form class="navbar-form navbar-left" action="search.php" method="POST">
							<div class="form-group">
								<input type="text" class="form-control input-sm" placeholder="Search" name="keywords">
							</div>
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</form>
					
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</nav>
</div>
<br><br><br><br>