<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('home') }}l"><img src="img/sentora_logo.png" class="img-responsive" alt="Sentora"></a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="/">Home <i class="ion-ios7-arrow-down"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">About <i class="ion-ios7-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('about') }}">Project overview</a></li>
                        <li><a href="{{ URL::route('the-team') }}">The team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Support <i class="ion-ios7-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('support.faqs') }}">FAQs</a></li>
                        <li><a href="{{ URL::to('http://forums.sentora.io') }}">Support forum</a></li>
                        <li><a href="{{ URL::route('support.premium') }}">Premium support</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ URL::route('download') }}">Download <i class="ion-ios7-arrow-down"></i></a>
                </li>
                <li class="dropdown">
                    <a href="{{ URL::route('donate') }}">Donate <i class="ion-ios7-arrow-down"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>