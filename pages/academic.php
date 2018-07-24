<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Weediyabandara Maha Vidyalaya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="../css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	
</head>
<body>
	<?php include("../widgets/header.php"); ?>
    <!-- / header -->
	<div class="divider"></div>
	
	
	<div class="container">
			<div class="row">
				<div class="col-md-4">
						<h4>2015 Advance Level Summery</h4>
						<canvas id="myChart" width="400" height="400"></canvas>
						<script>
						const CHART = document.getElementById("myChart").getContext('2d');
						Chart.defaults.scale.ticks.beginAtZero = true;
						let barChart = new Chart(CHART,{
							type: 'pie',
							data: {
								labels:['Pass','Fail'],
								datasets:[
									{
										label: 'Points',
										backgroundColor:['#00b300','#cc0000'],
										data:[73.75,26.25]
									}
								]
							},
							options:{
								animation:{
									animateScale:true
								}
							}
						});
						</script>
				</div>
				<div class="col-md-4">
						<h4>2016 Ordinary Level Summery</h4>
						<canvas id="myChartt" width="400" height="400"></canvas>
						<script>
						const CHARTT = document.getElementById("myChartt").getContext('2d');
						Chart.defaults.scale.ticks.beginAtZero = true;
						let barChartt = new Chart(CHARTT,{
							type: 'pie',
							data: {
								labels:['Pass','Fail'],
								datasets:[
									{
										label: 'Points',
										backgroundColor:['#00b300','#cc0000'],
										data:[70,30]
									}
								]
							},
							options:{
								animation:{
									animateScale:true
								}
							}
						});						
						</script>
				
				</div>
				<div class="col-md-4">
						<h4>2016 Grade 5 Scholarship Exam Summery</h4>
						<canvas id="myCharttt" width="400" height="400"></canvas>
						<script>
						const CHARTTT = document.getElementById("myCharttt").getContext('2d');
						Chart.defaults.scale.ticks.beginAtZero = true;
						let barCharttt = new Chart(CHARTTT,{
							type: 'pie',
							data: {
								labels:['Pass','Fail'],
								datasets:[
									{
										label: 'Points',
										backgroundColor:['#00b300','#cc0000'],
										data:[9.7,90.3]
									}
								]
							},
							options:{
								animation:{
									animateScale:true
								}
							}
						});					
						</script>
				</div>
			</div>

			<div class="container">
				<br>
					<h4>2015 Grade 5 Scholarship Exam Results</h4>
					<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Year</th>
										<th>2005</th>
										<th>2006</th>
										<th>2007</th>
										<th>2008</th>
										<th>2009</th>
										<th>2010</th>
										<th>2011</th>
										<th>2012</th>
										<th>2013</th>
										<th>2014</th>
										<th>2015</th>
										<th>2016</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>No of Candidates</td>
										<td>65</td>
										<td>54</td>
										<td>54</td>
										<td>56</td>
										<td>70</td>
										<td>72</td>
										<td>76</td>
										<td>88</td>
										<td>104</td>
										<td>91</td>
										<td>93</td>
										<td></td>
									</tr>
									<tr>
										<td>Passes</td>
										<td>2</td>
										<td>1</td>
										<td>5</td>
										<td>5</td>
										<td>4</td>
										<td>6</td>
										<td>3</td>
										<td>7</td>
										<td>13</td>
										<td>18</td>
										<td>07</td>
										<td></td>
									</tr>
									<tr>
										<td>%</td>
										<td>3</td>
										<td>2</td>
										<td>9</td>
										<td>9</td>
										<td>8</td>
										<td>8</td>
										<td>4</td>
										<td>8</td>
										<td>13</td>
										<td>20</td>
										<td>08</td>
										<td>9.7</td>
									</tr>
								</tbody>
							</table>
						</div>
			</div>
			
	</div>
	
	<?php include("../widgets/footer.php"); ?>

    



	</body>