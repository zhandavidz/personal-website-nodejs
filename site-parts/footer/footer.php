<footer>
	<style type="text/css">
		footer {
			background-color: #D1BE1D;
			border-top: 8px solid #665D0E;
			text-align: center;
		}
		footer > #copyright-sitemap {
			padding-bottom: 20px;
			color: white;
		}
		footer > #copyright-sitemap a {
			color: white;
			text-decoration: none;
		}
		footer > #logo {
			padding-top: 20px;
			width: 65px;
		}
		footer > #contact {
			padding: 30px;
		}
		footer > #contact a {
			padding: 15px;
			border-radius: 60px;
			background-color: #9C8E15;
			font-size: 35px;
			text-decoration: none;
			color: white;
		}
		footer > #contact a:hover {
			background-color: #827712;
		}
		footer > #copyright-sitemap a:hover {
			text-decoration: underline;
		}

		@media only screen and (max-width: 540px) {
			footer > #contact a {
				font-size: 6.5vw;
				padding: 2.6vw;
			}
			footer > #contact {
				padding-left: 5vw;
				padding-right: 5vw;
			}
		}
	</style>

	

	<img id="logo" src="/favicons/logos/logo.png">

	

	<div id="contact">
		<a href="mailto:davidzhan.com@gmail.com">davidzhan.com@gmail.com</a>
	</div>

	<div id="copyright-sitemap">
		&copy; <?php
			$fromYear = 2017; 
			$thisYear = (int)date('Y'); 
			echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?>
			David Zhan | <a href="/sitemap/">Sitemap</a>
	</div>

</footer>