@extends('layouts.layout')

@section('menuopciones')


@stop

@section('contenido')

    <section class="moduler wrapper_404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >404</h1>
                        <h2 class="wow fadeInUp animated" data-wow-delay=".6s">Opps! Existe problemas para ingresar a esta p&aacute;gina</h2>
                        <p class="wow fadeInUp animated" data-wow-delay=".9s">La p&aacute;gina que usted quiere ver fue movida, eliminada, renombrado o realmente nunca existio.</p>
                        <a href="{{ route('home') }}" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">Ir P&aacute;gina Principal</a>

                    </div>
                </div>
            </div>
        </div>
    </section>


@stop