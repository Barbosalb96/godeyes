@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header bg-white">
                <div class="d-flex flex-column">
                    <h2 class="p-0 m-0">Painel de Controle</h2>
                    <span class="p-0 m-0">Tempos gastos</span>
                </div>
            </div>
            <div class="card-body">
                <!-- HTML -->
                <div id="chartdiv"></div>

                <div class="d-flex justify-content-between mt-5">
                    <div class="card-time ">

                        <h3>Tempo gasto no mês</h3>
                        <h2>140:30 horas</h2>
                        <p>Data de inicio 9/7/20022</p>
                        <hr>
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                    <div class="card-map d-flex flex-column align-items-center">
                        <div class="card-title-map">
                            <strong>Ultima localização:</strong> <span>Rua joinville,1068-vila nova</span>
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="700px" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=sao%20luis%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- Styles -->
    <style>
        #chartdiv {
            width: 100%;
            height: 200px;
        }

        #chartround {
            width: 100%;
            height: 500px;
        }

    </style>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Chart code -->
    <script>
        am5.ready(function () {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root)
            ]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelX: "none",
                wheelY: "none"
            }));

// We don't want zoom-out button to appear while animating, so we hide it
            chart.zoomOutButton.set("forceHidden", true);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var yRenderer = am5xy.AxisRendererY.new(root, {
                minGridDistance: 30
            });

            var yAxis = chart.yAxes.push(am5xy.CategoryAxis.new(root, {
                maxDeviation: 0,
                categoryField: "network",
                renderer: yRenderer,
                tooltip: am5.Tooltip.new(root, {themeTags: ["axis"]})
            }));

            var xAxis = chart.xAxes.push(am5xy.ValueAxis.new(root, {
                maxDeviation: 0,
                min: 0,
                extraMax: 0.1,
                renderer: am5xy.AxisRendererX.new(root, {})
            }));


// Add series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: "Series 1",
                xAxis: xAxis,
                yAxis: yAxis,
                valueXField: "value",
                categoryYField: "network",
                tooltip: am5.Tooltip.new(root, {
                    pointerOrientation: "left",
                    labelText: "{valueX}"
                })
            }));


// Rounded corners for columns
            series.columns.template.setAll({
                cornerRadiusTR: 5,
                cornerRadiusBR: 5
            });

// Make each column to be of a different color
            series.columns.template.adapters.add("fill", function (fill, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });

            series.columns.template.adapters.add("stroke", function (stroke, target) {
                return chart.get("colors").getIndex(series.columns.indexOf(target));
            });


// Set data
            var data = [
                {
                    "network": "Facebook",
                    "value": 2255250000
                },
                {
                    "network": "Google+",
                    "value": 430000000
                },
                {
                    "network": "Instagram",
                    "value": 1000000000
                },

            ];

            yAxis.data.setAll(data);
            series.data.setAll(data);
            sortCategoryAxis();

// Get series item by category
            function getSeriesItem(category) {
                for (var i = 0; i < series.dataItems.length; i++) {
                    var dataItem = series.dataItems[i];
                    if (dataItem.get("categoryY") == category) {
                        return dataItem;
                    }
                }
            }

            chart.set("cursor", am5xy.XYCursor.new(root, {
                behavior: "none",
                xAxis: xAxis,
                yAxis: yAxis
            }));


// Axis sorting
            function sortCategoryAxis() {

                // Sort by value
                series.dataItems.sort(function (x, y) {
                    return x.get("valueX") - y.get("valueX"); // descending
                    //return y.get("valueY") - x.get("valueX"); // ascending
                })

                // Go through each axis item
                am5.array.each(yAxis.dataItems, function (dataItem) {
                    // get corresponding series item
                    var seriesDataItem = getSeriesItem(dataItem.get("category"));

                    if (seriesDataItem) {
                        // get index of series data item
                        var index = series.dataItems.indexOf(seriesDataItem);
                        // calculate delta position
                        var deltaPosition = (index - dataItem.get("index", 0)) / series.dataItems.length;
                        // set index to be the same as series data item index
                        dataItem.set("index", index);
                        // set deltaPosition instanlty
                        dataItem.set("deltaPosition", -deltaPosition);
                        // animate delta position to 0
                        dataItem.animate({
                            key: "deltaPosition",
                            to: 0,
                            duration: 1000,
                            easing: am5.ease.out(am5.ease.cubic)
                        })
                    }
                });

                // Sort axis items by index.
                // This changes the order instantly, but as deltaPosition is set,
                // they keep in the same places and then animate to true positions.
                yAxis.dataItems.sort(function (x, y) {
                    return x.get("index") - y.get("index");
                });
            }


            setInterval(function () {
                updateData();
            }, 1500)

            // function updateData() {
            //     am5.array.each(series.dataItems, function (dataItem) {
            //         var value = dataItem.get("valueX") + Math.round(Math.random() * 1000000000 - 500000000);
            //         if (value < 0) {
            //             value = 500000000;
            //         }
            //         // both valueY and workingValueY should be changed, we only animate workingValueY
            //         dataItem.set("valueX", value);
            //         dataItem.animate({
            //             key: "valueXWorking",
            //             to: value,
            //             duration: 600,
            //             easing: am5.ease.out(am5.ease.cubic)
            //         });
            //     })
            //
            //     // sortCategoryAxis();
            // }


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear(1000);
            chart.appear(1000, 100);

        }); // end am5.ready()
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>


    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                rotation: 1 * Math.PI,
                circumference: 1 * Math.PI
            }
        });

    </script>

@endsection