<!DOCTYPE html>
<html style="height:100%; width:100%;">
	<head>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<script src='js/ios-orientationchange-fix.js'></script>
		<meta name="viewport" id="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" >
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="css/buttons.css" type="text/css" rel="stylesheet" />
		<link href="css/alert.css" type="text/css" rel="stylesheet" />
    </head>
<body style="margin-top:60px; width:100%;">
	<!--
	<div style="position:absolute; top:0px; bottom:-60px; left:0; right:0; overflow-x:hidden;">
	-->
	<div style="height:100%; width:100%; position:relative; overflow-x:hidden;">
		<div id="head" class="header">
			<div style="margin: 0 auto; height:100%">
				<div class="padded headerpadding" >
					
					<table id="header-button-left-wrapper">
						<tr>
							<td class="header-button-left header-button-blank">
								<span id="header-button-left-text"></span>
							</td>
						</tr>
					</table>
					<table id="header-button-right-wrapper">
						<tr>
							<td class="header-button-right header-button-blank">
								<span id="header-button-right-text"></span>
							</td>
						</tr>
					</table>
					
					<div class="logo-white">&nbsp;
					</div>
					
				</div>
			</div>
		</div>
		<div id="MAIN" class="GPUAccel padded sep-bottom">
			<!-- Begin Step 1 -->
			<form style="" action="javascript: OOvaCall.actionStep1();">

				<div class="what-box sep-text noGPUAccel" style="position:relative;">
					<span class="title-box">I NEED A</span>
					<div id="what-text-overlay-fix">Select Service Category</div>
					<select id="what-select" placeholder="Select Service Category" class="what-text nativeSelect touchandclickevent">
						<option id="select-service-category"><span class="testing">Select Service Category</span></option>
					</select>
				</div>
				
				<div class="where-box sep-text">
					<span class="title-box">NEAR</span>
					<div class="noGPUAccel where-text-wrap">
						<div class="noGPUAccel where-text-innerwrap">
							<input class="where-text" type="text" placeholder="Zipcode" style="width:100%;"/>
						</div>
					</div>
					<div class="button" id="where-button">
						<a href="#"></a>
					</div>
				</div>
				
				<div class="subtext sep-shadow">
					We'll connect you with local businesses instantly!
				</div>
				
				<table id="footer-table" class="sep">
					<tr>
						<td class="footer-icon-wrapper">
							<div id="info-icon" class="info-icon">
							&nbsp;
							</div>
						</td>
						<td>
							<input type="submit" id="actionbutton" class="button" value="Next"/>
						</td>
						<td class="footer-icon-wrapper">
							<div id="settings-icon" class="settings-icon">
							&nbsp;
							</div>
						</td>
					</tr>
				</table>
				
			</form>
			<!-- End Step 1 -->
		</div>
		<div class="ready-right" style="position:absolute;">
			OK<br/>.
			OK<br/>.
			OK<br/>.
			OK<br/>.
		</div>
	</div>
	<script>
		function pageSnap(){
			setTimeout( function(){ window.scrollTo(0, 1); }, 50 );
		}
		
		pageSnap();
	</script>
</body>
</html>