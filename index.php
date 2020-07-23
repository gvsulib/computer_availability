<?php
header('Location: https://www.gvsu.edu/library/buildings-reopening-94.htm#computers');
date_default_timezone_set('America/New_York');

//Custom variables to contain chunks of HTML and style rules that will only get included in specific circumstances
//it's a lot easier to follow the descision code if we store all this in strings

$header = <<<EOT

<div role="banner">
			<a href="#main" class="focus-inverted">Skip to main content</a>
			
			
			<div class="header">
				<div class="row content">
					<div class="col-5 col-sm-12 logo">
						<div class="col-12 col-sm-9">
							<h1>
								<a href="https://www.gvsu.edu">
									<!--[if lte IE 8|!IE]>
										<img src="/homepage/files/img/gvsu_logo_white.png" alt="Grand Valley State University Logo" />
									<![endif]-->
									<!--[if gte IE 9|!IE]><!-->
										<img src="https://gvsu.edu/homepage/files/img/gvsu_logo_white.svg" alt="Grand Valley State University Logo" onerror="this.onerror=null;this.src='https://gvsu.edu/homepage/files/img/gvsu_logo_white.png'">
									<!--<![endif]-->
									<span id="gv-logo-label" class="sr-only" aria-hidden="true">Grand Valley State University</span>
								</a>
							</h1>
						</div>
						<div class="hide-lg hide-md col-sm-3">
							<a id="gv-hamburger" role="button" tabindex="0" aria-label="Menu" aria-controls="cms-navigation-mobile">
								<img src="https://prod.library.gvsu.edu/labs/cms4.1_files/menu.png" alt="" style="width:auto;min-width:auto;" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="col-7 col-sm-12 quick hide-print hide-sm">
						
					</div>
				</div>
			</div>
			<div class="site">
				<div class="row content">
					<div class="col-8 col-sm-12">
						<h1 class="h2 serif padding-none">
							<a href="https://gvsu.edu/library">
								University Libraries
							</a>
						</h1>
						<h2 class="sr-only">Search</h2>
						<form action="https://gvsu.summon.serialssolutions.com/search" class="library-search" role="search">
							<input name="spellcheck" value="true" type="hidden">
							<p>
								<label for="s.q" class="sr-only">
									Search the Library for Articles, Books, and More
								</label>
								<input id="s.q" name="s.q" placeholder="Find articles, books, &amp; more" size="45" type="text"><button type="submit">Find It!</button>
							</p>
						</form>
						<div class="library-nav">
							<h3>More research tools:</h3>
							<ul>
								<li>
									<a href="https://libguides.gvsu.edu/az.php">Databases</a>
								</li>
								<li>
									<a href="https://gvsu.edu/library/findbooks">Books</a>
								</li>
								<li>
									<a href="https://gvsu.edu/library/findjournals">Journals</a>
								</li>
								<li>
									<a href="https://libguides.gvsu.edu/">Subject Guides</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-4 col-sm-12 library-hours">
							
					</div>
				</div>
			</div>
			
				<div id="cms-navigation" class="navigation hide-sm hide-print">
					<div class="content">
						<div role="navigation">
	<ul role="menubar">
		
					<li>
						<a href="https://gvsu.edu/library/find-materials-2.htm" target="_self">
							Find Materials
						</a>
					</li>
				
					<li>
						<a href="https://gvsu.edu/library/services-4.htm" target="_self">
							Services
						</a>
					</li>
				
					<li>
						<a href="hhttps://gvsu.edu/library/about-the-university-libraries-3.htm" target="_self">
							About Us
						</a>
					</li>
				
					<li>
						<a href="https://help.library.gvsu.edu" target="_self">
							Help
						</a>
					</li>
				
					<li>
						<a href="https://www.gvsu.edu/library/myaccount" target="_self">
							My Account
						</a>
					</li>
				
	</ul>
</div>
					</div>
				</div>
			
		</div>

EOT;

$customStyle = <<<EOT

@font-face {font-family: "AlternateGothicFSNo3";src: url("//prod.library.gvsu.edu/libs/fonts/AlternateGothicNo3-webfont.eot");src: url("//prod.library.gvsu.edu/libs/fonts/AlternateGothicNo3-webfont.eot?#iefix") format("embedded-opentype"), url("//prod.library.gvsu.edu/libs/fonts/AlternateGothicNo3-webfont.woff") format("woff"), url("//prod.library.gvsu.edu/libs/fonts/AlternateGothicNo3-webfont.ttf") format("truetype"), url("//prod.library.gvsu.edu/libs/fonts/AlternateGothicNo3-webfont.svg#AlternateGothicFSNo3") format("svg");font-weight: normal;font-style: normal;}.span4 { width: 22%; }
	
	body {
		background-color: #fff; 
	}
	#cms-content {
		width: 100%;
	}
	#cms-content a {
    	color: #1F65A0;
    	text-decoration: none;
	}
    #cms-content h1 {
    	font-size: 2em;
	}
	#cms-content h1, #cms-content h2, #cms-content h3, #cms-content h4, #cms-content h5, #cms-content h6 {
    font-family: AlternateGothicFSNo3,Arial,sans-serif;
    font-weight: 100;
    margin-bottom: 11px;
    line-height: 1em;
	}
	body {
    font-size: 16px;
    line-height: 1.5em;
    color: #4E4E4E;
    font-family: Arial,sans-serif;
	}

EOT;

$footer = <<<EOD
<div class="clear hide-sm"></div>
					<div class="hide-print">
				<br>
				<hr>
				
			<div class="row">
				<div class="col-6">
					
						
				</div>
				<div class="col-6 text-right">
					<div id="s-la-widget-9529"></div>
<script src="https://api2.libanswers.com/1.0/widgets/9529"></script>
						
					
				</div>
			</div>
		
			</div>
							

			</div>
	</div>
</div>

	<div role="contentinfo">
			
				<div class="footer hide-print">
					<div class="content">
						<h1 class="sr-only">Footer</h1>
						<div class="row-gutter">
							
								<div class="col-3 col-md-4 col-sm-6">
									<h2 class="padding-none color-white">
										Contact
									</h2>
									
											<p class="vcard">
												
														<span class="tel">
															<span class="value">
																<a href="tel:616-331-3500">(616) 331-3500</a>
															</span>
															
														</span>
														<br>
													
														<a href="mailto:library@gvsu.edu" class="email">library@gvsu.edu</a>
														<br>
													
											</p>
											
												<br>
											
											<p class="vcard">
												
														<span class="fn">Text Us!</span>
														<br>
													
														<span class="tel">
															<span class="value">
																<a href="sms:616-818-0219">(616) 818-0219</a>
															</span>
															
														</span>
														<br>
													
											</p>
											
								</div>
							
								<div class="col-3 col-md-4 col-sm-6">
									<h2 class="padding-none color-white">
										Social Media
									</h2>
									
											<p>
												
													<a href="https://twitter.com/gvsulib" title="Twitter" class="text-nodecoration" target="_blank">
														<img src="https://prod.library.gvsu.edu/labs/cms4.1_files/twitter.png" alt="" style="width:auto;min-width:auto;" />
														<span class="sr-only">https://twitter.com/gvsulib</span>
													</a>
												
													<a href="https://www.youtube.com/channel/UCE5pH3lsWVQ9PbWGDE6EyFA" title="YouTube" class="text-nodecoration" target="_blank">
														<img src="https://prod.library.gvsu.edu/labs/cms4.1_files/youtube.png" alt="" style="width:auto;min-width:auto;" />
														<span class="sr-only">https://www.youtube.com/channel/UCE5pH3lsWVQ9PbWGDE6EyFA</span>
													</a>
												
													<a href="https://instagram.com/gvsulib" title="Instagram" class="text-nodecoration" target="_blank">
														<img src="https://prod.library.gvsu.edu/labs/cms4.1_files/instagram.png" alt="" style="width:auto;min-width:auto;" />
														<span class="sr-only">https://instagram.com/gvsulib</span>
													</a>
												
											</p>
											
										<br class="hide-lg hide-md">
									
								</div>
							
							<div class="col-3 col-md-4 col-sm-6">
								<h2 class="padding-none color-white">
									Committed to Equality
								</h2>
								<a href="https://gvsu.edu/library/acrl" target="_blank">
									<img src="https://www.gvsu.edu/cms4/asset/0862059E-9024-5893-1B5AAAC2F83BDDD8/acrl.png" alt="ACRL Diversity Alliance Logo" style="width:auto;max-width:100%;">
								</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6">
								<h2 class="padding-none color-white">
									Federal Depository Library Program
								</h2>
								<a href="https://gvsu.edu/library/govdoc" target="_blank">
									<img src="https://www.gvsu.edu/cms4/asset/0862059E-9024-5893-1B5AAAC2F83BDDD8/fdlp-new.png" alt="Federal Depository Library Program Logo" style="width:auto;max-width:100%;">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom hide-print">
		<div class="content">
			<div class="row-gutter">
				<div class="col-12 legal">
					<h2 class="sr-only">Legal</h2>
					<ul>
						<li>
							<a href="https://gvsu.edu/affirmativeactionstatement.htm"><span class="hide-sm hide-md">GVSU is an </span>AA/EO Institution</a>
						</li>
						<li>
							<a href="https://gvsu.edu/privacystatement.htm">Privacy Policy</a>
						</li>
						<li>
							<a href="https://gvsu.edu/disclosures">Disclosures</a>
						</li>
						<li>
							<span class="hide-sm hide-md">Copyright </span>© 2018 GVSU
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://prod.library.gvsu.edu/labs/chatbutton/chatbutton.js"></script>


EOD;


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Computer Availability - University Libraries - Grand Valley State University</title>
<?php

if (isset($_GET['x'])) {
	if($_GET['x'] == 'true') {

		echo '<meta http-equiv="refresh" content="180">';

	} else {

		echo '<meta http-equiv="refresh" content="900">';
		echo '<link rel="stylesheet" type="text/css" href="https://prod.library.gvsu.edu/labs/ares/css/styles.css" />';

	}
} else {
	echo '<meta http-equiv="refresh" content="900">';
	echo '<link rel="stylesheet" type="text/css" href="https://prod.library.gvsu.edu/labs/ares/css/styles.css" />';

}

?>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="description" content="Course Reserve at the GVSU University Libraries brings course readings and materials in one place for easy access.">
	<meta name="keywords" content="course reserve,course reserves,reserves,gvsu,grand valley,library, libraries,research tools">

	<!-- Custom CSS -->

	<style>
	.lib-horizontal-list.right ul { list-style: none; }
	.center { text-align: center;}
	.avail_green { background: #6c6; color: #333;}
	.avail_yellow { background: #f7ec1e;color: #333;}
	.legend { margin-left: .5em; height: 1em; padding: 0 .5em;}
	.avail_red { background: #c00; color: white;}
	.avail { padding: 1.5em 0; width: 100%; font-weight: bold; }
	.additional { text-align: center; margin-top: 1em;}
	p.available { margin-bottom: 0 !important;}
	.half h2 { margin-top: 1.5em;}
	@media screen and (min-width: 600px) {
		.span3 .span4 { width: 24%; float: left; margin-right: 1%;}
		.lib-horizontal-list.right ul { float: right;}	
		.lib-horizontal-list.right ul li { display: inline-block; margin-left: 1em;}
		.span3 .half { width: 49%; margin-right: 1%; float: left;}
		.half h2 { margin-top: 0;}
		#row2 { margin-top: 2.5em;}
	}

<?php

if (isset($_GET['x'])) {
	if($_GET['x'] == 'true') {
		echo $customStyle;
	
	}	
} 
if(isset($_GET['notitle'])){

	echo <<<EOD
	
	#cms-content h1,
	#cms-content h2.banner_title {
		display: none;
	}
EOD;
}

?>

	</style>
</head>
<body>
<?php
if (isset($_GET['x'])) {
	if ($_GET['x'] != 'true') {
		echo $header;
	}
} else {
	echo $header;
}
?>





<div role="main" id="main">
	<div class="content">
		
		<div id="cms-content">
	 	
					<h1 class="left"><a href="#">Library Computer Availability</a></h1>

				<!--div class="lib-horizontal-list right">
				<ul>
					<li><span class="avail_green legend">&nbsp;</span> Many open </li>
					<li><span class="avail_yellow legend">&nbsp;</span> Few open</li>
					<li><span class="avail_red legend">&nbsp;</span> None open</li>
				</ul>
			</div-->

			<!--div class="alert alert-danger">
				<p>The campus-wide computer availability service is currently unavailable. The problem has been reported to Information Technology. We apologize for any inconvenience.</p>
			</div-->

			    	



					
					<?php

					
					// Grab JSON dump of available computers and parse

					$now = time();
					$threshold = $now - 475;
					echo '<!-- Now: ' . $now . ' // Threshold: ' . $threshold . '-->';
					$time_file = file_get_contents('https://prod.library.gvsu.edu/computer_availability/refresh.json');

					echo '<script>console.log(' . $time_file . ');</script>';

					if($threshold > $time_file) {

						// Pull the live version
						$json = file_get_contents('http://gvsu.edu/tools/lab/api/room.cfm');

						// Cache the live version locally
						file_put_contents('api.json', $json);

						// Update the time refreshed
						if(file_put_contents('refresh.json', $now)) {
							echo '<script>console.log("Saved new timestamp");</script>';
						} else {
							echo '<script>console.log("Unable to save new timestamp");</script>';
						}
						echo '<script>console.log("Pulling live JSON");</script>';
						$time_file = $now;

					} else {

						// Pull the local cached version of the API
						$json = file_get_contents('https://prod.library.gvsu.edu/computer_availability/api.json');

						echo '<script>console.log("Pulling cached JSON");</script>';
					}


					$results = json_decode($json, true);

					// var_dump($results);

					$building_results = $results['room'];
					
					
					
							echo '<div class="row" style="clear:both;">
									<div class="span3 cms-chunk-html">
										<div class="cms-chunk-inner">';

							if(isset($_GET['library'])){
								if(strtolower($_GET['library']) == "maryi"){
									printMaryI();
								} 
								if(strtolower($_GET['library']) == "steelcase"){
									printSteelcase();
								}
								if(strtolower($_GET['library']) == "frey"){
									printFrey();
								}
							} else {
								printMaryI();
								echo  '<!--This is working--></div>
									</div>
									</div>
									<div class="cms-clear"></div>
									<div class="row" id="row2">
									<div class="span3 cms-chunk-html">
										<div class="cms-chunk-inner">';
								printSteelcase();
								printFrey();
								echo'	</div>
									</div>
									</div>';
							}

					function printAvail($id, $name, $className) {

						global $building_results;

						foreach ($building_results as $key => $values) {
							if($id == $values['id']) {

								$availableCPU = $values['availablePc'];
								// There shouldn't be less than 0 available computers
								if($availableCPU <= 0) { 
									$availableCPU = 0; 
								}
								$totalCPU = $values['totalPc'];
								// Calculate unavailable percentage
								$unavailableCPU = ($availableCPU / $totalCPU)*100;

								// Set CSS classes for availability
								if($unavailableCPU > 40) {
									$availableClass = "avail_green";
								} else if($unavailableCPU == 0) {
									$availableClass = "avail_red";
								} else {
									$availableClass = "avail_yellow";
								}

								echo '<div class="' . $className . '">';
								if($id == 1) {
									echo '<h2 class="banner_title"><a href="?library=frey">Frey @ <abbr title="Cook DeVos Center for Health Sciences">CHS</abbr></a></h2>';
								}
								echo '<p class="row1 center">' . $name . '</p>
									<div id="' . $id . '" class="avail ' . $availableClass . '">
										<p class="available center">' . $availableCPU . '&nbsp;open</p>
									</div>';
								if($id == 53) {
									echo '<p class="center" style="margin-top: .5em;">Unless a class is in session.</p>';
								}
								echo '</div>';

								break;
							}
						}
					}

					function printMaryI() {
						echo '<h2 class="banner_title"><a href="?library=maryi">Mary Idema Pew Library</a></h2>';
								printAvail(49, 'Atrium', 'span4');
								printAvail(46, '2nd Floor', 'span4');
								printAvail(47, '3rd Floor', 'span4');
								printAvail(48, '4th Floor', 'span4');
						echo '<div class="cms-clear"></div>
								<p class="additional">48 additional computers available in Learn Lab 001 on the Atrium level when not in use by a class</p>';	
					}

					function printSteelcase() {
						echo '<div class="half" id="stl">
							<h2 class="banner_title"><a href="?library=steelcase">Steelcase Library</a></h2>';
							printAvail(8, 'Walk-up Computers', 'half');
							printAvail(53, 'Computer Lab 114A', 'half');
						echo '</div>';
					}

					function printFrey() {
						echo '<div class="half" id="chs">
								<div class="half">&nbsp;</div>';
									printAvail(1, '290', 'half');
									// Hide 490, since the computers have all moved to CHS 100
									//printAvail(5, '490', 'half');
						echo '</div>';
					}
				

					?>

					<p>Last updated at <?php echo date('g:i a M j, Y', $time_file); ?></p>
					
					<div class="cms-clear"></div>
					
				
		</div>
	</div>
</div>
<?php
if (isset($_GET['x'])) {

	if($_GET['x'] != 'true') {
		echo $footer;

	}

} else {
	echo $footer;
}
?>


</body>
</html>