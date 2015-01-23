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
	 			 <a class="navbar-brand list-inline" href="index.php">Shop</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<!-- <li>
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
							    Authors
							<span class="caret"></span>
							</button>					
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								{section name=sec loop=$autori}
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">{$autori[sec].nume_autor}</a></li>
								{/section}
							</ul>
						</div>
					</li> -->
					<li>	
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
							    Categories
							<span class="caret"></span>
							</button>					
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								{section name=sec loop=$categories}
								<li><a tabindex="-1" href="category.php?category_id={$categories[sec].category_id}">{$categories[sec].category_name}</a></li>
								{/section}
							</ul>
						</div>
					</li>
					<!-- SEARCH -->
					<li>
						<div class="col-sm-2 col-md-2 col-lg-2">
							<div class="input-group">
								<input type="text" class="form-control input-sm" placeholder="Search for..."> 
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
								</span>
							</div> <!-- /input-group -->
						</div>
					</li>
					
					<!-- <li><a href="#contact">Contact</a></li> -->
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</nav>