@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'Sentora - The open-source web hosting control panel.')

@section('meta')
<meta name="description" content="Sentora is an open-source web hosting control panel built specifically to work on a variety of Linux distributions. Sentora is licensed under the GPL and is a separately maintained fork of the original ZPanel project.">
<meta name="keywords" content="sentora, zpanel, web, hosting, control, panel, open">
<meta name="author" content="ballen@bobbyallen.me">
<meta property="og:image" content="http://sentora.io/img/sentora_logo.png" />
<meta property="og:title" content="Sentora" />
<meta property="og:description" content="Sentora is an open-source web hosting control panel for Linux based servers." />
<meta property="og:url" content="http://sentora.io" />
<meta property="og:site_name" content="Sentora - The open-source web hosting panel." />
<meta property="og:locale" content="en_GB" />
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<div class="divied-60"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="error-page">
                <h2>~</h2>
                <h1>We'll shortly be launching the new project's web site</h1>
                <p class="margin-btm40">
                    Our team are currently working hard on developing the new project web site, we hope that you come back and visit us again shortly, in the mean time why not follow us on our <a href="https://twitter.com/sentoracp">Twitter</a> page.
                </p>
            </div>
        </div>

        <div class="divied-60"></div>
    </div>
</div>
@stop

{{-- Custom CSS/Javascripts that will be injected into the HTML 'HEAD' portion --}}
@section('scripts.top')

@stop


{{-- Custom CSS/Javascripts that will be injected into the HTML at the bottom of the page --}}
@section('scripts.bottom')

@stop
