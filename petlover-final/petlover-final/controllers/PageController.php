<?php

class PageController extends Controller
{
    public function about()
    {
        $this->render('public.pages.about');
    }


    public function contact()
    {
        $this->render('public.pages.contact');
    }

    public function shoping()
    {
        $this->render('public.products.shoping');
    }

    public function profile()
    {
        $this->render('public.pages.profile');
    }

   
    
  
}