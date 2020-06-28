<nav>

	<style type="text/css">
		#placeholder {
			height: 143px;
		}

		nav {
			position: fixed;
			width: 100%;
			z-index: 1000;
		}

		nav #upper {
			background-color: #4AB4FF; /*dark blue*/
			text-align: center;
		}
		
		nav #logo {
			width: 65px;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		nav #home {
			width: 75px;
		}

		nav #toggle {
			width: 35px;
			cursor: pointer;
			position: fixed;
			top: 15px;
			right: 10px;
			padding: 10px;
			border-radius: 8px;
			display: none;
		}

		/**/
		
		nav #menu {
			list-style: none;
			padding: 0;
			margin: 0;
			background-color: #F7DE22; /*light gold*/
			text-align: center;
		}

		nav #menu li {
			display: inline-block;
			padding: 7px;
			margin: 10px;
		}

		nav #menu li:hover, nav #menu li:focus {
			background-color: #D1BE1D; /*dark gold*/
		}

		nav #menu li a {
			color: black;
			text-decoration: none;
			font-size: 20px;
			letter-spacing: 1.75px;
		}

		nav .hidden {
			display: block;
		}

		@media only screen and (max-width: 473px) {
			nav .hidden {
				display: none;
			}

			#placeholder {
				height: 85px;
			}

			nav #toggle {
				display: inline-block;
			}

			nav #menu li:hover, nav #menu li:focus {
				background-color: initial;
			}

			nav #menu li:active {
				background-color: #D1BE1D; /*dark gold*/
			}

			nav #toggle:active {
				background-color: #29D7F2; /*light blue*/
			}
		}

		@media only screen and (min-width: 474px) {
			nav #menu {
				display: block;
			}
		}

	</style>

	<script type="text/javascript">
		$( window ).on( "load", function() {
			$("nav #toggle").on("click", function() {
				$("nav #menu").toggleClass("hidden");
			});
		});
	</script>

	

	<div id="upper">
		<a id="home" href="/"><img id="logo" src="/favicons/logos/logo.png"></a>
		<img id="toggle" src="/favicons/logos/menu-3.png">
	</div>

	<ul id="menu" class="hidden">
		<li id="school">
			<a href="/school/">School</a>
		</li>
		<li id="portfolio">
			<a href="/portfolio/">Portfolio</a>
		</li>
		<li id="about">
			<a href="/about/">About</a>
		</li>
		<li id="contact">
			<a href="/contact/">Contact</a>
		</li>
	</ul>
</nav>
<div id="placeholder"></div>