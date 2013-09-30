<html>
<head>
    <link href="xSelect/xSelect.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/buttons.css" type="text/css" rel="stylesheet" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body style="overflow:visible">
	<div id="ajaxLoader"><img src="images/ajax_loader.gif" alt="Be patient..." /></div>
	<div class="header clearfix">
		<div style="margin: 0 auto;">
			<div class="padded">
				
				<div class="header-button-left header-button-blank">
				</div>
				
				<div class="logo-white">
				</div>
				
				<div class="header-button-right header-button-blank">
				</div>
				
			</div>
		</div>
		<!--
		<div class="container">
			<div class="MAIN-PADDING">
				<div class="left-header-button">1</div>
				<i class="logo-white"></i>
				<div class="right-header-button"></div>
			</div>
		</div>
		-->
	</div>
	
	<div id="MAIN-CENTER">
		<div id="MAIN" class="MAIN-PADDING padded sep-bottom GPUAccel">
		
		
			<!-- Page One -->
			
			<div class="what-box title-box sep">
			I NEED
			<select placeholder="Service Category" class="what-text nativeSelect">
				<option value="" selected disabled>Select Service Category</option>
			</select>
			<!-- 
			
			Loaded via the XScroller 
				
				<div id="scroller-selected" class="what-text standardSelect" tabindex="0" placeholder="Service Category">
					<div id="test" class="iScroll">
						<li>
							<ul>Test Spin</ul>
							<ul>Accountants</ul>
							<ul>Appliances Repair</ul>
							<ul>Auto Glass Repair</ul>
							<ul>Bail Bonds</ul>
							<ul>Bus Rental</ul>
							<ul>Car Wash</ul>
							<ul>Carpet Cleaners</ul>
							<ul>Chiropractors</ul>
							<ul>Computer Repair</ul>
							<ul>Dentists</ul>
							<ul>Test Spin</ul>
							<ul>Accountants</ul>
							<ul>Appliances Repair</ul>
							<ul>Auto Glass Repair</ul>
							<ul>Bail Bonds</ul>
							<ul>Bus Rental</ul>
							<ul>Car Wash</ul>
							<ul>Carpet Cleaners</ul>
							<ul>Chiropractors</ul>
							<ul>Computer Repair</ul>
							<ul>Dentists</ul>
						</li>
					</div>
				</div>
			
			-->
			</div>
			
			<div class="where-box title-box sep">	
				NEAR
					<div class="where-text-wrap">
						<div class="where-text-innerwrap">
							<input class="where-text"></input>
						</div>
					</div>
					<div class="button" id="where-button">
						<a href="#"></a>
					</div>
			</div>
			
			<div class="subtext sep">
				<i> We connect you with local businesses instantly! </i>
			</div>
			
			<div id="actionbutton" class="button smallsep">
				Next
			</div>
			
			<div class="footer clearfix smallsep sep-bottom">
				<div class="info-icon"></div>
				<div class="settings-icon "></div>
			</div>
			
			<!-- End Page One -->
							
			
			<!-- Begin Page Two -->
			<!--
			<div class="GPUAccel">
			-->
			<div class="description-box title-box clearfix sep sep-bottom">
				<div class="clearfix">
					ADD A DESCRIPTION
				</div>
				<div id="description-button" class="button">
					<a href="#"></a>
				</div>
				<div class="description-text-wrap">
					<div class="description-text-innerwrap">
						<textarea id="description-text" class="description-text deactive" crossBrowserPlaceholder="Describe what you need help with in as much detail as possible...">Describe what you need help with in as much detail as possible...</textarea>
					</div>
				</div>
			</div>

			<div class="time-box title-box sep">
				SCHEDULE A TIME
			</div>
			<div id="time">

			</div>
			<!--
			<div class="time-buttons clearfix">
				<div id="now" class="time-button deactive">NOW</div>
				<div id="anytime" class="time-button deactive">ANYTIME</div>
				<div id="timetable" class="time-button deactive">PICK TIME</div>
			</div>
			-->
			<div id="actionbutton" class="button sep">
				Call Companies
			</div>		
			<div class="footer clearfix smallsep sep-bottom"> 
				<div class="info-icon"></div>
				<!--<div class="settings-icon "></div>-->
			</div>
			<!--
			</div>
			-->
			<!-- End Page Two -->	

			
			<!-- Begin Recording Page -->
			
			<div class="microphone sep"></div>	

			<div class="recording-box clearfix">
				<div class="recording-circle">
					<div class="recording-button">
					</div>
				</div>	
				<div class="recording-time">00:23</div>
				<div class="recording-status"></div>
			</div>
			
			<div class="subtext sep">
				<div style="padding-top:30px;">
					<i> You can record your voice and describe the exact service you are looking for. Be as specific as possible. </i>
				</div>
			</div>
			<div class="button sep sep-bottom">
				Save
			</div>
			
			<!-- End Recording Page -->
			
			<!-- Begin TimeTable Page -->

			<div id = "tt" class="timetable sep sep-bottom">
			<!--
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td> </td> 
						<td class="head">
							Morning<br/>8-11AM
						</td>
						<td class="head">
							Afternoon<br/>12-4PM
						</td>
						<td class="head">
							Evening<br/>5-8PM
						</td>
					</tr>
					<tr>
						<td class="lefthead">
							Wed<br/>12/21
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
					</tr>
					<tr>
						<td class="lefthead">
							Thurs<br/>12/22
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
					</tr>
					<tr>
						<td class="lefthead">
							Fri<br/>12/23
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
					</tr>
					<tr>
						<td class="lefthead">
							Sat<br/>12/24
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
					</tr>
					<tr>
						<td class="lefthead">
							Sun<br/>12/25
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
					</tr>
					<tr>
						<td class="lefthead">
							Mon<br/>12/26
						</td>
						<td class="blank">
							
						</td>
						<td class="active">
							
						</td>
						<td class="blank cancel">
							
						</td>
					</tr>
					<tr>
						<td class="lefthead">
							Tues<br/>12/27
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
						<td class="blank">
							
						</td>
					</tr>
				</table>
			-->
			</div>
			<div id="actionbutton" class="button sep sep-bottom">
				Save
			</div>

			<!-- End TimeTable Page -->

			<!-- Begin Step 2a -->

			<div id="info">
			</div>
			<!--
			<div class="info-box sep ">
				<div class="info-item">
					<span>Name:</span>
					<input type="text"/>
					<i class="valid"></i>
				</div>
				<div class="info-item">
					<span>Email:</span>
					<input type="text"/>
					<i></i>
				</div>
				<div class="info-item">
					<span>Phone:</span>
					<input type="text"/>
					<i></i>
				</div>
				<div class="info-item iCal">
					<span>iCal:</span>
					<i class="iCal"></i>
				</div>

			</div>
			-->
			<div class="icons-info clearfix sep">
				<div class="twitter-info"></div>
				<div class="facebook-info"></div>
			</div>
			<div class="subtext smallsep">
				We will never share your personal contact information with anyone.
			</div>
			<div class="subtext smallsep sep-bottom">
				Version 1.0.3
			</div>
			<div class="subtext sep sep-bottom">
			<br/>
			</div>
			<!-- End Step 2a -->
			
			<!-- Begin Information Page -->

			<div class="title-box sep">
				WATCH OUR VIDEO
			</div>
			<div class="video-box smallsep sep-bottom">

											<video id="video-info" class="video-info-class" poster="images/videoPlaceholder.png" controls="controls"> 
												<source	src="assets/videos/sevacalldemo.iphone.mp4"	type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'> 
											</video>
			</div>
			<div class="title-box sep">
				WHAT IS SEVA CALL?
			</div>
			<div class="subtext video-page smallsep">
				Seva Call works to find local businesses that can help with your service need instantly. 
				Sort of like a free personal concierge service. Within iminutes you will reieve calls 
				from providers that can service your specific problem, on your schedule, at your location.
			</div>
			<div class="sep sep-bottom">
			</div>
			<div class="sep">
			<br/>
			</div>
			<!-- End Information Page -->
			
			<!-- Begin Step 3 -->

			<script type="text/javascript"
			  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHtVxQeYDw2uzrMXpbkqnfqkftcjo-B3Y&sensor=true">
			</script>
			<div id="map_canvas" style="width:100%; height:200px"></div>
			<script type="text/javascript">
				var latLong;
				var geocoder = new google.maps.Geocoder();
				
				// Get the Lat Long of our google Map
				//
				geocoder.geocode({ 'address': "20854" }, function( results, status ) {
					if ( status == google.maps.GeocoderStatus.OK ) {
						latLong = results[0].geometry.location;
						initialize();
					}
				});
				
				function initialize() {
					var mapOptions = {
										center		: latLong,
										zoom		: 10,
										mapTypeId	: google.maps.MapTypeId.ROADMAP
									};

					var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
				}
			</script>
			
			<!-- End Step 3 -->
			
			<!-- Begin Final Page -->
			
			<div class="calls-saved sep">
				<div class="calls-saved-container">
					<div class="calls-saved-num">
						32
					</div>
					<span> Calls Saved </span>
					<div class="icons-final clearfix smallsep">
						<div class="twitter-final"></div>
						<div class="facebook-final"></div>
					</div>
				</div>
			</div>
			
			<!-- End Final Page -->
			
			
		</div>
		
	</body>
	</div>
	<script src="js/xLoad.js"></script>
	<script src="xSelect/xSelect.js"></script>
</html>