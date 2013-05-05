					<form method="get" action="<?php bloginfo('url'); ?>/">
						
						<h4 class="blogh4">
							<label for="s">Search</label>
						</h4>
						<input type="text" id="s" name="s" value="<?php the_search_query(); ?>">
						<input type="submit" value="Go">
					</form>