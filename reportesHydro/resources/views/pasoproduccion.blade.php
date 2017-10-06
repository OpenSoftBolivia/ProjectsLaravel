@extends('layouts.layout')

@section('menuopciones')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{  route('home') }}">Principal</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="{{  route('pasoproduccion') }}">Pasos a Producci&oacute;n</a></li>
    </ul>

@stop

@section('contenido')

    <center>
        <form action="/listaDatos" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            DATOS DE BUSQUEDA<BR>
            DATO 1: <input type="text" name="dato1"><br>
            DATO 2: <input type="text" name="dato2"><br>
            <input type="submit" name="btnConsulta" value="Realizar Consulta">
        </form>
    </center>

    <div class="row-fluid">

        <div class="box">
            <div class="box-header">
                <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Chart with points</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="sincos"  class="center" style="height:300px;" ></div>
                <p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
            </div>
        </div>

    </div><!--/row-->

    <div class="row-fluid sortable">
        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Pie</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div id="piechart" style="height:300px"></div>
            </div>
        </div>

    </div><!--/row-->


@stop