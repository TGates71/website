@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title')
Donate - Sentora
@stop

@section('meta')
<meta name="author" content="ballen@bobbyallen.me">
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>Donate</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{ URL::route('home') }}"><i class="ion-home"></i> Home</a></li>
                    <li class="active"><a>Donate</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="divied-60"></div>

<div class="container">
    <div class="row">

    </div>
</div>
@stop

{{-- Custom CSS/Javascripts that will be injected into the HTML 'HEAD' portion --}}
@section('scripts.top')

@stop


{{-- Custom CSS/Javascripts that will be injected into the HTML at the bottom of the page --}}
@section('scripts.bottom')

@stop