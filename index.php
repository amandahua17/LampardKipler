<?php
	// phpinfo();
	include("include/include_all.php");
	head("Lampard Kipler");
		//content
		echo"
		<div class='fixed-bg index'>
			<div id='home' class='fixed-bg home'>";
			navbar(array("About the Creator", "How It Started", "What Thumbpaint Is", "Contact/Links"));
		echo"<br><br><br><br><br>
				<h1 style='font-size: 5em; '>Thumbpaint</h1>

			</div>
			<div id='About the Creator' class='fixed-bg home'>
				<h1>About the Creator</h1>
				<a href='/blog.php'>
					<img src='pictures/openmouth.JPG' style='float:left; clear: left;'>
				</a>
				<p style='float:right; clear:right; margin-right: 15%; text-align: left; width: 30%';>
					Lampard Kipler<br>
					This is everything about me! (Under Construction)
				</p>
				<p style='clear: both; text-align: left; margin-left: 15%; font-size: 1em;'>
					Click the image to view my blog and other art!
				</p>
			</div>
			<div id='How It Started' class='fixed-bg home'>
				<h1>How It Started</h1>
				<p style='float:left; clear:left; margin-left: 15%; text-align: left; width: 30%';>
					Thumbpaint started through... (Under Construction)
				</p>
				<img src='pictures/openmouth.JPG' style='float:right; clear: right;margin-right: 15%; width: 30%'>
			</div>
			<div id='What Thumbpaint Is' class='fixed-bg home'>
				<h1>What Thumbpaint Is</h1>
				<p> Thumbpaint is... (Under Construction)</p>
				<img style='align:center; margin: auto;'src='pictures/hot.JPG'>
				<p> More about what Thumbpaint is!</p>
			</div>
			<div id='Contact/Links' class='fixed-bg home'>
				<h2>Contact and Links</h2><br>
				<div style='margin: auto;'>
					<a href='https://www.redbubble.com/people/lampardkipler'>
						<img style='width: 5%;text-align: left; float: left; clear: left; margin-left: 15%;' src='pictures/SocialIcons/redbubble-logo.jpg'>
					</a>
					<a href='https://twitter.com/thumbpainting'>
						<img style='width: 5%; text-align: left;clear: none;' src='pictures/SocialIcons/Twitter Social Icons/Twitter Social Icons/Twitter_SocialIcon_Circle/Twitter_Social_Icon_Circle_Color.png'>
					</a>
					<a href='https://www.instagram.com/thumbpaint'>
						<img style='width: 5%; text-align: left;float: right; clear: right; margin-right: 15%;' src='pictures/SocialIcons/instagramsocialicon.jpg'>
					</a>
				</div>
				<a class='homebtn' href='#home'>back to top</a>
			</div>
		</div>
		";
	foot();
