<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Home Page for UC Water">
		<meta name="author" content="Esteban Perez">

		<title>UC Water</title>
		<!--<link href="./css/water.css" rel="stylesheet">-->

		<style>
			.editButton
			{
				float: right;
			}
			.editBar
			{
				width: 100%;
				height: 20px;
				border-bottom: solid 1px lightgrey;
				background-color: ghostwhite;
				border-radius: 5px 5px 0px 0px;
			}

			<?php
			$user = true;
			if($user)
			{
				echo ".editable
        {
            border: solid 1px lightgrey;
            border-radius: 5px;
        }";
			}
			?>










			.hidden{opacity: 0;}
			.card
			{
				padding:10px;
				box-shadow: 0px 0px 5px #888888;
				width: 30%;
			}
			#glare
			{
				transition: all .7s ease;
			}

			#fillContainer
			{

				transition:All 1s ease;
				-webkit-transition:All 1s ease;
				-moz-transition:All 1s ease;
				-o-transition:All 1s ease;
				transform: rotate(4deg) scale(1) skew(0deg) translate(0px, 800px);

			}
			.goodQuality
			{
				transform: rotate(4deg) scale(1) skew(0deg) translate(0px, 800px)!important;
			}
			.mediumQuality
			{
				transform: rotate(4deg) scale(1) skew(0deg) translate(0px, 1150px)!important;
			}
			.badQuality
			{
				transform: rotate(4deg) scale(1) skew(0deg) translate(0px, 1400px)!important;
			}


			#fill {
				opacity:1;
				fill:url(#blueGradient);
				fill-opacity:1;
				transition:All 1s ease;
				-webkit-transition:fill 2s ease;
				-moz-transition:fill 2s ease;
				-o-transition:fill 2s ease;
				-webkit-animation: cssAnimation 1.8s infinite linear ;
				-moz-animation: cssAnimation 1.8s infinite linear ;
				-o-animation: cssAnimation 1.8s infinite linear ;

			}
			@-webkit-keyframes cssAnimation {
				0% { -webkit-transform: translateX(-975px) translateY(0px); }
				50%{-webkit-transform: translateX(-485.5px) translateY(35px);}
				100% { -webkit-transform: translateX(-0) translateY(0px); }
			}
			@-moz-keyframes cssAnimation {
				0% { -webkit-transform: translateX(-975px) translateY(0px); }
				50%{-webkit-transform: translateX(-485.5px) translateY(35px);}
				100% { -webkit-transform: translateX(-0) translateY(0px); }
			}
			@-o-keyframes cssAnimation {
				0% { -webkit-transform: translateX(-975px) translateY(0px); }
				50%{-webkit-transform: translateX(-485.5px) translateY(35px);}
				100% { -webkit-transform: translateX(-0) translateY(0px); }
			}
		</style>


	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="row card">

						<div class="col-sm-6">

							<svg style="margin:15%" viewBox="0 0 708.66142 1062.9921"
								 preserveAspectRatio="xMidYMin meet">
								<defs
									  id="defs4827">
									<linearGradient
													gradientUnits="userSpaceOnUse"
													y2="1056.3204"
													x2="468.60245"
													y1="648.68994"
													x1="641.35809"
													id="linearGradient5720"
													xlink:href="#linearGradient5714" />

									<filter
											height="3.1981387"
											y="-1.0990694"
											width="1.7306971"
											x="-0.36534854"
											id="filter4870"
											style="color-interpolation-filters:sRGB">
										<feGaussianBlur
														id="feGaussianBlur4872"
														stdDeviation="94.588047" />
									</filter>




									<linearGradient
													id="blue">
										<stop
											  id="stop6010"
											  offset="0"
											  style="stop-color:#0066ff;stop-opacity:1;" />
										<stop
											  id="stop6012"
											  offset="1"
											  style="stop-color:#0066ff;stop-opacity:0;" />
									</linearGradient>
									<linearGradient
													gradientUnits="userSpaceOnUse"
													y2="-3572.8623"
													x2="937.68768"
													y1="217.25513"
													x1="937.68768"
													id="blueGradient"
													xlink:href="#blue" />
									<linearGradient
													id="yellow">
										<stop
											  id="stop6010"
											  offset="0"
											  style="stop-color:#806600;stop-opacity:1" />
										<stop
											  id="stop6012"
											  offset="1"
											  style="stop-color:#ffdd55;stop-opacity:1" />
									</linearGradient>
									<linearGradient
													gradientUnits="userSpaceOnUse"
													y2="-882.07458"
													x2="904.86188"
													y1="646.82983"
													x1="904.86188"
													id="yellowGradient"
													xlink:href="#yellow" />
									<linearGradient
													id="red">
										<stop
											  id="stop6010"
											  offset="0"
											  style="stop-color:#d40000;stop-opacity:1" />
										<stop
											  id="stop6012"
											  offset="1"
											  style="stop-color:#de8787;stop-opacity:1" />
									</linearGradient>
									<linearGradient
													gradientUnits="userSpaceOnUse"
													y2="-830.07098"
													x2="904.86188"
													y1="-164.42561"
													x1="904.86188"
													id="redGradient"
													xlink:href="#red" />

									<clipPath id="clip-2">
										<path
											  d="m 383.17528,1033.716 c 29.96722,-2.5497 53.83614,-7.4278 80.62743,-16.4841 44.3019,-14.9725 87.34119,-42.0715 123.54145,-77.78377 48.12823,-47.47937 79.25006,-100.61185 94.08534,-160.62637 10.86438,-43.95041 12.62063,-96.43132 4.79368,-143.24626 C 676.96174,580.18107 653.21177,527.8272 617.33152,483.71182 590.7269,451.00104 526.72819,358.94753 489.51504,299.86514 440.31538,221.75179 407.30079,157.86884 372.77007,83.526533 361.21626,58.651723 342.63529,6.9351935 342.63529,6.9351935 321.74276,64.865315 296.43366,126.3718 271.73943,176.45293 c -26.59961,53.57772 -60.79712,115.38113 -93.08202,168.22253 -30.22239,49.46577 -36.53716,59.5823 -54.33629,87.04965 -27.350634,42.20715 -39.268104,60.26668 -43.843994,66.44062 -48.111004,64.91225 -68.495284,140.7287 -61.632798,229.23426 7.110861,91.70902 51.796371,172.9987 129.786542,236.10125 9.90427,8.01361 31.93442,22.93852 43.77059,29.65353 35.52548,20.15413 68.86113,31.53313 111.25497,37.97673 23.76725,3.6123 55.36099,4.639 79.51885,2.5845 z" >

										</path>
									</clipPath>
								</defs>
								<metadata
										  id="metadata7">
									<rdf:RDF>
										<cc:Work
												 rdf:about="">
											<dc:format>image/svg+xml</dc:format>
											<dc:type
													 rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
											<dc:title></dc:title>
										</cc:Work>
									</rdf:RDF>
								</metadata>
								<g style="clip-path:url(#clip-2)" >
									<g id="fillContainer">
										<path
											  id="fill"
											  d="M 480.35429,-643.31048 C 304.94983,-643.3104 171.61173,-552.32027 0,-552.32027 L 0,210 l 1915.2626,0 6.1603,-762.32027 c -175.2225,-3.38615 -304.9521,-90.99028 -480.3569,-90.99021 -175.4041,7e-5 -304.95,90.99013 -480.35454,90.99021 -175.4045,8e-5 -304.95271,-90.99029 -480.35717,-90.99021 z"
											  />
										/>
									</g>
								</g>
								<path
									  id="glare"
									  d="m 649.00977,644.02539 c 0,0 -3.12632,-8.51072 -35.87501,-10.93221 -35.39015,-2.6168 -33.49962,4.2521 -33.49962,4.2521 23.42756,114.57702 16.02076,244.9869 -66.64686,326.79928 21.61407,-13.55769 41.45481,-29.93658 58.69727,-48.91211 33.54859,-35.51728 57.19441,-80.24616 72.47656,-126.32422 13.81567,-50.36465 14.54271,-97.79999 4.84766,-144.88281 z"
									  style="fill:white;fill-opacity:1;stroke:none;stroke-width:35.13834381;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
								<g
								   id="layer1"
								   transform="translate(0,10.629921)">

									<path
										  style="fill:none;stroke:#000000;stroke-width:35.13834381;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
										  d="m 383.17528,1033.716 c 29.96722,-2.5497 53.83614,-7.4278 80.62743,-16.4841 44.3019,-14.9725 87.34119,-42.0715 123.54145,-77.78377 48.12823,-47.47937 79.25006,-100.61185 94.08534,-160.62637 10.86438,-43.95041 12.62063,-96.43132 4.79368,-143.24626 C 676.96174,580.18107 653.21177,527.8272 617.33152,483.71182 590.7269,451.00104 526.72819,358.94753 489.51504,299.86514 440.31538,221.75179 407.30079,157.86884 372.77007,83.526533 361.21626,58.651723 342.63529,6.9351935 342.63529,6.9351935 321.74276,64.865315 296.43366,126.3718 271.73943,176.45293 c -26.59961,53.57772 -60.79712,115.38113 -93.08202,168.22253 -30.22239,49.46577 -36.53716,59.5823 -54.33629,87.04965 -27.350634,42.20715 -39.268104,60.26668 -43.843994,66.44062 -48.111004,64.91225 -68.495284,140.7287 -61.632798,229.23426 7.110861,91.70902 51.796371,172.9987 129.786542,236.10125 9.90427,8.01361 31.93442,22.93852 43.77059,29.65353 35.52548,20.15413 68.86113,31.53313 111.25497,37.97673 23.76725,3.6123 55.36099,4.639 79.51885,2.5845 z"
										  id="path4160" />

									<path
										  id="path4758"
										  transform="translate(0,-10.629921)"
										  d="M 43.515625 838.84375 C 65.291928 889.61508 100.6571 935.31485 148.63086 974.13086 C 158.53513 982.14447 180.56617 997.07011 192.40234 1003.7852 C 227.92782 1023.9393 261.26241 1035.3181 303.65625 1041.7617 C 327.4235 1045.374 359.01792 1046.4002 383.17578 1044.3457 C 413.143 1041.796 437.01144 1036.9176 463.80273 1027.8613 C 508.10463 1012.8888 551.14349 985.79039 587.34375 950.07812 C 621.83135 916.05548 647.58362 879.12804 664.87109 838.84766 L 574.89258 838.84766 C 566.77648 849.10122 557.8411 859.06455 548.03516 868.73828 C 517.93828 898.42945 482.15485 920.96007 445.32227 933.4082 C 423.048 940.93761 403.20379 944.99347 378.28906 947.11328 C 358.20422 948.8214 331.93586 947.9681 312.17578 944.96484 C 276.92956 939.60763 249.21555 930.14675 219.67969 913.39062 C 209.8391 907.80775 191.52347 895.39884 183.28906 888.73633 C 164.27733 873.35376 147.6522 856.66771 133.49219 838.84766 L 43.980469 838.84766 C 43.825248 838.84766 43.670793 838.84397 43.515625 838.84375 z "
										  style="fill:#000000;stroke:none;stroke-width:35.13834381;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;fill-opacity:1;filter:url(#filter4870);clip-path:url(#clip-2)" />

								</g>

							</svg>

						</div>
						<div class="col-sm-6 editable" id="Description">
							<span >
								__________ water district has violations for ____________ and ____________ drinking this water can lead to __________, __________, __________, __________ and ___________.
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="./js/libraries/jquery-3.1.1.min.js"></script>

		<?php
		/*$tinwsys = $_GET["tinwsys"];
		$pwsid = $_GET['pwsid'];
		echo "<script>var tinwsys = ".$tinwsys."; var pwsid = '".$pwsid."';</script>";*/
		?>

		<script>


			function getQuality()
			{
				//return 0-100
				return 50;
			}
			function setQuality()
			{
				var waterDroplet = $('#fillContainer');
				var quality = getQuality();
				quality>90?waterDroplet.addClass('goodQuality'):
				quality>70?waterDroplet.addClass('mediumQuality'):
				waterDroplet.addClass('badQuality');
			}
			function setQuality(quality)
			{
				console.log("taking var: "+quality);

				var glare = $('#glare');
				var waterDroplet = $('#fillContainer');
				var waterFill = $('#fill');
				if(quality>90)
				{
					waterDroplet.attr("class",'goodQuality');
					waterFill.attr('style','fill:url(#blueGradient)!important;');
					glare.attr("class",'');
				}else if(quality>70)
				{
					waterDroplet.attr("class",'mediumQuality')
					waterFill.attr('style','fill:url(#yellowGradient)!important;');
					glare.attr("class",'hidden');
				}else{
					waterDroplet.attr("class",'badQuality');
					waterFill.attr('style','fill:url(#redGradient)!important;');
					glare.attr("class",'hidden');
				}

			}
		</script>






		<script>
			function editBar(temp)
			{
				temp.innerHTML = '<div class="editBar"><a href="#" class = "editButton">edit</a></div><div class="fetchedData">'+temp.innerHTML+"</div>";
				$("#"+temp.id+" .editButton").click(function(){
					editContent($("#"+temp.id));
				});
			}
			function editContent(elem)
			{
				var temp = elem.children()[1].innerHTML;
				var content = '<textarea  class="submitArea" style="width:100%"></textarea><a href="#" class="submitButton">submit</a>';
				elem.children()[1].innerHTML = content;
				console.log(temp);
				elem.find( ".submitArea" ).val(temp);
				elem.find( ".submitButton" ).click(function(){
					updateData($("#"+elem[0].id));
				});
			}

			function updateData(elem)
			{
				var jqxhr = $.post( "./php/updateContent.php",{ id: elem[0].id, post_contents: elem.find( ".submitArea" ).val() }, function() {
					alert( "success" );
				})
				.always(function() {
					var temp = elem[0];
					var query = './php/getContent.php?id="'+temp.id+'"';
					$.get(query, function(data) {
						var out = data;
						temp.innerHTML = out;
						editBar(temp);
					});
					elem[0].innerHTML = '<div class="editBar"><a href="#" class = "editButton">edit</a></div><div class="fetchedData">'+elem.find( ".submitArea" ).val()+"</div>";
					console.log(elem);
				});

			}

		</script>
		<script>

			var editables = $(".editable");
			editables.each(function(){
				var temp = $(this)[0];
				$.ajax({
					url: './php/getContent.php',
					type: 'GET',
					data: {
						"id": '"'+temp.id+'"',
						"content": '"'+temp.innerHTML+'"'
					},
					success: function(data) {
						var out = data;
						temp.innerHTML = out;
						<?php echo "editBar(temp);";?>
					},
					error: function(e) {
						alert("oops");
					}
				});
			});

		</script>






		<!--
<script src="js/custom/reloadContent.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
		<!--<script type="text/javascript" src="./js/libraries/jquery.canvasjs.min.js"></script> -->

	</body>
</html>
