<?php

namespace Sentora\Composers;

class NewsVersionComposer
{

    public function compose($view)
    {
        $view->with('senApiVersion', (new \Sentora\Providers\SentoraPublicApi)->latestStableVersion());
        $view->with('senApiNews', (new \Sentora\Providers\SentoraPublicApi)->lastestNews());
    }

}
