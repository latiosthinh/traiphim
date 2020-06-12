<div class="header-search__wrapper">
	<form role="search" method="get" class="search-form" action="<?php echo site_url('/'); ?>">
		<input type="search" class="search-field" placeholder="Nhập từ khoá để tìm kiếm" value="" name="s">
		<input type="hidden" name="post_type" value="post" />
		<button type="submit" class="search-submit">
            <ion-icon name="search-outline"></ion-icon>
		</button>
	</form>
	
	<div id="search-result"></div>
</div>