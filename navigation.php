<ul>
	<li><a href="../../index.php" title="home">Home</a></li>
	<?php
		//for index page
		$pagelist = glob("pages/*/*.php");
			foreach ($pagelist as $pages) {
				$pagesSplit = explode("/",$pages);
				echo '<li><a href="'. $pages .'" title="'. $pages .'">'. $pagesSplit[1] .'</a></li>';
			}

		//for every other page
		$pagelist = glob("../../pages/*/*.php");
			foreach ($pagelist as $pages) {
				$pagesSplit = explode("/",$pages);
				echo '<li><a href="'. $pages .'" title="'. $pages .'">'. $pagesSplit[3] .'</a></li>';
			}
	?>
</ul>