<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Computer Availability - University Libraries - Grand Valley State University</title>
<?php
if(isset($_GET['x'])) {
	if($_GET['x'] == 'true') {
?>
	<meta http-equiv="refresh" content="180">
<?php 
	} else {
?>
	<meta http-equiv="refresh" content="900">
<?php 
	}
}
?>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="description" content="Course Reserve at the GVSU University Libraries brings course readings and materials in one place for easy access.">
	<meta name="keywords" content="course reserve,course reserves,reserves,gvsu,grand valley,library, libraries,research tools">

	<!-- Custom CSS -->

	<link rel="stylesheet" type="text/css" href="//gvsuliblabs.com/labs/libguides/css/styles.css" />
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

if(isset($_GET['x'])) {
	if($_GET['x'] == 'true') {

	echo '.span4 { width: 22%; }
	#gvsu-cf_header,
	#cms-header-wrapper,
	#cms-footer-wrapper,
	#cms-copyright-wrapper,
	#cms-content-footer {
		display: none;
	}
	#cms-body-wrapper,
	body {
		background-color: #fff; 
	}
	#cms-body {
		width: 100%;
	}
	#cms-content a {
    	color: #1F65A0;
    	text-decoration: none;
	}
    #cms-body h1 {
    	font-size: 2em;
	}
	#cms-body h1, #cms-body h2, #cms-body h3, #cms-body h4, #cms-body h5, #cms-body h6 {
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
    background-color: #88b3da;
}
    '
};
	
	}
}
if(isset($_GET['notitle'])){

	echo '#cms-content h1,
	#cms-content h2.banner_title {
		display: none;
	}';
}

?>

	</style>
</head>
<body>
	 	
	<div id="gvsu-cf_header" class="responsive">
		<div id="gvsu-cf_header-inner">
			<div id="gvsu-cf_header-logo">
				<a href="http://gvsu.edu/">
					<img src="//gvsu.edu/includes/topbanner/3/gvsu_logo.png" alt="Grand Valley State University">
				</a>
			</div><!-- End #gvsu-cf_header-logo -->
		</div><!-- End #gvsu-cf_header-inner -->
	</div><!-- End #gvsu-cf_header -->

	<div id="cms-header-wrapper">
		<div id="cms-header">
			<div id="cms-header-inner">
				<a id="cms-navigation-toggle" href="cms-siteindex-index.htm" onclick="return cmsToggleMenu(document.getElementById('cms-navigation'))">
					<img src=" //gvsu.edu/cms4/skeleton/0/files/img/transparent.png" alt="Menu">
				</a>
				<h1>
					<a href="http://gvsu.edu/library">University Libraries</a>
				</h1>
				<div id="library-search">
					<form action="//gvsu.summon.serialssolutions.com/search">
						<input type="hidden" name="spellcheck" value="true">
						<p>
							<label for="library-search-box" class="hide-accessible">Search the Library for Books, Articles, Media, and More</label>
							<input id="library-search-box" type="text" name="s.q" placeholder="Find articles, books, &amp; more" size="35">
							<input type="submit" value="Find It!">
						</p>
					</form>
				</div><!-- End #library-search -->
					
			<div class="cms-navigation" id="cms-navigation">
				<ul>
					<li><a href="http://gvsu.edu/library/find">Find Materials</a></li>
					<li><a href="http://gvsu.edu/library/allservices">Services</a></li>
					<li><a href="http://gvsu.edu/library/about">About Us</a></li>
					<li><a href="http://help.library.gvsu.edu">Help</a></li>
				</ul>
			</div><!-- End #cms-navigation -->

			<div class="cms-clear"></div>
		
			</div> <!-- End #cms-header-inner -->
		</div><!-- End #cms-header -->
	</div><!-- End #cms-header-wrapper -->

	<div id="cms-body-wrapper">
		<div id="cms-body">
			<div id="cms-body-inner">
				<div id="cms-body-table">
					<div id="cms-content">
	 	
					<h1 class="left"><a href="#">Library Computer Availability</a></h1>

				<div class="lib-horizontal-list right">
				<ul>
					<li><span class="avail_green legend">&nbsp;</span> Many open </li>
					<li><span class="avail_yellow legend">&nbsp;</span> Few open</li>
					<li><span class="avail_red legend">&nbsp;</span> None open</li>
				</ul>
			</div>

			    	


					
					<?php
					// Grab JSON dump of available computers and parse

					$json = file_get_contents('http://gvsu.edu/tools/lab/api/room.cfm');


					$results = json_decode($json, true);

					// var_dump($results);

					$building_results = $results['room'];
					
					
					
							echo '<div class="row">
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

					
					<div class="cms-clear"></div>
					<div id="cms-content-footer">
							
							
						<a href="http://labs.library.gvsu.edu/status/?problem" class="cms-report-problem">report a problem with this page</a>
						
						</div>

											</div><!-- End #cms-content -->
				</div><!-- End #cms-body-table -->
			</div><!-- End #cms-body-inner -->
		</div><!-- end #cms-body -->
	</div><!-- end #cms-body-wrapper -->

	<div id="cms-footer-wrapper">
		<div id="cms-footer">
			<div id="cms-footer-inner">
				<ul>
					<li><h4>Contact</h4>
						<p class="vcard">
							<span class="tel"> 
								<span class="type">Phone</span>:
								<span class="value">(616) 331-3500</span>
							</span>
							<br />
							<a href="mailto:library@gvsu.edu" class="email" target="_blank">library@gvsu.edu</a>
							<br />
						</p>
					</li>
					<li><h4>Social Media</h4>
						<p>
							<a href="http://twitter.com/gvsulib" title="http://twitter.com/gvsulib" class="socialmedia-icon socialmedia-icon-twitter">
								<span class="cms-screen-reader">http://twitter.com/gvsulib</span>
							</a>
							<a href="http://youtube.com/user/gvsulib" title="http://youtube.com/user/gvsulib" class="socialmedia-icon socialmedia-icon-youtube">
								<span class="cms-screen-reader">http://youtube.com/user/gvsulib</span>
							</a>
														<a href="http://instagram.com/gvsulib" title="http://instagram.com/gvsulib" class="socialmedia-icon socialmedia-icon-instagram"><span class="cms-screen-reader">http://instagram.com/gvsulib</span></a>

						</p>
					</li>
					<li id="library-fdlp">
								<p>
									<a href="http://gvsu.edu/library/govdoc" target="_blank">
										<img src="//wwwtest.gvsu.edu/cms4/asset/0862059E-9024-5893-1B5AAAC2F83BDDD8/fdlp-new.png" alt="Federal Depository Library Program Logo">
									</a>
									<br>
									Federal Depository<br>
									Library Program
								</p>
							</li>
				</ul>
			</div><!-- End #cms-footer-inner -->
		</div><!-- End #cms-footer -->
	</div><!-- End #cms-footer-wrapper -->

	<div id="cms-copyright-wrapper">
		<div id="cms-copyright">
			<div id="cms-copyright-inner">
				<ul>
					<li><a href="http://gvsu.edu/affirmativeactionstatement.htm">GVSU is an EO/AA Institutio</a></li>
					<li><a href="http://gvsu.edu/privacystatement.htm">Privacy Policy</a></li>
					<li><a href="http://gvsu.edu/disclosures">Disclosures</a></li>
					<li>Copyright © 1995-2015 GVSU</li>
				</ul>
			</div><!-- End #cms-copyright-inner -->
		</div><!-- End #cms-copyright -->
	</div><!-- End #cms-copyright-wrapper -->

	<!-- Special div custom to Illiad -->
	<div id="renewalHack" style="display: none;"></div>
<?php
if(isset($_GET['x'])) {
	if($_GET['x'] == 'true') { } else {
?>
	<script src="//gvsuliblabs.com/labs/chatbutton/chatbutton.js"></script>
	<script src="//gvsu.edu/cms4/skeleton/0/files/js/cms4.0.min.js"></script>
	<script>cmsInit()</script>
<?php
	}
}
?>


</body>
</html>