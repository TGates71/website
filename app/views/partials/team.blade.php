@foreach(Config::get('site.team') as $team)
<div class="row"><h2>{{ $team['name'] }}</h2></div>
<div class="row">
    @foreach($team['members'] as $member)
    <div class="col-md-3 margin-btm20">
        <img src="{{ $member['role'] }}" class="img-responsive" alt="">
        <div class="person-desc">
            <h4>{{ $member['name'] }}<small></small></h4>
            <p>{{ $member['role'] }}</p>
            <ul class="list-unstyled list-inline social">
                @if(isset($member['social_facebook']) && $member['social_facebook'] != '')
                <li><a href="{{ $member['social_facebook'] }}"><i class="ion-social-facebook-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook Profile"></i></a></li>
                @endif
                @if(isset($member['social_twitter']) && $member['social_twitter'] != '')
                <li><a href="{{ $member['social_twitter'] }}"><i class="ion-social-twitter-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On twitter"></i></a></li>
                @endif
                @if(isset($member['social_googleplus']) && $member['social_googleplus'] != '')
                <li><a href="{{ $member['social_googleplus'] }}"><i class="ion-social-googleplus-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow On googleplus"></i></a></li>
                @endif
                @if(isset($member['social_github']) && $member['social_github'] != '')
                <li><a href="{{ $member['social_github'] }}"><i class="ion-social-github-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow on GitHub"></i></a></li>
                @endif
                @if(isset($member['social_siteblog']) && $member['social_siteblog'] != '')
                <li><a href="{{ $member['social_siteblog'] }}"><i class="ion-social-wordpress-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow on GitHub"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
    @endforeach
</div>
<div class="divied-40"></div>
@endforeach