

@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Bienvenido {{Auth::user()->name}}</div>
                    <div class="card-body">
                    <div id="piechart" class="col-md-12"></div>
                    </div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);

                                @php 
                                    $forms[0]->correct_information = 'Si';
                                    $forms[1]->correct_information = 'No';
                                    $forms[2]->correct_information = 'Más o Menos';
                                @endphp

                                function drawChart() {

                                var data = google.visualization.arrayToDataTable([
                                    ['Respuestas', 'Hours per Day'],
                                        @php
                                            foreach($forms as $form) {
                                                echo "['".$form->correct_information."', ".$form->total."],";
                                            }
                                        @endphp
                                ]);

                                var options = {
                                    title: 'Respuestas de Información correcta',
                                    is3D: false,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                chart.draw(data, options);
                                }
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

