<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Grafico Canales Mas Prestados"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		//yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: <?php echo $ChannelFull[0]['count']; ?>, label: "<?php echo $ChannelFull[0]['nchannel']; ?>"},
			{y: <?php echo $ChannelFull[1]['count']; ?>, label: "<?php echo $ChannelFull[1]['nchannel']; ?>"},
			{y: <?php echo $ChannelFull[2]['count']; ?>, label: "<?php echo $ChannelFull[2]['nchannel']; ?>"},
			{y: <?php echo $ChannelFull[3]['count']; ?>, label: "<?php echo $ChannelFull[3]['nchannel']; ?>"}
			

		]
	}]
});
chart.render();

}
</script>

@extends('layouts.designCharts')
@section('content')

<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- Charts Start-->
        <div class="charts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="charts-single-pro responsive-mg-b-30">
                            <div class="alert-title">
                        
                            </div>
                            <div id="chartContainer">
                                <canvas id="chartContainer"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="charts-single-pro">
                            <div class="alert-title">
                            
                            </div>
                            <div id="chartContainer">
                                <canvas id="chartContainer"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
          
               
            </div>
        </div>
        <!-- Charts End-->
     

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection
           