@extends('layouts.layout')

@section('menuopciones')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{  route('home') }}">Principal</a>
            <i class="icon-angle-right"></i>
        </li>
    </ul>

@stop

@section('contenido')

    {{--Grafica de previsualizacion--}}
    <div class="row-fluid">

        <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
            <div class="boxchart">{{\App\Http\Controllers\HomeController::getCantidadPasesProduccion(10)}}</div>
            <div class="number">100<i class="icon-arrow-up"></i></div>
            <div class="title">Pases Producción</div>
            <div class="footer">
                <a href="#">Ultimos {{ substr(\App\Http\Controllers\HomeController::getCantidadPasesProduccion(10),3,10) }} meses</a>
            </div>
        </div>

    </div>

    {{--Grafica de primera vista en pagina principal--}}
    <div class="row-fluid">

        <div class="widget blue span5" onTablet="span6" onDesktop="span5">

            <h2><span class="glyphicons globe"><i></i></span> Formulario 01</h2>

            <hr>

            <div class="content">

                <div class="verticalChart">

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>130</span>
                            </div>

                        </div>

                        <div class="title">US</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>16%</span>
                            </div>

                        </div>

                        <div class="title">PL</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>12%</span>
                            </div>

                        </div>

                        <div class="title">GB</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>9%</span>
                            </div>

                        </div>

                        <div class="title">DE</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>7%</span>
                            </div>

                        </div>

                        <div class="title">NL</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>6%</span>
                            </div>

                        </div>

                        <div class="title">CA</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>5%</span>
                            </div>

                        </div>

                        <div class="title">FI</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>4%</span>
                            </div>

                        </div>

                        <div class="title">RU</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>3%</span>
                            </div>

                        </div>

                        <div class="title">AU</div>

                    </div>

                    <div class="singleBar">

                        <div class="bar">

                            <div class="value">
                                <span>1%</span>
                            </div>

                        </div>

                        <div class="title">N/A</div>

                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>

        </div><!--/span-->


        <div class="sparkLineStats span4 widget green" onTablet="span5" onDesktop="span4">

            <ul class="unstyled">

                <li><span class="sparkLineStats3"></span>
                    Pageviews:
                    <span class="number">781</span>
                </li>
                <li><span class="sparkLineStats4"></span>
                    Pages / Visit:
                    <span class="number">2,19</span>
                </li>
                <li><span class="sparkLineStats5"></span>
                    Avg. Visit Duration:
                    <span class="number">00:02:58</span>
                </li>
                <li><span class="sparkLineStats6"></span>
                    Bounce Rate: <span class="number">59,83%</span>
                </li>
                <li><span class="sparkLineStats7"></span>
                    % New Visits:
                    <span class="number">70,79%</span>
                </li>
                <li><span class="sparkLineStats8"></span>
                    % Returning Visitor:
                    <span class="number">29,21%</span>
                </li>

            </ul>

            <div class="clearfix"></div>

        </div><!-- End .sparkStats -->

    </div>
@stop