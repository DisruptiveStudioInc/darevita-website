<!-- header -->
	<?php
	session_start();
	$user_replica = isset($_GET['ref']) ? $_GET['ref'] : NULL;
	include("./includes/header.php");
	?>
<!-- /header -->

	<?php
	$pages_dir = 'pages';

		if(!empty($_GET['p'])){

			$pages = scandir ($pages_dir, 0);
			unset ($pages[0], $pages[1]);
			$p = $_GET['p'];

			if (in_array($p.'.inc.php', $pages)){
				include ($pages_dir.'/'.$p.'.inc.php');
			}else{
				echo '<section><div class="jc-center ai-center h-100"><p>Sorry, the page does not exist.</p></div></section>';
			}
		} else {
			include($pages_dir.'/home.inc.php');
		}
	?>

<!-- footer -->
	<?php include("./includes/footer.php"); ?>
<!-- /footer -->















