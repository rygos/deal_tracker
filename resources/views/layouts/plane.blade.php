<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Deal Tracker | {{ config('app.page.version') }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body>
	@if(\App\Helpers\AuthHelper::user() == null)
		@if(!Request::is('*access_denied'))
			<script type="text/javascript"> window.location = "{{ url('/access_denied') }}"; //redirect </script>
		@endif
	@endif

	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>

	@if(isset($charts['index_dpm']))
		<script>
            var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var color = Chart.helpers.color;
            var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: 'Dataset 1',
                    backgroundColor: color('#ff6384').alpha(0.5).rgbString(),
                    borderColor: '#ff6384',
                    borderWidth: 1,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }, {
                    label: 'Dataset 2',
                    backgroundColor: color('#36a2eb').alpha(0.5).rgbString(),
                    borderColor: '#36a2eb',
                    borderWidth: 1,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }]

            };

            window.onload = function() {
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: barChartData,
                    options: {
                        responsive: true,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Bar Chart'
                        }
                    }
                });

            };

            document.getElementById('randomizeData').addEventListener('click', function() {
                var zero = Math.random() < 0.2 ? true : false;
                barChartData.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return zero ? 0.0 : randomScalingFactor();
                    });

                });
                window.myBar.update();
            });

            var colorNames = Object.keys(window.chartColors);
            document.getElementById('addDataset').addEventListener('click', function() {
                var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
                var dsColor = window.chartColors[colorName];
                var newDataset = {
                    label: 'Dataset ' + barChartData.datasets.length,
                    backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                    borderColor: dsColor,
                    borderWidth: 1,
                    data: []
                };

                for (var index = 0; index < barChartData.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());
                }

                barChartData.datasets.push(newDataset);
                window.myBar.update();
            });

            document.getElementById('addData').addEventListener('click', function() {
                if (barChartData.datasets.length > 0) {
                    var month = MONTHS[barChartData.labels.length % MONTHS.length];
                    barChartData.labels.push(month);

                    for (var index = 0; index < barChartData.datasets.length; ++index) {
                        //window.myBar.addData(randomScalingFactor(), index);
                        barChartData.datasets[index].data.push(randomScalingFactor());
                    }

                    window.myBar.update();
                }
            });

            document.getElementById('removeDataset').addEventListener('click', function() {
                barChartData.datasets.splice(0, 1);
                window.myBar.update();
            });

            document.getElementById('removeData').addEventListener('click', function() {
                barChartData.labels.splice(-1, 1); // remove the label first

                barChartData.datasets.forEach(function(dataset, datasetIndex) {
                    dataset.data.pop();
                });

                window.myBar.update();
            });
		</script>
	@endif
</body>
</html>