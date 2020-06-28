<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/code-text.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<?php
		require $_SERVER['DOCUMENT_ROOT'].'/site-parts/head-tags.php';
	?>
	<meta name="description" content="My name is David Zhan. On my website, I have many things such as school projects and simple games.">
	<title>David Zhan</title>
	<style type="text/css">
		div#resume
		{
			text-align: center;
			margin-top: 20px;
		}

		iframe
		{
			width: 800px;
			height: 1100px;
		}


		div#welcome {
			height: 350px;
			width: 100%;
			background-color: #4AB3FF;/*Blue*/
			text-align: center;
		}
			div#welcome h2 {
				font-size: 100px;
				margin-top: 115px;
				margin-bottom: 115px;
				display: inline-block;
				color: white;

				/*00ff44*/
			}
		div#im-a-container {
			text-align: left;
			width: 100%;
			height: 100px;
				background: linear-gradient(to bottom, #4AB3FF, #4ED6D4);/*Blue, Turquoise*/
		}
			div.im-a {
				height: 100px;
				width: 50%;
				display: inline-block;
				/*margin-right: -3.5px;*/
				text-align: center;
			}
			div#im-a-1 {
				background: linear-gradient(to bottom, #4AB3FF, #FFB760);/*Blue, Orange*/
				/*text-align: right;*/
				float: left;
			}
			div#im-a-2 {
				background: linear-gradient(to bottom, #4AB3FF, #4ED6D4);/*Blue, Turquoise*/
				/*text-align: left;*/
				float: right;
			}
				div.im-a h2 {
					font-size: 50px;
					margin-top: 19.5px;
					margin-bottom: 19.5px;/*
					margin-left: 40px;
					margin-right: 40px;*/
					display: inline-block;
					color: white;
				}
		div#item-container {

		}
			div#item-container div.row {
				height: 300px;
				width: 100%;
			}
				div#item-container div.row div.item {
					height: 100%;
					width: 50%;
					display: inline-block;
				}
					div#item-container div.row div.item:nth-child(1) {
						float: left;
					}
					div#item-container div.row div.item:nth-child(2) {
						float: right;
					}
						div#item-container div.row div.item h2 {
							color: white;
							font-size: 65px;
							text-align: center;
							margin-top: 111px;
							margin-bottom: 111px;
						}
							div#student {
								background-color: #FFB760;/*Orange*/
							}
							div#prog {
								background-color: #4ED6D4;/*Turquoise*/
							}
							div#swimmer {
								background-color: #E7D51A;/*Yellow*/
							}
							div#sb {
								background-color: #A29AFF;/*Purple*/
							}
							div#student2 {
								background-color: purple;
							}
							div#student3 {
								background-color: yellow;
							}
			div#item-container div.trans-row {
				height: 100px;
				width: 100%;
			}
				div#item-container div.trans-row div.trans {
					height: 100%;
					width: 50%
				}
					div#item-container div.trans-row div.trans:nth-child(1) {
						float: left;
					}
					div#item-container div.trans-row div.trans:nth-child(2) {
						float: right;
					}
						div#student-trans {
							background: linear-gradient(to bottom, #FFB760, #E7D51A); /*Orange, Yellow*/
						}
						div#prog-trans {
							background: linear-gradient(to bottom, #4ED6D4, #A29AFF);/*Turquoise, Purple*/
						}
						div#swimmer-trans {
							background: linear-gradient(to bottom, #E7D51A, #FFB760);/*Yellow, Orange*/
						}
						div#sb-trans {
							background: linear-gradient(to bottom, #A29AFF, #FFFFFF);/*Purple, White*/
						}


		#ski-trip-link a {
			color: white;
		}
	</style>
</head>
<body>

	<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/top-bar/top-bar.php'; ?>


	<div id="resume"><iframe src="David Zhan's Resume.pdf"></iframe></div>

	<!-- <div id="welcome">
		<h2 id="ski-trip-link"><a href="/ski/">SKI TRIP</a></h2>
	</div>
	<div id="im-a-container">
		<div id="im-a-1" class="im-a"><h2>I'M</h2></div>
		<div id="im-a-2" class="im-a"><h2>A</h2></div>
	</div>
	<div id="item-container">
		<div class="row">
			<div id="student" class="item">
				<h2>STUDENT</h2>
			</div>
			<div id="prog" class="item">
				<h2>PROGRAMMER</h2>
			</div>
		</div>
		<div class="trans-row">
			<div id="student-trans" class="trans"></div>
			<div id="prog-trans" class="trans"></div>
		</div>
		<div class="row">
			<div id="swimmer" class="item">
				<h2>SWIMMER</h2>
			</div>
			<div id="sb" class="item">
				<h2>SCIENCE BOWLER</h2>
			</div>
		</div>
		<div class="trans-row">
			<div id="swimmer-trans" class="trans"></div>
			<div id="sb-trans" class="trans"></div>
		</div>
		<div class="row">
			<div id="student2" class="item">
				<h2>STUDENT2</h2>
			</div>
			<div id="student3" class="item">
				<h2>STUDENT3</h2>
			</div>
		</div>
	</div> -->

	<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/footer/footer.php'; ?>

</body>
</html>