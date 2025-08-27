<!-- header -->
	<?php
	session_start();
	/* sets the referral sponsor */ 
	if(isset($_SESSION['user_replica']) && !isset($_GET['ref'])){
		$user_replica = $_SESSION['user_replica'];
	}
	else{
		$user_replica = isset($_GET['ref']) ? $_GET['ref'] : NULL;
		$_SESSION['user_replica'] = $user_replica;
	}

	/* checks if the user request comes from USA or Mexico
	using the header sent by Cloudflare */
	echo "Country: ${$_SERVER['HTTP_CF_IPCOUNTRY']}";
	$comes_from_usa_mex = in_array($_SERVER['HTTP_CF_IPCOUNTRY'],['US','MX']);

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















