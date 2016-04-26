<form action="/" method="get" accept-charset="utf-8" id="searchform" role="search">
	<div class="form-area">
	<!-- <label for="s">Search for:</label> -->
	<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" class="form-control search-input" placeholder="SEARCH HERE..."/>

	<button type="submit" id="searchsubmit" class="btn search-btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>

	</div>
</form>