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
					<li class="dropdown">	
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
					<li>
						<p class="navbar-text">Cart</p>
					</li>
					<!-- SEARCH -->
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control input-sm" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</form>
					
					
					
					
					<!-- <li><a href="#contact">Contact</a></li> -->
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</nav>