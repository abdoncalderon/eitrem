@extends('layouts.main')

@section('title','Hardware')

@section('section','Hardware')

@section('level','Recursos')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Hardware</li>
    </ol>
@endsection

@section('mainContent')
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#computers" data-toggle="tab">Computadoras</a></li>
                <li><a href="#monitors" data-toggle="tab">Monitores</a></li>
                <li><a href="#printers" data-toggle="tab">Impresoras</a></li>
                <li><a href="#others" data-toggle="tab">Otros</a></li>
            </ul>
            <div class="tab-content">

                <div class="active tab-pane" id="computers">
                    @include('computers.index')
                </div>

                <div class="tab-pane" id="monitors">
                        @include('monitors.index')
                </div>
    
                <div class="tab-pane" id="printers">
                    @include('printers.index')
                </div>

                <div class="tab-pane" id="others">
                    @include('others.index')
                </div>

            </div>
        </div>
    </section>
@endsection