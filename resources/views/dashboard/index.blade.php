@extends('dashboard.layout.container')

@section('content')
    <div class="row">


            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card text-white bg-flat-color-2">
                                <div class="card-body pb-0">
                                    <div class="dropdown float-right">

                                    </div>
                                    <h4 class="mb-0">
                                        <span class="count">{{ $productSum }}</span>
                                    </h4>
                                    <p class="text-light">تعداد گلها </p>

                                    <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                        <canvas id="widgetChart2" height="140" width="256" style="display: block; width: 128px; height: 70px;"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="card text-white bg-flat-color-4">
                                <div class="card-body pb-0">
                                    <div class="dropdown float-right">

                                    </div>
                                    <h4 class="mb-0">
                                        <span class="count">{{ $tagSum }}</span>
                                    </h4>
                                    <p class="text-light">تعداد دسته ها</p>

                                    <div class="chart-wrapper px-3" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                        <canvas id="widgetChart4" height="44" width="192" style="display: block; width: 96px; height: 22px;"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



    </div><!-- .row -->

    @endsection