<?php

class PageController extends BaseController
{

    public function showHomepage()
    {
        return View::make('pages.homepage');
    }
    
    public function showAbout()
    {
        return View::make('pages.about');
    }
    
    public function showTeam()
    {
        return View::make('pages.team');
    }
    
    public function showDonate()
    {
        return View::make('pages.team');
    }
    
    public function showDownload()
    {
        return View::make('pages.team');
    }
    
    public function showSupport()
    {
        return View::make('pages.support');
    }
    
    public function showFaqs()
    {
        return View::make('pages.faqs');
    }

}
